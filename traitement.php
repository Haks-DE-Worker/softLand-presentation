<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'config.php';

    if (isset($_POST["name"], $_POST["email"], $_POST["message"], $_POST["subject"], $_POST["phone"])) {
        $name = htmlspecialchars($_POST["name"]);
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        $message = htmlspecialchars($_POST["message"]);
        $subject = "Nouveau message de " . $_POST['name'] . " " . " provenant de la plateforme SOFTLAND";
        $phone = htmlspecialchars($_POST["phone"]);
        if (!$email) {
            die("Adresse e-mail invalide !");
        }
        $body = <<<HTML
        <p>
        <strong>Nom:</strong> $name<br>
        <strong>Email:</strong> $email<br>
        <strong>Message:</strong> $message<br>
        </p>        
        HTML;
        $message_à_afficher = <<<HTML
                    <body style="font-family: Arial, sans-serif;background-color: #f4f4f4;margin: 0;padding: 0;display: flex;justify-content: center;align-items: center;height: 100vh; background:#A0D2DB">
                        <div class="container" style="text-align: center;background: #ffffff;padding: 20px;border-radius: 8px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                            <div class="message">
                                <h1 style="color: #28a745;margin-bottom: 10px;">Message envoyé avec succès !</h1>
                                <p style="font-size: 18px;color: #333;margin-bottom: 20px;">$name, merci pour votre message. Nous vous répondrons dès que possible.</p>
                                <a href="index.php" class="button"style="display: inline-block;padding: 10px 20px;font-size: 16px;color: #ffffff;background-color: #007bff;text-decoration: none;border-radius: 4px;">Retour à l'accueil</a>
                            </div>
                        </div>
                    </body>
                    HTML;   
        
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = SMTP_USER;                     //SMTP username
        $mail->Password   = SMTP_PASS;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                               //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        // $mail->Port = 465;                                    //TCP port 465 to connect to; use 587 if you have set   `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom("abdel@gmail.com", 'Softland site');
        $mail->addAddress('akoredeagn@gmail.com');     //Add a Recipients. It's the adress which receive the mail
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = strip_tags($body);
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        
        echo $message_à_afficher;
        } catch (Exception $e) {
            echo $e;
            echo "Votre message n'a pas été envoyé Erreur: {$mail->ErrorInfo}";        
        }
} else {
    header('Location:contact.php');
    '<script>' . "alert('VOUS DEVEZ RENSEIGNER TOUS LES CHAMPS!!!')" . '</script>';
}
?>