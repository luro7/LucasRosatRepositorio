<?php

@session_start();
var_dump($_POST['id']);
$_SESSION['user_id']=$_POST['id'];


?>