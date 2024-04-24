<?php
session_start();

require_once 'connect.php';

if (isset($_POST['signup'])) {
$prefix=$_POST['prefix'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];
$id_card=$_POST['id_card'];
$tel=$_POST['tel'];
$urole= 1 ;

$sql="INSERT INTO `users`(`fname`, `lname`, `username`, `pass`, `prefix`, `id_card_code`, `tel`, `urole`) 
                VALUES ('$fname','$lname','$username','16881688Scm','$prefix','$id_card','$tel','$urole')";
$result=mysqli_query($conn,$sql);

if ($result) {
    header("location: index.php");
    exit(); 
}else{
    mysqli_error($conn);
}

}
?>