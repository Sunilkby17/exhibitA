<!doctype=html>
<html>
<head lang="en">
    <title>demo</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<style>
    video {
        max-width: 100%;
        height: auto;
    }
    .card{
        float:left;
        min-width: 30%;
    }
</style>
</head>
<body >
<div class="card" style=" width: 30.3rem;">
    <div class="card-header Ab" >
        <img class="card-img-top" src="youtube_img.png" style="display:none;width: 30rem;left:-19px;position:relative; top:-10px;" alt="Card image cap">
        <video  class="embed-responsive-item" id="one" style="position:relative; left:-19px; top:-10px;"   >
            <source src="BangaruBomma.mp4" type="video/mp4">
        </video>
        <p style="color: white;"># Hordie.</p>
        <i class="fa fa-thumbs-o-up" aria-hidden="true" style="left: 80px; top:-40px;  position: relative;"></i>
        <h5 class="card-title">Special title treatment</h5>
    </div>
</div>
<div class="card" style=" width: 30.3rem;">
    <div class="card-header Ab" >
        <video  class="embed-responsive-item" style="position:relative; left:-19px; top:-10px;" >
            <source src="Whiplash.mp4" type="video/mp4">
        </video>
        <p style="color: white;"># Hordie.</p>
        <i class="fa fa-thumbs-o-up" aria-hidden="true" style="left: 80px; top:-40px;  position: relative;"></i>
        <h5 class="card-title">Special title treatment</h5>
    </div>
</div>
<div class="card" style=" width: 30.3rem;">
    <div class="card-header " style="background-color:#56a3ff; ">
        <video  class="embed-responsive-item" style="position:relative; left:-19px; top:-10px;">
            <source src="Darling.mp4" type="video/mp4">
        </video>
        <p style="color: white;"># Hordie.</p>
        <i class="fa fa-thumbs-o-up" aria-hidden="true" style="left: 80px; top:-40px;  position: relative;"></i>
        <h5 class="card-title">Special title treatment</h5>
    </div>
</div>
<div class="card" style="  width: 30.3rem;">
    <div class="card-header " style=" background-color:#56a3ff; ">
        <video  class="embed-responsive-item" style="position:relative; left:-19px; top:-10px;" >
            <source src="BangaruBomma.mp4" type="video/mp4">
        </video>
        <p style="color: white;"># Hordie.</p>
        <i class="fa fa-thumbs-o-up" aria-hidden="true" style="left: 80px; top:-40px;  position: relative;"></i>
        <h5 class="card-title">Special title treatment</h5>
    </div>
</div>
<div class="card" style="   width: 30.3rem;">
    <div class="card-header " style=" background-color:#56a3ff; ">
        <video  class="embed-responsive-item" style="width:30rem; position:relative; left:-19px; top:-10px;">
            <source src="video.mp4" type="video/mp4">
        </video>

    </div>
    <div class="card-body" style="">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<form><input id="image" type="file" alt="Login" ></form>
<form class="was-validated" method="post" enctype="multipart/form-data" style="padding-top: 20px;">

    <label class="custom-file">
        <input type="file" id="file" name="media" class="custom-file-input"  required>
        <span class="custom-file-control"></span>
    </label>
    <button type="submit" class="btn btn-primary" name="submit_media">Browse</button>
</form>
<script >
    $(document).ready(function(){
        $(".fa-thumbs-o-up").click(function(){
            $(this).toggleClass('fa-thumbs-up');
            $(this).css('color','white');
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
                //alert($(this).siblings('i').css('color'));
                if($(this).siblings('i').css('color') == 'rgb(33, 37, 41)')
                    $(this).siblings('i').css('color','black');
                else $(this).siblings('i').css('color','white');
            },
            click: function () {
                if(this.paused)
                    this.play();
                else
                    this.pause();
            }
        });
        $(".btn").click(function(){
            $("#one").hide();
            $('.card-img-top').show();
        });
    });

</script>
</body>
</html>