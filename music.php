<!DOCTYPE html>
<html>
<head  lang="en">
    <title>Music</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <style>
        .A{
            color:#518CFF;
        }
        .Ab{
            background-color: #56a3ff;
        }
        .navbar-links__item{

            padding-left:25px;
            color:black;
        }
        .navbar-links__item:hover{
            color: #56a3ff;
            text-decoration:none;
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
        .fa-picture-o{
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
            width: 100%;
            height: 276px;
        }
        @media (max-width: 750px;) {
           .w3-col{ width: 50%;}
        }
        @media(max-width:479px){
        .w3-col{float:none;
            min-width:300px;height:200px;margin-left: 4px;
        }
            .w2-col{
                height: 130px;
                width:300px;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-light" style=" position: fixed; z-index: 1; top:0px; width: 100%;  box-shadow:3px 3px 3px grey;">
    <a class="navbar-brand" href="project.php">
        <img src="..." width="30" height="30" class="d-inline-block align-top rounded-circle" alt="" >
        exhibit <span class="A"><b>A</b></span>
    </a>
    <div class="navbar-links" style="background-color: #f8f9fa!important">
        <a href="#" class="navbar-links__item">Visual</a>
        <a href="#" class="navbar-links__item" style="color: #56a3ff; font-size:120%; ">Music</a>
        <a href="#dance" class="navbar-links__item">Dance</a>
        <a href="#" class="navbar-links__item">Photograpghy</a>
        <a href="#" class="navbar-links__item navbar-links__item--active">Conceptual</a>
    </div>
    <i class="fa fa-picture-o" aria-hidden="true"></i>
    <i class="fa fa-play-circle" aria-hidden="true"></i>
    <p>
        <a class="btn btn-primary"  data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Log in
        </a>

    </p>
</nav>

<div style="margin-top: 70px;"></div>
<div class="w3-col " >
    <div class="w2-col ">
    <img class="card-img-top" src="youtube_img.png" style="display:none;" alt="Card image cap">
        <video  class="embed-responsive-item " id="one" >
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
<div class="w3-col " >
    <div class="w2-col">
    <img class="card-img-top" src="helena.jpg" style="display:none;" alt="Card image cap">
    <video  class="embed-responsive-item " id="scnd"  >
        <source src="BangaruBomma.mp4" type="video/mp4">
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
        <source src="Darling.mp4" type="video/mp4">
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
        $('.fa-picture-o').click(function () {
            $(this).addClass('active');
            $('.fa-play-circle').removeClass('active');
            $("video").hide();
            $('.card-img-top').show();
            $('.w3-col').find('div.w2-col').removeClass('w2-col');
        });
        $('.fa-play-circle').addClass('active');
        $('.fa-play-circle').click(function () {
            $(this).addClass('active');
            $('.fa-picture-o').removeClass('active');
            $("video").show();
            $('.card-img-top').hide();
            $('.w3-col').find('div.w2-col').addClass('w2-col');
        });
    });

</script>
</body>
</html>

<?php header('Content-type: image/jpeg'); header("Content-Length: " . strlen($contents)); ob_clean(); echo $contents;?>


