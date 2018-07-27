<?php
    try {
        include('connection.php');
        $collection = $db->message;
        if ($msgs = $collection->find(array('reciever' => 'priya')))
            foreach ($msgs as $msg) {
                $name = $msg->sender; ?>
                <div class="card-header">
                    <h6 class="A"><?php echo $name; ?></h6>
                    <p><?php echo $msg->message; ?></p>
                    <span class="time-right"><?php echo $msg->date; ?></span>
                </div>
            <?php }
    }catch (Exception $e){
        echo "<h6 style=\"color:red;\">unable to fetch data ,sorry!</h6>";
}
?>