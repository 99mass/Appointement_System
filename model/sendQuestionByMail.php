<?php
@session_start(); // on demare la session
$mail=htmlspecialchars(trim(strip_tags($_POST["mail"])));
$reponse_admin=htmlspecialchars(trim(strip_tags($_POST["reponse_admin"])));


if (isset($mail) && isset($reponse_admin)) {
    if (empty($reponse_admin) || empty($mail) ) {
        $_SESSION["error"]="E-mail non envoyer Veillez reessayer.";
        header("Location: ../view/repond_message.php");
    }
            // Envoie l'email de confirmation
            $to = $mail;
            $subject = "Reponse De La Part De GAC ";
            $message = "<html>
                        <body >
                            <p>Bonjour,</p>
                            <p>Nous avons recue votre Question. voici ci-dessous la Reponse.</p>
                            <p  style='color: #337ab7;font-size: larger;font-weight: bold;'>$reponse_admin</p>
                            <p>Cordialement, L'équipe Global Adenture Code.</p>
                        </body>
                        </html>";

            $headers = "From: globaladventurecode@gmail.com " . "\r\n" .
                        "Reply-To: globaladventurecode@gmail.com" . "\r\n" .
                        "MIME-Version: 1.0" . "\r\n" .
                        "Content-type:text/html;charset=UTF-8" . "\r\n" .
                        "X-Mailer: PHP/" . phpversion();

        mail($to, $subject, $message, $headers);
           if( mail($to, $subject, $message, $headers)){
                $_SESSION["succe"]="E-mail envoyer.";
                header("Location: ../view/repond_message.php");
           }else {
                $_SESSION["error"]="E-mail non envoyer Veillez reessayer.";
                header("Location: ../view/repond_message.php");
           }
    
}