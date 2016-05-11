<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
if(isset($_POST['btn-login']))
{
 $email = mysqli_real_escape_string($connection,$_POST['email']);
 $upass = mysqli_real_escape_string($connection,$_POST['pass']);
 $res=mysqli_query($connection,"SELECT * FROM usuario WHERE email='$email'");
 $row=mysqli_fetch_array($res);
 if($row['senha']==md5($upass))
 {
  $_SESSION['user'] = $row['cpf'];
  header("Location: home.php");
 }
 else
 {
  ?>
        <script>alert('Erro no login');</script>
        <?php
 }
 
}
?>