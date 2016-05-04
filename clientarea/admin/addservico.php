<?php
 $cpf= $usuario['cpf'];
 $option = '';
 $superusersm = mysqli_query($connection,"SELECT S.Usuario_cpf, S.SuperUser_id, Su.nome FROM superuser Su INNER JOIN usuario_has_superuser S WHERE S.Usuario_cpf='$cpf' ORDER BY S.SuperUser_id");
 while ($opt = mysqli_fetch_assoc($superusersm)) {
 	$option .= '<option value = "'.$opt['SuperUser_id'].'">'.$opt['nome'].'</option>';
 }
 

 //botao é apertado:
if(isset($_POST['btn-solicitar']))
{

 $sid= mysqli_real_escape_string($connection,$_POST['local']);
 $data= mysqli_real_escape_string($connection,$_POST['horario']);
 $dataparse= preg_replace("/[^0-9 ]/","",$data);
 $comentario= mysqli_real_escape_string($connection,$_POST['comentario']);
 $servico = mysqli_real_escape_string($connection,$_POST['servicoinput']);
 $queryservico = mysqli_query($connection, "SELECT * FROM servico WHERE codigo=$servico");
 $arrayservico = mysqli_fetch_array($queryservico);
 $desconto=5;
 $valor = ($sid!=0) ? $arrayservico['preco_sugerido']-$desconto : $arrayservico['preco_sugerido'];
 if(mysqli_query($connection,"INSERT INTO solicitacoes (Usuario_cpf,Servico_codigo,Superuser_id,estado,data_horario,valor_pago,comentario) VALUES('$cpf','$servico','$sid','aberto',STR_TO_DATE('$dataparse','%d%m%Y %k%i'),'$valor','$comentario')"))
 {
  ?>
        <script>alert('Pedido Registrado');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert(<?php echo $sid ?>);</script>
        <?php
 }
}
?>