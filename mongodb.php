<?php
include_once('connection.php');
session_start();
$collection = $db->user_a;
$gridfs=$db->selectGridFSBucket();
if ($gridfs)
//echo '<br/>connected';

if (isset($_POST['signup']))
{
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  if (isset($_POST['gender']))
  {
    $gender = $_POST['gender'];
    if ($gender==1)
    $gender = 'male';
    elseif ($gender==2)
    $gender = 'female';
    elseif ($gender==3)
    $gender = 'others';
  }

  $bdate = $_POST['bdate'];

  $document = array("username" => $username, "email" => $email, "password" => $password, "phone" => $phone, "gender" => $gender, "birthday" => $bdate);
  if($collection->insertOne($document))
    echo 1;
  else echo 0;
}

if (isset($_POST['submit_login']))
{

   if (isset($_POST['user_login']))
      $user_login = $_POST['user_login'];
   if (isset($_POST['password_login']))
      $password_login = $_POST['password_login'];

 //  $image=$dbase->findOne(array('_id'=>'5a36b8d84249d00cec51721a'),array('filename'));
  // echo '<br/>found';
   $key = $collection->findOne(array('email' => $user_login), array('password'));
   if ($key['password'] == $password_login)
   {
      $_SESSION['id'] = $key['_id'];
      echo $key['_id'];
   }
   else echo 0;
}

if (isset($_POST['submit_media']))
{
    if($_FILES['media'])
    {
        $file = $_FILES['media'];
        //header('Content-type: image/jpeg');
       // header("Content-Length: " . strlen($contents));
       // ob_clean();
       // echo $contents;
        try{
          $target_file = $_FILES["media"]["name"];
          echo $target_file;
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          if($imageFileType == "mp4")
            $filename = $_FILES['media']['name'];
          else $filename = $_SESSION['id'].'DP';
          echo '<script>'.$filename.'</script>';
          //$_SESSION['file']=$filename;

          $stream = $gridfs->openUploadStream($filename);
          $handle = $_FILES["media"]["tmp_name"];
          echo $handle.'\n';
          $contents = file_get_contents($handle);
          fwrite($stream, $contents);
          fclose($stream);
          echo "uploaded";
      }catch(Exception $e){
        echo 'upload failed try again';
      }
    }
}

if(isset($_POST['update'])) {
    $ugender = $_POST['ugender'];
    if ($ugender == 1)
        $ugender = 'male';
    elseif ($ugender == 2)
        $ugender = 'female';
    elseif ($ugender == 3)
        $ugender = 'others';
    $query = ['email' => $_POST['uemail']];
    $data = array('username' => $_POST['uusername'], 'email' => $_POST['uemail'], 'password' => $_POST['upassword'], 'phone' => $_POST['uphone'], 'gender' => $ugender, 'birthday' => $_POST['ubdate']);
    $options = ['upset' => 'false'];
    $result = $collection->updateOne(
        $query,
        ['$set' => $data], $options
    );
    if($result)
        $msg = 'update Success';
    $url = 'profile.php';
    header('location:'.$url);
}
?>
