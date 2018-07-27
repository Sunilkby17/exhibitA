<?php
    include_once('connection.php');
    session_start();
    $collection = $db->user_a;
    $gridfs=$db->selectGridFSBucket();
    $id = str_replace(" ","",$_POST['id']?$_POST['id']:$_SESSION['id']);
    $key = $collection->findOne(["_id" => new MongoDB\BSON\ObjectID($id)]);
    $user = $key['username'];
    $file=$key['_id'].'DP';
    $contents='';
    $stream='';

    $_SESSION['id'] = $id;
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

    $file = 'shruthi_haasan.mp4';
    $stream = $gridfs->openDownloadStreamByName($file,['revision' => 0]);
    $video1 = stream_get_contents($stream);

    $file = 'Pulp Fiction - Dance Scene (HQ).mp4';
    $stream = $gridfs->openDownloadStreamByName($file,['revision' => 0]);
    $video2 = stream_get_contents($stream);

    $file = 'video.mp4';
    $stream = $gridfs->openDownloadStreamByName($file,['revision' => 0]);
    $video3 = stream_get_contents($stream);
    //$video = $_SESSION['video'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head  lang="en">
    <title><?php echo $user?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">   
    <style>
        #A{
            color:#518CFF;
        }
        .navbar{
            height:60px;
            width: 100%;

        }
        h2{
            color: #005cbf;
            left: 200px;
            top: -90px;
            position: relative;
        }
        span{
            color: #0056b3;
        }
        video {
            width: 100%;
            height: 100%;
        }
        .fa{
            cursor:pointer;
        }
        .fa-thumbs-o-up{
            color:black;
        }
        .fa-thumbs-up{
            color:#56a3ff;
        }
        .w3-col{
            float: left;
            background-color: #fafafa;
            margin-left: 14px;
            width: 32%;
            margin-top: 10px;
            min-width: 20%;
            box-shadow:3px 3px 3px #56a3ff;
        }
        .fa-file-image-o{
            position:relative;
            right:-170px;
        }
        .active{
            font-size:200%;
            color:#56a3ff;
        }
        .w2-col{
            width: 100%;
            height:275px;
            background-color: black;
            display: flex;
            align-items: center;
        }
        .card-img-top{
            height: 300px;
        }
        #username{
            margin-top: 10px;
            margin-right: -400px;

        }
    </style>

</head>
<body>
<nav class="navbar navbar-light bg-light" style=" position: fixed; z-index: 1; top:0px; width: 100%;  box-shadow:3px 3px 3px grey;">
    <a class="navbar-brand" href="project.php">
        
        exhibit <span id="A"><b>A</b></span>
    </a>
    <i class="fa fa-file-image-o" aria-hidden="true"></i>
    <i class="fa fa-play-circle" aria-hidden="true"></i>
    <p id="username"><b><?php echo $user; ?></b></p><a href="profile.php" ><img src="data:jpeg;base64,<?=base64_encode($contents)?>" style=" width: 40px;height:40px; right: 10px;" alt="Profile image" class="rounded-circle"></a>
</nav>

<div class="collapse" id="collapseExample" style="width: 500px; height: 100%; top:50px; right:1px; position:fixed;">
    <div class="card card-body">
        <img src="data:jpeg;base64,<?=base64_encode($contents)?>" style=" width: 150px;height:150px;" alt="Profile image" class="rounded-circle"><h2><?php echo $user; ?></h2>
        <form class="was-validated" method="post" enctype="multipart/form-data" action="mongodb.php" style="padding-top: 20px;">

            <label class="custom-file">
                <input type="file" id="file" name="media" class="custom-file-input" required>
                <span class="custom-file-control"></span>
            </label>
            <button type="submit" class="btn btn-primary" name="submit_media">Browse</button>
        </form>
    </div>
</div>

<div style="margin-top: 60px;"></div>
<div class="w3-col " >
    <div class="w2-col ">
        <img class="card-img-top" src="mathew.jpg" style="display:none;" alt="Card image cap">
        <video  class="embed-responsive-item " id="one" >
            <source src="data:video/mp4;base64,<?=base64_encode($video1)?>" type="video/mp4">
        </video>
    </div>
    <div class="row"> <div class="col">
            <p class="A"># Hordie.</p>
        </div>
        <div class="col-md-auto">
            <i class="fa fa-envelope" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" aria-hidden="true"></i>
        </div>
        <div class="col col-lg-2">
            <i class="fa fa-thumbs-o-up"  aria-hidden="true"></i>
        </div>
        <div class="col-9"><h5 class="card-title">Special title treatment</h5></div>
    </div>
