<?php
    require "main.php";
     echo "p";
  
         echo "pp";
        $data = array(message => $_POST['status']);
        echo $data;
        $res = $fb->post('/me/feed', $data, $_SESSION['fb_access_token']);
        echo $res;
        echo "chal ";
    
?>