<?php
include ('connection.php');
$collection = $db->user_a;
$gridfs=$db->selectGridFSBucket();
session_start();
    $id = $_SESSION['id'];
    $key = $collection->findOne(["_id" => new MongoDB\BSON\ObjectID($id)]);
    $user = $key['username'];
    $email=$key['email'];
    $phone=$key['phone'];
    $gender=$key['gender'];
    $birth=$key['birthday'];

    $file=$key['_id'].'DP';
    $contents='';$stream='';
    try {
        $stream = $gridfs->openDownloadStreamByName($file, ['revision' => 0]);
        $contents = stream_get_contents($stream);
    }
    catch (Exception $e)
    {
       if($key['gender']=='male')
       {
           $file = 'man_logo.jpg';
       }
       else if($key['gender']=='female')
           $file = 'woman_logo.jpg';
       else
           $file = 'profile_logo.png';
       $stream = $gridfs->openDownloadStreamByName($file,['revision' => 0]);
       $contents = stream_get_contents($stream);
    }
//$collection = $db->message;
//$collection->insertOne(array('sender'=>'vijay','reciever'=>'priya','message'=>'yes!','date'=> date("Y/m/d"),"time"=>date("h:i:sa")));
    ?>
<!doctype html>
<html>
<head>

    <title>Profile</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="tab.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">



    <style>
        nav{
            height:50px;
        }
        .A{
            color:#518CFF;
        }
        h2{
            color: #005cbf;
            left: 200px;
            top: -90px;
            position: relative;
        }
        .container-fluid{
            background-color: rgba(81, 140, 255, 0.49);
            margin-top:-33px;
        }
        .col{
            cursor:pointer;
        }
        .form-control{
            border-color: white;
            border-style: none;
        }
        .fa{
            cursor: pointer;
        }
        .c img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }
        #topimg{
            opacity: 0.9;
            max-height: 250px;
            max-width: 100%;
            float: left;
        }
        form{background-color: white; padding-left: 50px; padding-bottom: 10px; padding-top:10px;}
        #profile-img{
            width: 200px; height:200px; margin-top: -50px;
        }
        #name{padding-left: 210px; margin-top:-135px;}
        #mail{padding-left: 210px; margin-top:-15px;}
        #location{padding-left: 210px; margin-top:0px;}
        .profile-btn{float:right; margin-top: 5px;margin-right: 5px;}
        #selector{position: sticky; z-index: 1;}
        .jumbotron-fluid{height: 230px;}
        .lead{margin-right: 0px; margin-top:10px;}
        .header-text{color:white;}
        #exampleFormControlTextarea1{background-color: rgba(86, 163, 255, 0.09);margin-top: 10px; margin-left: 15px; width:98%;}
        .posts{display:none;}
        .form{
            display:none;
        }
        #post{text-align: center; background-color: #f1f1f1;  color:black;  }
        #blog{text-align: center; color: white; background-color: #56a3ff;box-shadow: 0px 1px white ; }
        @media (max-width: 479px) {
             #profile-img{
                height: 150px;
                 width: 150px;
                 margin-top: -10px;
            }
            form{ padding-left: 02px; padding-bottom: 0px; padding-top:02px;}
            #name{padding-left: 160px; margin-top:-105px;}
            #mail{padding-left: 160px; margin-top:-15px;}
            #location{padding-left: 160px; margin-top:0px;}
            .profile-btn{
                margin-top: -20px;
            }
            #selector{marigin-top:-20px;}
            .jumbotron-fluid{height: 190px;}
            .text{font-size:15px;}
            .header-text{font-size:30px;}
        }
    </style>
</head>
<body >
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="project.php" style="margin-left: 10px;">
        <i class="fa fa-paint-brush" style="color: #56a3ff;" aria-hidden="true"></i>
        <span class="text">exhibit <span class="A"><b>A</b></span></span>
    </a><h5 class="A text">MUSIC</h5>
    <p class="A lead text">Profile</p>
</nav>
<div class="card"  >
    <img src="http://www.escolavirtualdemusica.com.br/wp-content/uploads/2016/01/Desvendando-John-Petrucci-Padr%C3%B5es-e-Licks-1-1080x200.jpg" id="topimg" class="img-fluid" alt="Responsive image" >
</div>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <a href="uploads.php" ><button type="button" class="btn btn-outline-primary btn-sm profile-btn" id="upload" data-container="body" data-toggle="popover" data-placement="top" data-content="click to upload videos and images"><i class="fa fa-upload" aria-hidden="true"></i></button></a>
        <a href="message.php"> <button type="button"  class="btn btn-primary btn-sm profile-btn"  ><i class="fa fa-envelope" style="font-size:100%;" aria-hidden="true"></i></button></a>

        <button type="button" class="btn btn-outline-primary btn-sm profile-btn" data-toggle="modal" data-target="#ModalCenter" >Edit profile <i class="fa fa-pencil-square" aria-hidden="true"></i></button>
        <img src="data:jpeg;base64,<?=base64_encode($contents)?>" alt="profile picture" id="profile-img" class="img-thumbnail img-responsive rounded-circle">
        <p class="lead" id="name" ><strong> <?php echo $user;?></strong></p>
        <footer class="lead blockquote-footer" id="mail" style=""><strong><?php echo $email;?></strong></footer>
        <p id="location"style=""><i class="fa fa-home " style="color: black;" aria-hidden="true"><small style="color:#56a3ff;"><strong>&nbsp;Hyderabad</strong></small></i></p>
    </div>
