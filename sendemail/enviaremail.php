<?php
/* Recuperar os Dados do Formulário de Envio*/
$txtNome        = $_POST["nome"];
$txtTelefone    = $_POST["telefone"];
$txtMarca       = $_POST["marca"];
$txtModelo      = $_POST["modelo"];
$txtAno      = $_POST["ano"];
$txtMensagem    = $_POST["mensagem"];

echo $txtNome;
echo $txtTelefone;
echo $txtMarca;
echo $txtModelo;
echo $txtMensagem;
 
/* Montar o corpo do email*/
$corpoMensagem .= "<html><body class='clean-body' style='margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF'> <table class='nl-container' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #FFFFFF;width: 100%' cellpadding='0' cellspacing='0'> <tbody> <tr style='vertical-align: top'> <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'> <div style='background-color:transparent;'> <div style='Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;' class='block-grid '> <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'> <div class='col num12' style='min-width: 320px;max-width: 500px;display: table-cell;vertical-align: top;'> <div style='background-color: transparent; width: 100% !important;'> <div style='border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:15px; padding-right: 0px; padding-left: 0px;'> <div align='center' class='img-container center autowidth ' style='padding-right: 0px; padding-left: 0px;'> <img class='center autowidth ' align='center' border='0' src='https://i.imgur.com/r8R3KvN.png' alt='Image' title='Image' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 280px' width='280'> </div> <div class=''> <div style='color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:120%; padding-right: 30px; padding-left: 30px; padding-top: 20px; padding-bottom: 15px;'> <div style='font-family:inherit;line-height:14px;font-size:12px;color:#555555;text-align:left;'> <p style='margin: 0;line-height: 14px;text-align: center;font-size: 12px'> <span style='font-size: 34px; line-height: 40px;'>FORMULÁRIO</span> </p> </div> </div> </div> <div class=''> <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'> <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'> <p style='margin: 0;font-size: 14px;line-height: 17px'> <span style='font-size: 18px; line-height: 21px;'>NOME: $txtNome</span> </p> </div> </div> </div> <div class=''> <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'> <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'> <p style='margin: 0;font-size: 14px;line-height: 17px'> <span style='font-size: 18px; line-height: 21px;'>TELEFONE: $txtTelefone</span> </p> </div> </div> </div> <div class=''> <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'> <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'> <p style='margin: 0;font-size: 14px;line-height: 17px'> <span style='font-size: 18px; line-height: 21px;'>MARCA: $txtMarca</span> </p> </div> </div> </div> <div class=''> <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'> <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'> <p style='margin: 0;font-size: 14px;line-height: 17px'> <span style='font-size: 18px; line-height: 21px;'>MODELO: $txtModelo</span> </p> </div> </div> </div> <div class=''> <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'> <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'> <p style='margin: 0;font-size: 14px;line-height: 17px'> <span style='font-size: 18px; line-height: 21px;'>ANO: $txtAno</span> </p> </div> </div> </div> <div class=''> <div style='color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;'> <div style='font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;'> <p style='margin: 0;font-size: 14px;line-height: 17px'> <span style='font-size: 18px; line-height: 21px;'>MENSAGEM: $txtMensagem</span> </p> </div> </div> </div> </div> </div> </div> </div> </div> </div> </td> </tr> </tbody> </table></body></html>";
 
/* Extender a classe do phpmailer para envio do email*/
require_once("phpmailer/class.phpmailer.php");
 
/* Definir Usuário e Senha do Gmail de onde partirá os emails*/
define('GUSER', 'mariosautopecascontato@gmail.com'); 
define('GPWD', 'marios147');
 
function smtpmailer($para, $de, $nomeDestinatario, $assunto, $corpo) { 
    global $error;
    $mail = new PHPMailer();
    /* Montando o Email*/
    $mail->IsSMTP();            /* Ativar SMTP*/
    $mail->SMTPDebug = 0;        /* Debugar: 1 = erros e mensagens, 2 = mensagens apenas*/
    $mail->SMTPAuth = true;        /* Autenticação ativada    */
    $mail->SMTPSecure = 'tls';    /* TLS REQUERIDO pelo GMail*/
    $mail->Host = 'smtp.gmail.com';    /* SMTP utilizado*/
    $mail->Port = 587;             /* A porta 587 deverá estar aberta em seu servidor*/
    $mail->Username = GUSER;
    $mail->Password = GPWD;
    $mail->SetFrom($de, $nomeDestinatario);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;
    $mail->AddAddress($para);
    $mail->IsHTML(true);
 
    /* Função Responsável por Enviar o Email*/
    if(!$mail->Send()) {
        $error = "<font color='red'><b>Mail error: </b></font>".$mail->ErrorInfo; 
        return false;
    } else {
        $error = "<font color='blue'><b>Mensagem enviada com Sucesso!</b></font>";
        return true;
    }
}
 
/* Passagem dos parametros: email do Destinatário, email do remetente, nome do remetente, assunto, mensagem do email.*/
 if (smtpmailer('rafaeel.16@gmail.com', 'GUSER', 'Mario Auto Pecas', 'Contato cliente', $corpoMensagem)) {
    $success = array(
        "success" => true,
        "nome" => $txtNome,
        "telefone" => $txtTelefone,
        "marca" => $txtMarca,
        "modelo" => $txtModelo,
        "mensagem" => $txtMensagem
    );
    
    echo json_encode((object)$success);
}
if (!empty($error)) echo json_encode(array("error" => true));
?>