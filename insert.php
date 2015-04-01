<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 
//tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$agama = $_POST['agama'];
$no_hp = $_POST['no_hp'];
 
//simpan data ke database
$query = mysql_query("insert into user values('', '$username', '$password', '$email', '$fullname', '$agama', '$no_hp')") or die(mysql_error());
 
if ($query) {
    header('location:index.php?message=success');
}