</div>
<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header " style="background-color: #56a3ff; height: 50px; width: 100%; ">
                <h5 class="modal-title" style="color: white;" id="exampleModalLongTitle">Update Profile</h5>
            </div>
<center><form  method="post" action="mongodb.php">
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label text">Username</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" pattern="[a-z,A-Z,0-9, ]{3,}" id="inputPassword3" name="uusername" placeholder="username">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label text">Email</label>
        <div class="col-sm-8">
            <input type="email" class="form-control form-control-sm" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="inputEmail3" name="uemail" placeholder="Email">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label text">Password</label>
        <div class="col-sm-8">
            <input type="password" class="form-control form-control-sm" name="upassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" id="inputPassword3" placeholder="Password">
        </div>
    </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label text">Phone</label>
            <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" name="uphone" min="7000000000" max="9999999999" pattern="[0-9]{10}" id="inputPassword3" placeholder="Phone number">
            </div>
        </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label text">Gender</label>
        <div class="col-sm-8">
            <select id="validationCustom03" class="form-control form-control-sm" name="ugender" required>
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="3">Others</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label text">Birthdate</label>
        <div class="col-sm-8">
            <input type="date" class="form-control form-control-sm" id="validationCustom04" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" name="ubdate" placeholder="dd/mm/yyyy" required>
        </div>
    </div>
    <center><div class="form-group row" >
            <div class="col-sm-10" >
                <button type="submit" class="btn btn-primary btn-sm text" name="update">Update profile</button><?if(isset($_COOKIE['msg'])) echo $_COOKIE['msg']; ?>
            </div>
        </div></center>
    </form></center>
        </div>
    </div>
</div>

<div class="container-fluid" id="selector" >
    <div class="row" >
        <div class="col" id="post" >
            posts
        </div>
        <div class="col" id="blog" >
            Blog
        </div>
    </div>
</div>


<div class="jumbotron jumbotron-fluid no"  style="background-color: #56a3ff;">
    <div class="container" id="post-text"><i class="fa fa-edit" style="float: right;"></i>
        <h1 class="display-4 header-text">your views here..</h1>
        <p class="text">you can write your thoughts and ideas here so others can see them.</p>
    </div>
</div>
<div class="jumbotron jumbotron-fluid posts"  style="background-color: #56a3ff;">
    <div class="container" id="post-text">
        <h1 class="display-4 header-text">No posts uploaded yet!</h1>
    </div>
</div>
<form class="form">
    <div class="form-group">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <button class="btn btn-primary" id="update">update</button>
    </div>

</form>
<div class="modal fade bd-example-modal-lg w3-hover-green" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">

        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {

        $('.navbar-brand').on({
            mouseenter: function () {
                $('.fa-paint-brush').css('font-size','140%');
            },
            mouseleave: function () {
                $('.fa-paint-brush').css('font-size','100%');
            }
        });
        $('#post').click(function () {
            $(this).css({'background-color':'#56a3ff','color':'white','box-shadow':'0px 1px white'});
            $('#blog').css({'background-color':'#f1f1f1','color':'black','box-shadow':'none'});
            $('.posts').css('display','block');
            $('.no').css('display','none');
        });
        $('#blog').click(function () {
            $(this).css({'background-color':'#56a3ff','color':'white','box-shadow':'0px 1px white'});
            $('#post').css({'background-color':'#f1f1f1','color':'black','box-shadow':'none'});
            $('.no').css('display','block');
            $('.posts').css('display','none');
        });

        $('#upload').on({
            mouseenter : function () {
                $(this).popover('show');
            },
            mouseleave : function () {
                $(this).popover('hide');
            }
        });
        $('#profile-img').on({
            mouseenter: function(){
                $(this).removeClass('rounded-circle');
                $(this).css({'border-top-right-radius':'20px','border-bottom-left-radius':'20px'});
            },
            mouseleave : function () {
                $(this).addClass('rounded-circle');
            }
        });
        $('.fa-envelope').click(function () {
            $('.card').css('display','none');
        });
        $('#update').click(function () {
            $('#post-text').children().css('display','none');

            $('.form').css('display','none');
            $('.no').css('display','block');
        });
    });
    $('.fa-edit').click(function () {
        $('.no').css('display','none');
        $('.form').css('display','block');
        $('#exampleFormControlTextarea1').val($('#post-text').html());
    });

</script>
</body>
</html>