<?php

    //PHPMailer v5.2 - estável
    //github.com/PHPMailer/tree/5.2-stable

    require 'mailer/PHPMailerAutoload.php';
    //require - para a execução se houver problema para importar o arquivo

    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $corpo = $_POST['corpo'];

    $mail = new PHPMailer(); //instancia do objeto do tipo PHPMailer
    $mail->isSMTP();
    $mail->Charset = 'UTF-8';
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'ti33senacsc@gmail.com';
    $mail->Password = 'senac123';
    $mail->Port = 587;

    $mail->setFrom('ti33senacsc@gmail.com');
    $mail->addReplyTo('ti33senacsc@gmail.com');
    $mail->addAddress($email); //se quiser adicionar mais de um email, é só copiar essa linha!
    #$mail->addCC($email); cópia
    #$mail->addBCC($email); cópia oculta

    $mail->isHTML(true);
    $mail->Subject= $assunto;
    $mail->Body='<h1>Conteúdo do email</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, officia vero? Quas laboriosam assumenda quae aliquam sapiente velit similique dolor illum ullam ipsam. Sequi, corporis iure ipsa harum maiores totam?</p>';
    $mail->addAttachment('./img/jandaia.jpg', 'jandaia.jpg');
    
    if(!$mail->send()){
        echo "Não foi possível enviar a mensagem";
    }
    else{
        echo "Mensagem enviada";
    }