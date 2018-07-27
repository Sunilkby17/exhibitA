<?php
include_once('connection.php');
$gridfs=$db->selectGridFSBucket();

$file = 'dance.jpg';
$stream = $gridfs->openDownloadStreamByName($file,['revision' => 0]);
$dance = stream_get_contents($stream);

$file = 'music.jpg';
$stream = $gridfs->openDownloadStreamByName($file,['revision' => 0]);
$music = stream_get_contents($stream);

$file = 'photography.jpg';
$stream = $gridfs->openDownloadStreamByName($file,['revision' => 0]);
$photography = stream_get_contents($stream);

$file = 'visual.jpg';
$stream = $gridfs->openDownloadStreamByName($file,['revision' => 0]);
$visual = stream_get_contents($stream);

$file = 'conceptual.jpg';
$stream = $gridfs->openDownloadStreamByName($file,['revision' => 0]);
$conceptual = stream_get_contents($stream);

$file = 'sculpture.jpg';
$stream = $gridfs->openDownloadStreamByName($file,['revision' => 0]);
$sculpture = stream_get_contents($stream);

$file = 'theatre.jpg';
$stream = $gridfs->openDownloadStreamByName($file,['revision' => 0]);
$theatre = stream_get_contents($stream);

$file = 'literary.jpg';
$stream = $gridfs->openDownloadStreamByName($file,['revision' => 0]);
$literary = stream_get_contents($stream);

$file = 'homeimg.jpg';
$stream = $gridfs->openDownloadStreamByName($file,['revision' => 0]);
$homeimg = stream_get_contents($stream);
?>
<!DOCTYPE html>
<html>
<head  lang="en">
    <title>Home of arts</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #A{
            color:#518CFF;
        }
/* width */
::-webkit-scrollbar {
    width: 7px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #518CFF;  
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #888;
}
        #signup{
            padding-left: 70px;
        }
        .navbar-links__item{
            display:inline;
            padding-left:25px;
            color:black;
        }
        .navbar-links__item:hover{
            color: #56a3ff;
            text-decoration:none;
        }
        #collapseExample{
            width: 100%;
        }
        .form-inline{
            padding-left: 300px;
        }
        .card{
            margin-left: 40px;
            margin-top: -60px;
            float: left;
            height: 430px;
        }
        .card-img-top{
            height: 230px;
        }
        @media (max-width: 479px){
            #title{
                font-size: 75%;
            }
        }
    </style>
</head>
<body >
<nav class="navbar navbar-light bg-light" style="position: fixed; z-index: 1; top:0px; width: 100%;  box-shadow:3px 3px 3px grey;">
    <a class="navbar-brand text" href="" id="title">
        <i class="fa fa-paint-brush" style="color: #56a3ff;" aria-hidden="true"></i>exhibit <span id="A"><b>A</b></span>
    </a>
    <div class="navbar-links" style="background-color: #f8f9fa!important">
        <a href="#" class="navbar-links__item text">Visual</a>
        <a href="#!music" class="navbar-links__item text">Music</a>
        <a href="#!dance" class="navbar-links__item text">Dance</a>
        <a href="#" class="navbar-links__item text">Photograpghy</a>
        <a href="#" class="navbar-links__item navbar-links__item--active text">Conceptual</a>
    </div>
    <p>
        <a class="btn btn-primary " data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Log in
        </a>

    </p>
</nav>

<div class="jumbotron jumbotron-fluid" style="margin-top: 70px; position: relative; background-color: white;"> 
    <img style="width: 100%; height:400px; margin-top:-64px; opacity: 0.7;" src="data:jpeg;base64,<?=base64_encode($homeimg)?>" class="img-fluid" alt="Responsive image"> 
    <div class="container" style="position: absolute; text-align: center; top:130px;">
        <h1 class="display-3">Multi Art Platform</h1>
        <p class="lead">Expose the art to explore.</p>
    </div>
</div> 
 
<div class="card" style="width: 20rem; margin-left: 60px;" >
    <img class="card-img-top" src="data:jpeg;base64,<?=base64_encode($visual)?>" alt="Visual image cap">
    <div class="card-body">
            <h4 class="card-title">Visual</h4>
            <p class="card-text">Many artistic disciplines involve aspects of the visual arts as well as arts of other types.</p>
            <a href="explore.php?title=Visual" class="btn btn-primary btn-sm">explore</a>
        </div>
</div> 
 
<div class="card"  style="width: 20rem;"> 
    <img class="card-img-top" src="data:jpeg;base64,<?=base64_encode($music)?>" alt="Music image cap">
    <div class="card-body" >
            <h4 class="card-title">Music</h4>
            <p class="card-text">Music is an art form whose medium is sound and silence, occurring in time. (?, ?) </p>
            <a href="explore.php?title=Music" class="btn btn-primary btn-sm">explore</a>
    </div>
</div> 
 
