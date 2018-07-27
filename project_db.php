<?php
include ('connection.php');
session_start();
$gridfs=$db->selectGridFSBucket();

$file = 'shruthi_haasan.mp4';
$stream = $gridfs->openDownloadStreamByName($file,['revision' => 0]);
$video = stream_get_contents($stream);
echo '<div content="Content-Type: video/mp4">
                  <video width="700" height="450" controls="controls" poster="video_img.png" preload="metadata">
                  <source src="data:video/mp4;base64,'.base64_encode($video).'"/>;
              </video>
          </div>';
//$_SESSION['video']=$video;
//header('Content-type: video/mp4');
//header('Content-type: video/mpeg');
//header('Content-disposition: inline');
//header("Content-Transfer-Encoding:­ binary");
//header("Content-Length: ".filesize($video));
//ob_clean();
//echo $video;
//exit();
//echo $_SESSION['video'];
?>

<?php /* $msgs=$collection->find(array('reciever'=>'priya'));
foreach ($msgs as $msg){
    $name = $msg->sender;
    $user = $db->user_a;
    $gridfs=$db->selectGridFSBucket();
    $us = $user->findOne(array('username'=>$name));
    $id = $us->_id;
    $img = $id.'DP';
    $stream = $gridfs->openDownloadStreamByName($img,['revision' => 0]);
    $contents = stream_get_contents($stream);
    echo "<div class=container c\">
                <img src=\"data:jpeg;base64,<?=base64_encode($contents)?>\" alt=\"Avatar\" >
            <p>$msg->message</p>
            <span class=\"time-right\">$msg->date</span>
        </div>";
}*/ ?>
