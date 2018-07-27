<!doctype html>
<html>
<head>

    <title>message</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="tab.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript">
        try{function ajaxchat() {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.responseText)
                        document.getElementById("fill").innerHTML = this.responseText;
                        else throw "sorry! unable to fetch data";
                    }
                };
                xmlhttp.open("GET", "chat.php", true);
                xmlhttp.send();
                setInterval(ajaxchat(),1000);
            }}
            catch (err){
                document.getElementById("fill").innerHTML = err.message;
            }
    </script>
    <style>
        nav{
            height:60px;
        }
        .A{
            color:#518CFF;
        }
        .container-fluid{
            margin-top: 20px;
        }
        .time-right {
            float: right;
            color: #aaa;
        }

        .time-left {
            float: left;
            color: #999;
        }
    </style>
</head>
<body onload="ajaxchat();">
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="project.php" style="margin-left: 10px;">
        <i class="fa fa-paint-brush" style="color: #56a3ff;" aria-hidden="true"></i>
        <span >exhibit <span class="A"><b>A</b></span></span>
    </a><h6 class="A">Messages</h6>
    <p class="A lead" id="profile" style="margin-right: 0px; margin-top:10px;"><a href="profile.php" style="text-decoration: none;" >Profile</a></p>
</nav>
<div class="container-fluid" >
<div class="card" id="fill">


</div>
</div>
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