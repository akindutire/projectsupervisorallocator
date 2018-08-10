<?php
session_start();
include 'co.php';
session_destroy();
header('location:index.php');
?>