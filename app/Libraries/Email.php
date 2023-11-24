<?php
 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
 
class Email
{
    public $resultado;


    public function getResultado(): string
    {
        
            return $this->resultado; 
    }
 
    public function enviar_email($email,$nome,$conteudo){
       

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                          
    $mail->Host       = 'sandbox.smtp.mailtrap.io';                      
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = '2174e2f5944fd7';                     
    $mail->Password   = '9b23b8604d45ac';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            
    $mail->Port       = 2525;           
    
    $mail->setFrom($email, $nome);
    $mail->addAddress('srlearning2003@gmail.com', 'Learning');     

 
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'Titulo do email';
     $mail->Body    = $conteudo;
     $mail->AltBody = 'Olá Sr Learning, sua solicitação sobre a senha de recuperação.\nTexto da segunda linha.';
 
     $mail->send();

     
     $this->resultado = 'A sua mensagem foi enviada com sucesso!<br>';
    

} catch (Exception $e) {
     
    $this->resultado = "A sua mensagem não foi enviado com sucesso.";
    
 
}

}
}