<div class="card" style="width: 20rem;"> 
    <img class="card-img-top" src="data:jpeg;base64,<?=base64_encode($dance)?>" alt="Dance image cap">
    <div class="card-body">
            <h4 class="card-title">Dance</h4>
            <p class="card-text">Human movement either used as a form of expression or presented in a social, spiritual or performance setting.</p>
            <a href="explore.php?title=Dance" class="btn btn-primary btn-sm">explore</a>
    </div>
</div> 
 
<div class="card" style="width: 20rem;"> 
    <img class="card-img-top" src="data:jpeg;base64,<?=base64_encode($photography)?>" alt="Photography image cap">
    <div class="card-body">
            <h4 class="card-title">Photography</h4>
            <p class="card-text">Photographs that are created in accordance with the creative vision of the photographer</p>
            <a href="explore.php?title=Photography" class="btn btn-primary btn-sm">explore</a>
    </div>
</div> 

 
<div class="card" style="width: 20rem; margin-top: 30px; margin-left: 60px;">
    <img class="card-img-top" src="data:jpeg;base64,<?=base64_encode($conceptual)?>" alt="Conceptual image cap">
    <div class="card-body">
            <h4 class="card-title">Conceptual</h4>
            <p class="card-text">The concept involved in the work take precedence over traditional aesthetic, technical, and material concerns</p>
            <a href="explore.php?title=Conceptual" class="btn btn-primary btn-sm">explore</a>
    </div>
</div> 
 
<div class="card" style="width: 20rem; margin-top: 30px; "> 
    <img class="card-img-top" src="data:jpeg;base64,<?=base64_encode($sculpture)?>" alt="Sculpture image cap">
     <div class="card-body">
            <h4 class="card-title">Sculpture</h4>
            <p class="card-text">Sculpture is the branch of the visual arts that operates in three dimensions. It is one of the plastic arts.</p>
            <a href="#" class="btn btn-primary btn-sm">explore</a>
     </div>
</div> 
 
<div class="card" style="width: 20rem; margin-top: 30px; "> 
    <img class="card-img-top" src="data:jpeg;base64,<?=base64_encode($literary)?>" alt="Literary image cap">
    <div class="card-body">
            <h4 class="card-title">Literary</h4>
            <p class="card-text">The combination of drawings or other visual arts with narrating literature, are often called the 'ninth art'.</p>
            <a href="#" class="btn btn-primary btn-sm">explore</a>
    </div>
</div>

<div class="card" style="width: 20rem; margin-top: 30px;">
    <img class="card-img-top" src="data:jpeg;base64,<?=base64_encode($theatre)?>" alt="Theatre image cap">
    <div class="card-body">
        <h4 class="card-title">Theatre</h4>
        <p class="card-text">Theatre is performing arts concerned with acting out stories in front of an audience .</p>
        <a href="explore.php?title=Theatre" class="btn btn-primary btn-sm">explore</a>
    </div>
</div>

<div class="collapse" id="collapseExample" style="position: fixed; z-index: 1;top: 70px; width: 100%;">
    <div class="card1 card-body" style="background-color: rgba(0,60,255,0.38)">
        <form class="form-inline" id="needs-validation" method="POST">

            <input type="email" class="form-control mb-2 mr-sm-2 mb-sm-0" id="user_login" name="user_login" placeholder="Enter email" required>

            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <span class="input-group-addon"><i class="fa fa-eye-slash" id="close" onclick="see()" style="color:#56a3ff; top: 5px;" aria-hidden="true"></i></span>
                <input type="password" class="form-control" id="password_login" name="password_login" placeholder="Password" required>
            </div>
            <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                <label class="form-check-label">
                    <input class="form-check-input" style="padding-left: 5px;" type="checkbox"> Remember me
                </label>
            </div>

            <button type="button" id="login" class="form-control btn-sm"  name="submit_login" style="border-color: white; background-color: #518CFF; color: white;">Submit  </button>
            <a href="signup_project.php" id="signup" style="text-decoration:none;"><span id="sign" style="color:white; left:200px; position: relative">Sign up<span id="signup_icon" style="color:rgba(0,60,255,0.38); "><b><-</b></span></span></a>
        </form>
    </div>
</div>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/redirect.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>

<script>
    document.getElementById('sign').onmouseover=function(){
        document.getElementById('signup_icon').style.color= 'white';
    }
    document.getElementById('sign').onmouseout=function(){
        document.getElementById('signup_icon').style.color= 'rgba(0,60,255,0.38)';
    }
    $(document).ready(function () {

        $('.fa-paint-brush').on({
            mouseenter: function () {
                $(this).css('font-size','140%');
            },
            mouseleave: function () {
                $(this).css('font-size','100%');
            }
        });
    });

    function see(){

        $var = document.getElementById('close');
        if($var.className =='fa fa-eye-slash')
            document.getElementById('close').className='fa fa-eye';
        else
            document.getElementById('close').className='fa fa-eye-slash';
        $check = document.getElementById('password_login');
        if($check.type=='password')
            $check.type='text';
        else
            $check.type='password';
    }
</script>
</body>
</html>




