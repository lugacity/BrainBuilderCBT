<?php
session_start();
session_destroy();
header('location:loginstart.php');
exit($conn);

?>