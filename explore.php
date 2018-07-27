<!doctype html>
<html>
<head lang="en">
    <title>explore</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="tab.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <style>
        #A{
            color:#518CFF;
        }
        .navbar{
            height:60px;
        }
        .rounded-circle{
            float:left;
            width: 150px;
            height:150px;
            margin-left: 50px;
            position:relative;
        }
        .increase{
            width: 200px;
            height: 200px;
            top:-30px;
            position:relative;
        }
        .quote{top:65px; left:25px; position: relative;}
        .container-fluid{height: 140px;}
        @media (max-width: 479px) {
            .rounded-circle{
                float:left;
                width: 80px;
                height:80px;
                margin-left: 10px;
                left:20px;
                top:-20px;
                margin-top: 10px;
                position:relative;
            }
            .increase{
                width: 130px;
                height: 130px;
                top:0px;
                margin-left: 0px;
                position:relative;
            }
            .quote{top:24px;}
        }
    </style>
    <?php
    $img1='http://www.michelangelo.net/images/michelangelo.jpg';
    if($_GET['title']=='Music')
        $img1='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTedVd0JXuA3_Tj2OQyeVP1C62llUjQdHh7IAaD0sUNq44s6j5m3A';
   ?>
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="project.php">
        <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        exhibit <span id="A"><b><?php echo $_GET['title'];?></b></span>
    </a>
</nav>
<?php $img1?>
<div class="jumbotron jumbotron-fluid" style="background-color: rgba(87, 125, 255, 0.36)">
    <div class="container-fluid" >
        <img src="<?php echo $img1 ?>" alt="..." title="Michelangelo (6 March 1475 - 18 February 1564)"  class="rounded-circle img-thumbnail">
        <img src="https://www.biography.com/.image/t_share/MTE1ODA0OTcxNzU0MDk2MTQx/pablo-picasso-9440021-1-402.jpg" alt="" title="Pablo Picasso (October 25 - 1881 to April 8, 1973)" class="rounded-circle ">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIS0h4JKrLJaBXV6HCh8UACyrWodDh2FMGHdj-tvPBIlfoD30N" alt="Leonardo da vinci" title="Leonardo da vinci (15 April 1452 - 2 May 1519)" class="rounded-circle">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7yE9UpaRScNIM05GsgA-pX7Q-_CzbP5LCSaTZsz8o1GDfYjeG" alt="Leonardo da vinci" title="Vincent van Gogh (30 March 1853 - 29 July 1890)" class="rounded-circle">
        <img src="https://pbs.twimg.com/profile_images/847581988731052032/hEAUSTRe.jpg" alt="Leonardo da vinci" title="Rembrandt Van Rijn (15 July 1606 - 4 October 1669)" class="rounded-circle">
    </div>
</div>
<script>
    $(document).ready(function () {
        $('img').click(function () {
            var c1 = $(this).siblings().css('height');
            var c2 = $(this).css('height');
            if(c1 == c2) {
                $(this).addClass('img-thumbnail');
                $(this).siblings().removeClass('img-thumbnail');
                $(this).siblings().removeClass('increase');
                $(this).siblings().css('display', 'none');
                $(this).addClass('increase');
                $(this).after('<h5 class="quote"><i class="fa fa-quote-left" style="bottom:9px; position: relative;" aria-hidden="true"></i><i> One good thing about music, when it hits you, you feel no pain.</i></h5>');
            }
            else{
                $(this).removeClass('increase');
                $(this).siblings().css('display', 'block');
                $(this).siblings('h5').remove();
            }
        });
    });
</script>
</body>
</html>
