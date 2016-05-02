<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysqli_query($connection,"SELECT * FROM usuario WHERE cpf=".$_SESSION['user']);
$usuario=mysqli_fetch_array($res);
?>