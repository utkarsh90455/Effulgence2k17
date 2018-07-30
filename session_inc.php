<?php
session_start();
if (!isset($_SESSION) || !isset($_SESSION['u_id']))
 {
header("Location:log.php"); /* Redirect browser */
exit();
}
?>