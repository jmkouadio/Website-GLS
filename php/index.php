<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Des solutions de sécurité
    adaptées, sûres et innovantes" />
    <meta name="author" content="Glory Security Services" />
    <title>Glory Security Services</title>
    <link rel="stylesheet" href="style.css?version=<?php echo date("y-m-d H:i:s"); ?>">

      <!-- Bootstrap Link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="icon" href="assets/images/logo gls.png" sizes="200x200" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  
</head>
<body>

    <section>
        <h1>Demander un devis</h1>
        <h2>Nous sommes disponibles 7J/7 et 24h/24</h2>
<?php
include('script.php');
?>
        <form action="" method="post">
            <input type="text" name="ville" value="<?php if(isset($_POST['ville'])) { echo $_POST['ville']; } ?>" placeholder="Ville / commune*">
            <input type="text" name="nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" placeholder="Votre nom complet*">
            <input type="text" name="societe" value="<?php if(isset($_POST['societe'])) { echo $_POST['societe']; } ?>" placeholder="Société">
            <input type="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>" name="email" placeholder="Votre email*">
            <textarea name="message" rows="8" placeholder="Votre demande (Pour une installation, un depannage...)*"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
            <input type="submit" name="valider" value="Envoyer votre message">
        </form>
    </section>
</body>
</html>