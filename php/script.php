<?php
if(isset($_POST['valider'])) {
    if( empty($_POST['ville']) || empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['message']) ) {
        echo '<div class="msg error">Tous les champs marqués * sont obligatoires</div>';
    } else {

        if(empty($_POST['societe'])){
            $societe = '';
        }
        $ville   = $_POST['ville'];
        $nom     = $_POST['nom'];
        $societe = $_POST['societe'];
        $email   = $_POST['email'];
        $message = $_POST['message'];

        $expediteur   = 'no-reply@glorysecurityservices.com';
        $destinataire = 'gls.ciabj@gmail.com';
        $sujet        = 'Message en provenance de votre site';
        /*$contenu      = "Vous avez un nouveau message en provenance de votre site. \n";
        $contenu     .= "Nom: $nom \n";
        $contenu     .= "Email: $email \n";
        $contenu     .= "Message: $message";*/
        $contenu      = "<html><body><p>Vous avez un nouveau message en provenance de votre site.</p><p>Ville / Commune: $ville</p><p>Nom: $nom</p><p>Société: $societe</p><p>Email: $email</p><p>Message: $message</p></body></html>";
        $header       = "FROM: .$expediteur \n";
        $header      .= "Content-Type:text/html; charset='utf-8'";

        mail($destinataire, $sujet, $contenu, $header);

        echo '<div class="msg success">Votre message a bien été envoyé</div>';
    }
}