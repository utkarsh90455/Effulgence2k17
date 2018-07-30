<?php
    require "main.php";

    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        $data = array(
            message => $_POST['message'],
            source => $fb->fileToUpload($_POST['photo'])    
        );
        $res = $fb->post('/me/photos', $data, $_SESSION['token']);
    }
?>