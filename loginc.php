<?php
include "login.php";
$username = $_POST['username'];
$password = $_POST['password'];
$user = new user;
$user->logincheck($username,$password);