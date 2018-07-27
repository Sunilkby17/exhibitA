<!doctype html>
<html>
<head>

    <title>upload</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<style>
    nav{
        height:80px;
    }
    .A{
        color:#518CFF;
    }
    .container-fluid{
        margin-top: 20px;
    }
    input{
        background-color: #56a3ff;
        color: white;
    }
    .fa-cloud-upload{
        position: relative;
        left: 303px;
        bottom: 30px;
        font-size: 35px;
    }

</style>
</head>
<body >
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="project.php" style="margin-left: 10px;">
        <i class="fa fa-paint-brush" style="color: #56a3ff;" aria-hidden="true"></i>
        <span >exhibit <span class="A"><b>A</b></span></span>
    </a><h5 class="A">MUSIC</h5>
    <p class="A lead" id="profile" style="margin-right: 0px; margin-top:10px;"><a href="profile.php" style="text-decoration: none;" >Profile</a></p>
</nav>
<div class="container-fluid" >
    <div class="card">
        <div class="card-header">
            <button type="button" id="vidupload" class="btn btn-outline-info">video Upload <i class="fa fa-file-video-o" aria-hidden="true"></i></button>
        </div>
        <div class="card-body">
            <form style="display: none;" id="vidinput" method="post" action="mongodb.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlFile1" class="A">video file input</label>
                    <input type="file" class="form-control-file" accept="video/*" name="media" id="video_input">
                    <input type="submit" name="submit_media"><i class="fa fa-cloud-upload"  id="video_upload" aria-hidden="true"></i>
                </div>
            </form>
        </div>
    </div>

    <div class="card" style="margin-top: 10px;">
        <div class="card-header">
            <button type="button" id="imgupload" class="btn btn-outline-info">Image Upload <i class="fa fa-picture-o" aria-hidden="true"></i></button>

        </div>
        <div class="card-body">
            <form style="display: none;" id="imginput">
                <div class="form-group">
                    <label for="exampleFormControlFile1" class="A">Image file input</i></label>
                    <input type="file" class="form-control-file " accept="image/*" id="image_upload"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                </div>

            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/redirect.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script>
    $(document).ready(function () {
        var i=0;
        $('#vidupload').click(function () {
            $('#vidinput').css('display', 'block');

            var txt1 = "<div class=\"progress\">\n" +
                "  <div class=\"progress-bar w-75\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>\n" +
                "</div>";
            if(i<=5)
            {
                $("#vidinput").append(txt1);
                i=i+1;
            }
            else if(i==6){
                var txt1 = "<p style=\"color: red; float: right;\"><small>only max of 5 allowed.</small></p>";
                    $("#vidupload").after(txt1);
                    i++;
            }
            });
        $('#imgupload').click(function () {
            $('#imginput').css('display', 'block');
        });
        $('.navbar-brand').on({
            mouseenter: function () {
                $('.fa-paint-brush').css('font-size','140%');
            },
            mouseleave: function () {
                $('.fa-paint-brush').css('font-size','100%');
            }
        });
        $('#profile').on( {
            mouseenter : function(){
                $(this).css('font-weight','bold');
                },
                    mouseleave : function(){
            $(this).css('font-weight','initial');
        }
        });
    });
</script>
</body>
</html>