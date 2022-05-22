<?php ob_start(); session_start(); session_destroy(); include('db/config.php');
header('location:'.$referer); die();  ?>