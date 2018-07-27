
<!doctype html>
    <html>
<head lang="en">
    <title>Sign up</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <style>
        #A{
            color:#518CFF;
        }
        .navbar{
            height:90px;
        }
        .container{
            top:50px;
            position:relative;
        }
        .grounders{
            height:165px;
            top:100px;
            position:relative;
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="project.php">
        <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        exhibit <span id="A"><b>A</b></span>
    </a>
</nav>

<form class="container" id="needs-validation" novalidate name="form" onsubmit="return validateForm()" method="POST" action="/data/submit">
    <div class="row">
        <div class="col-sm-10 mb-3">
            <label for="validationCustom01" >User name</label>
            <input type="text" class="form-control" name="username" pattern="[a-z,A-Z,0-9, ]{3,}" id="validationCustom01" placeholder="User name"  required>
            <div class="invalid-feedback">
                Please provide a username without special symbols.
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-10">
            <label for="inputEmail4" >Email</label>
            <input type="email" class="form-control" id="inputEmail4" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" placeholder="Email" required>
            <div class="invalid-feedback">
                Please enter email
            </div>
        </div>
        <div class="form-group col-sm-10">
            <label for="inputPassword4">Password</label>&nbsp;<i class="fa fa-eye-slash" id="close" onclick="see()" style="color:#3c93ff;" aria-hidden="true"></i>
            <input type="password" class="form-control" id="inputPassword4" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" name="password" placeholder="Password" required>
            <small id="passwordHelpBlock" class="form-text text-muted">
                Your password must be 8-20 characters long, contain capital-small letters and numbers, and must not contain spaces, special characters, or emoji.
            </small>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="validationCustom03">Phone</label>
            <input type="text" class="form-control" id="validationCustom031" min="7000000000" max="9999999999" pattern="[0-9]{10}" name="phone" placeholder="Phone number" required>
            <div class="invalid-feedback">
                Please provide a phone number.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationCustom05">Gender</label>
            <select id="validationCustom03" class="form-control" name="gender" required>
                <option value="">Iam...</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="3">Others</option>
            </select>
            <div class="invalid-feedback">
                Please select one
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationCustom04">Birthday</label>
            <input type="date" class="form-control" id="validationCustom04" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" name="bdate" placeholder="dd/mm/yyyy" required>
            <div class="invalid-feedback">
                Please provide a valid date.
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-sm" name="submit" onclick="change()" type="submit">Submit form</button>
</form>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            var form = document.getElementById('needs-validation');
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        }, false);
    })();
</script>

<div class="grounders" style="background-color: #42af74">
    <center><h2 style="color: #f8f9fa; padding-top: 70px;" id="ground" class="chng">Signup and join the community of Arts</h2></center>
</div>
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            your account created!
        </div>
    </div>
</div>

<script>
    $('document').ready(function () {

    });
    function change() {
        document.getElementById('ground').innerHTML='Have a good time';
    }
   function see(){

        $var = document.getElementById('close');
       if($var.className =='fa fa-eye-slash')
           document.getElementById('close').className='fa fa-eye';
       else
           document.getElementById('close').className='fa fa-eye-slash';
       $check = document.getElementById('inputPassword4');
        if($check.type=='password')
            $check.type='text';
        else
            $check.type='password';
    }
</script>
</body>
</html>