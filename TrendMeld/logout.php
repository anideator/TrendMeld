<?php
require_once './tm_home.php';
session_start();
session_destroy();
$time = date("h:i:s d-m-Y");
$flag = new update($id, $alias, $time);
if ($flag) echo "<script>alert('Logged out')</script>";
