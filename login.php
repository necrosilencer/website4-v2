<meta charset='utf8'>

<?php 	
header('content-type: text/html;charset=utf8');

$usuarioLogin = $_POST['usuario'];
$senhaLogin = $_POST['senha'];
$senhaConfirma =$_POST['senhaconfirma'];
$novaSenha =$_POST['novasenha'];

include ('conectarsqli.php');

$sql = "SELECT * FROM usuario WHERE login = '$usuarioLogin' && senha = '$senhaLogin' ";


$resposta = mysqli_query($conn,$sql);

if ($campo = mysqli_fetch_array($resposta))

{
	$id =$campo['id'];
if ($novaSenha == $senhaConfirma){
	

	$sql = "UPDATE usuario SET senha ='$senhaConfirma' WHERE id=$id;";


$resposta = mysqli_query($conn,$sql);


 echo "<script>alert('As informações foram atualizadas com sucesso');window.location.href='entrar.html';</script>";

}}

else {
	echo "<script> alert('Nome de usuario e/ou senha incorretos!');window.location.href='entrar.html';</script>";
}
 ?>