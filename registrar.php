<meta charset="utf8">
<?php 
header("content-type: text/html, charset=utf8");

//método foi post então estamos utilizando $_POST[]

//armazenando os conteúdos da variável $_POST nas respectivas
//variáveis locais
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$login = $_POST['login'];
$senhaLogin = $_POST['senha'];
$confirma = $_POST['confirma'];


if ($senhaLogin == $confirma) {


// arquivo para conectar no servidor LOCAL
include ("conectarsqli.php");

//criar a string para gravação
$sql = "INSERT INTO usuario (nome,sobrenome,login,senha) VALUES ('$nome','$sobrenome','$login','$senhaLogin') ";


	

//executando o comando que está no sql
	$resultado = mysqli_query ($conn, $sql);
	mysqli_close($conn);
	
	
	if ($resultado==true){
	echo "<script>alert('Registro efetuado com sucesso!');
				window.location.href='registrar.html';
			  </script>";
			  }

		
		
	else {
		echo "<script>
				alert ('Erro no registro');
				window.location.href='registrar.html';

			</script>";
	}
}
// Linha acima fecha o primeiro IF 
// Caso as senhas não correnspondam
	else {
		echo "<script>alert('Senha ou Confirmação de senha incorreta');
		window.location.href='registrar.html'</script>";



}
	
 
 ?>