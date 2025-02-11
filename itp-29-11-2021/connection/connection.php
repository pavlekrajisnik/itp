<?php
$host = "localhost";
$user = "itp";
$password = "itp";
$db = "protesti";
$conn = mysqli_connect($host, $user, $password, $db);

if($conn -> connect_error){
    die("Connection failed:" );
}
?>