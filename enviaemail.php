<?php 

require_once('phpemail/class.phpmailer.php'); //chama a classe de onde você a colocou.

$mail = new PHPMailer(); // instancia a classe PHPMailer

$mail->IsSMTP();

//configuração do gmail
$mail->Port = '465'; //porta usada pelo gmail.
$mail->Host = 'smtp.gmail.com'; 
$mail->IsHTML(true); 
$mail->Mailer = 'smtp'; 
$mail->SMTPSecure = 'ssl';

//configuração do usuário do gmail
$mail->SMTPAuth = true; 
$mail->Username = 'erick.acasado@gmail.com'; // usuario gmail.   
$mail->Password = '21587562a'; // senha do email.

$mail->SingleTo = true; 

// configuração do email a ver enviado.
$mail->From = "Mensagem de email, pode vim por uma variavel."; 
$mail->FromName = "Nome do remetente."; 

$mail->addAddress("contato@hotmail.com"); // email do destinatario.

$mail->Subject = "Aqui vai o assunto do email, pode vim atraves de variavel."; 
$mail->Body = "Aqui vai a mensagem, que tambem pode vim por variavel.";

if(!$mail->Send())
    echo "Erro ao enviar Email:" . $mail->ErrorInfo;



?>