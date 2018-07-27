<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 09-12-2017
 * Time: 15:45
 */
/*session_start();
//include('signup_project.php');
//connection to db
$link = mysqli_connect('localhost', 'root', '', 'project');
//if($link)
//   echo "connected";
$username=$email=$password=$phone=$gender=$bday=$username_err=$password_err=$email_err=$phone_err="";
$user_login=$password_login="";
if(isset($_POST['submit']))
{
    if (isset($_POST['username'])) {
        $username = $_POST["username"];
        if (!preg_match("/^[a-zA-Z ]*$/", $username)) {
            $usernameErr = "<br/>Only letters and white space allowed";
        }
    }
    if(isset($_POST['email']))
    {
        $email=$_POST['email'];
    }
    if(isset($_POST['password'])){
        $password=$_POST['password'];
        if(strlen($password)<8)
            $password_err="password must be min of 8 char's";
      /*  if(preg_match('(?=.*[@#\-_$%^&+=�!\?])',$password))
            $password_err="password shouldn't contain special char's";
        if(preg_match('(?=.*[A-Za-z])(?=.*\d)',$password))
            $password=$_POST['password'];*/
   /* }
    if(isset($_POST['phone'])) {
        $phone = $_POST["phone"];

    }
   if(isset($_POST['gender']))
   {
       $gender=$_POST['gender'];
       if($gender==1)
           $gender='male';
       elseif($gender==2)
           $gender='female';
       elseif($gender==3)
           $gender='others';
   }
    if(isset($_POST['bdate']))
        $bday=$_POST['bdate'];
    $in="INSERT INTO user_a (username , email, password, phone, gender, birthday) VALUES ('$username', '$email', '$password', $phone, '$gender', '$bday')";
    mysqli_query($link,$in);
}




if(isset($_POST['submit_login']))
{
    if(isset($_POST['user_login']))
        $user_login=$_POST['user_login'];
    if(isset($_POST['password_login']))
        $password_login=$_POST['password_login'];
    $query ='SELECT password FROM user_a WHERE email="'.$user_login.'"';

    if($result=mysqli_query($link,$query))
    {
        $key=mysqli_fetch_array($result);
        if($key['password']==$password_login)
            header('location:explore.php');
        else
            echo '<script type="text/javascript"> alert("enter valid info")</script>';
    }

}

if(isset($_POST['visual']))
   echo 'ok';*/
$list1 = [123 , 'lee'];
print($list1*2);


/*$del='DELETE FROM user_a WHERE username="kamalesh"';
mysqli_query($link,$del);*/
?>