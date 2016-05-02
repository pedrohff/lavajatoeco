<?php
 $cpf= $usuario['cpf'];
 $option = '';
 $superusersm = mysqli_query($connection,"SELECT S.Usuario_cpf, S.SuperUser_id, Su.nome FROM superuser Su INNER JOIN usuario_has_superuser S WHERE S.Usuario_cpf='$cpf' ORDER BY S.SuperUser_id");
 while ($opt = mysqli_fetch_assoc($superusersm)) {
 	$option .= '<option value = "'.$opt['SuperUser_id'].'">'.$opt['nome'].'</option>';
 }
 

 //botao é apertado:
if(isset($_POST['btn-signup']))
{

 $sid= mysqli_real_escape_string($connection,$_POST['local']);
 $data="";
 $comentario= mysqli_real_escape_string($connection,$_POST['comentario']);
 if(mysqli_query($connection,"INSERT INTO solicitacoes (cpf,servico_codigo,superuser_id,estado,data_horario,valorpago,comentario) VALUES('$cpf',,$sid,'aberto','$valor','$comentario')"))
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