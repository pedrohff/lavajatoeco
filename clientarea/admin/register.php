<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
 $cpf = mysqli_real_escape_string($connection,$_POST['cpf']);
 $email = mysqli_real_escape_string($connection,$_POST['email']);
 $nome = mysqli_real_escape_string($connection,$_POST['nome']); 
 $sexo = mysqli_real_escape_string($connection,$_POST['sexo']);
 $pass = md5(mysqli_real_escape_string($connection,$_POST['senha']));
 $rua = mysqli_real_escape_string($connection,$_POST['rua']);
 $bairro = mysqli_real_escape_string($connection,$_POST['bairro']);
 $complemento = mysqli_real_escape_string($connection,$_POST['complemento']);
 $numero = mysqli_real_escape_string($connection,$_POST['numero']);
 $cep = mysqli_real_escape_string($connection,$_POST['cep']);
 $cidade = mysqli_real_escape_string($connection,$_POST['cidade']);
 $estado = mysqli_real_escape_string($connection,$_POST['estado']);
 
 if(mysqli_query($connection,"INSERT INTO usuario (cpf,email,nome,sexo,senha,rua,bairro,complemento,numero,CEP,cidade,estado,tipo) VALUES('$cpf','$email','$nome','$sexo','$pass','$rua','$bairro','$complemento','$numero','$cep','$cidade','$estado','00')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>