<?php
/**
 * Created by PhpStorm.
 * User: ZiaulHaque
 * Date: 11-10-2015
 * Time: 18:25
 */
include("dbconnect.php");
$fname=$_REQUEST['name'];
$lname=$_REQUEST['city'];
$email=$_REQUEST['email'];
$meg=$_REQUEST['message'];
/*
 * Inserting data to table
 * */

$query=mysqli_query($db_connect,"INSERT INTO user (name, city, email,message) VALUES ('$fname','$lname','$email','$meg')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:userinfo.php?note=success");