</div>
<div class="w3-col " >
    <div class="w2-col">
        <img class="card-img-top" src="helena.jpg" style="display:none;" alt="Card image cap">
        <video  class="embed-responsive-item " id="scnd"  >
            <source src="data:video/mp4;base64,<?=base64_encode($video2)?>" type="video/mp4">
        </video>
    </div>
    <div class="row"> <div class="col">
            <p class="A"># Hordie.</p>
        </div>
        <div class="col-md-auto">
            <i class="fa fa-envelope" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" aria-hidden="true"></i>
        </div>
        <div class="col col-lg-2">
            <i class="fa fa-thumbs-o-up"  aria-hidden="true"></i>
        </div>
        <div class="col-9"><h5 class="card-title">Special title treatment</h5></div>
    </div>
</div>
<div class="w3-col " >
    <div class="w2-col">
        <img class="card-img-top" src="fight_club.jpg" style="display:none;" alt="Card image cap">
        <video  class="embed-responsive-item "  >
            <source src="data:video/mp4;base64,<?=base64_encode($video3)?>" type="video/mp4">
        </video>
    </div>
    <div class="row"> <div class="col">
            <p class="A"># Hordie.</p>
        </div>
        <div class="col-md-auto">
            <i class="fa fa-envelope" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" aria-hidden="true"></i>
        </div>
        <div class="col col-lg-2">
            <i class="fa fa-thumbs-o-up"  aria-hidden="true"></i>
        </div>
        <div class="col-9"><h5 class="card-title">Special title treatment</h5></div>
    </div>
</div>
<div class="w3-col " >
    <div class="w2-col">
        <img class="card-img-top" src="fight%20club.jpg" style="display:none;" alt="Card image cap">
        <video  class="embed-responsive-item " >
            <source src="Whiplash.mp4" type="video/mp4">
        </video>
    </div>
    <div class="row"> <div class="col">
            <p class="A"># Hordie.</p>
        </div>
        <div class="col-md-auto">
            <i class="fa fa-envelope" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" aria-hidden="true"></i>
        </div>
        <div class="col col-lg-2">
            <i class="fa fa-thumbs-o-up"  aria-hidden="true"></i>
        </div>
        <div class="col-9"><h5 class="card-title">Special title treatment</h5></div>
    </div>
</div>
<div class="w3-col " >
    <div class="w2-col">
        <img class="card-img-top" src="fight_club2.jpg" style="display:none;" alt="Card image cap">
        <video  class="embed-responsive-item "  >
            <source src="Manchester%20By%20The%20Sea%202016%20720p%20WEB-DL%201GB%20MkvCage.mkv" type="video/mp4">
        </video>
    </div>
    <div class="row"> <div class="col">
            <p class="A"># Hordie.</p>
        </div>
        <div class="col-md-auto">
            <i class="fa fa-envelope" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" aria-hidden="true"></i>
        </div>
        <div class="col col-lg-2">
            <i class="fa fa-thumbs-o-up"  aria-hidden="true"></i>
        </div>
        <div class="col-9"><h5 class="card-title ">Special title treatment</h5></div>
    </div>
</div>
<div class="w3-col " >
    <div class="w2-col">
        <img class="card-img-top" src="agnes-cecile-new-02.jpg" style="display:none;" alt="Card image cap">
        <video  class="embed-responsive-item "  >
            <source src="video.mp4" type="video/mp4">
        </video>
    </div>
    <div class="row"> <div class="col">
            <p class="A"># Hordie.</p>
        </div>
        <div class="col-md-auto">
            <i class="fa fa-envelope" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" aria-hidden="true"></i>
        </div>
        <div class="col col-lg-2">
            <i class="fa fa-thumbs-o-up"  aria-hidden="true"></i>
        </div>
        <div class="col-9"><h5 class="card-title">Special title treatment</h5></div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/redirect.js"></script>
<script >
    $(document).ready(function(){
        $(".fa-thumbs-o-up").click(function(){
            $(this).toggleClass('fa-thumbs-up');
        });
        $("video").on({
            mouseenter: function(){
                this.controls=true;
            },
            mouseleave: function(){
                this.controls=false;
            },
            dblclick: function(){
                $(this).siblings('i').toggleClass('fa-thumbs-up');
                if($(this).siblings('i').css('color') == 'rgb(33, 37, 41)')
                    $(this).siblings('i').css('color','black');
                else $(this).siblings('i').css('color','#518CFF');
            },
            click: function () {
                if(this.paused)
                    this.play();
                else
                    this.pause();
            }
        });
        $('.fa-envelope').on({
            mouseenter: function () {
                $(this).css('color','#518cff');
            },
            mouseleave: function () {
                $(this).css('color','black');
            }
        });
        $('.fa-file-image-o').click(function () {
            $(this).addClass('active');
            $('.fa-play-circle').removeClass('active');
            $("video").hide();
            $('.card-img-top').show();
            $('.w3-col').find('div.w2-col').removeClass('w2-col');
        });
        $('.fa-play-circle').addClass('active');
        $('.fa-play-circle').click(function () {
            $(this).addClass('active');
            $('.fa-file-image-o').removeClass('active');
            $("video").show();
            $('.card-img-top').hide();
        });
    });

</script>
</body>
</html>