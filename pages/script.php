<?php
if(isset($_POST['valider'])) {
    if( empty($_POST['nom']) || empty($_POST['emails']) || empty($_POST['message']) ) {
        echo '<div class="msg error">Merci de remplir tous les champs</div>';
    } else {
        $nom     = $_POST['nom'];
        $email   = $_POST['emails'];
        $message = $_POST['message'];

        $expediteur   = 'no-reply@carlbrison.fr';
        $destinataire = 'gls.ciabj@gmail.com';
        $sujet        = 'Message en provenance de votre site';
        /*$contenu      = "Vous avez un nouveau message en provenance de votre site. \n";
        $contenu     .= "Nom: $nom \n";
        $contenu     .= "Email: $email \n";
        $contenu     .= "Message: $message";*/
        $contenu      = "<html><body><p>Vous avez un nouveau message en provenance de votre site.</p><p>Nom: $nom</p><p>Email: $email</p><p>Message: $message</p></body></html>";
        $header       = "FROM: .$expediteur \n";
        $header      .= "Content-Type:text/html; charset='utf-8'";

        mail($destinataire, $sujet, $contenu, $header);

        echo '<div class="msg success">Votre message a bien été envoyé</div>';
    }
}