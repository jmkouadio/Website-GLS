<html lang="fr">
  <head>
    <meta charset="UTF-8" content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Des solutions de sécurité
    adaptées, sûres et innovantes" />
    <meta name="author" content="Glory Security Services" />
    <title>Glory Security Services</title>

    <link rel="stylesheet" href="../assets/css/components/contact.css">

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
    <link rel="icon" href="../assets/images/logo gls.png" sizes="200x200" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
  <div id="progress"></div> 
<div class="menu">
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container">
      <a title="Accueil" class="navbar-brand" href="../index.html" id="logo"><img title="Page d'accueil" src="../assets/images/logo gls.png" width="100px"></a>
      <button title="Menu" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span><i class="fa-solid fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
         
   
          <li class="nav-item">
            <a class="nav-link" href="pages/camera.html">Videosurveillance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/antiintrusion.html">Alarme</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/cloture.html">Clôture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/controle.html">Contrôle d'accès</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="pages/formation.html">Formation</a>
          </li>
         
          
            <li class="nav-item">
              <a class="nav-link" href="pages/antiintrusion.html">Société</a>
            </li>
         
         
        </ul>
        
      </div>
    </div>
  </nav>
<!-- Navbar End -->
</div> 


<!-- About Start -->
<section class="about1" id="about1">
  <div class="container">

    <div class="row" style="margin-top: 50px;">
         
      <div class="col-md-6 py-3 py-md-0">
        
        <br><br>
        <?php
include('script.php');
?>
        <form id="formulaire" action="" method="POST">
          
          <fieldset class="text-center font-weight-bold text-danger">Tous les champs marqués * sont obligatoire</fieldset>
          <label class="form-label" for="villes">Sélectionnez une ville :</label>
          <select id="villes" name="villes" class="form-select">
              <option value="abidjan">Abidjan</option>
              <option value="aboisso">Aboisso</option>
              <option value="adiake">Adiaké</option>
              <option value="adzope">Adzopé</option>
              <option value="agboville">Agboville</option>
              <option value="alepe">Alépé</option>
              <option value="anyama">Anyama</option>
              <option value="bingerville">Bingerville</option>
              <option value="bocanda">Bocanda</option>
              <option value="bongouanou">Bongouanou</option>
              <option value="bonoua">Bonoua</option>
              <option value="bouafle">Bouaflé</option>
              <option value="bouake">Bouaké</option>
              <option value="boundiali">Boundiali</option>
              <option value="dabakala">Dabakala</option>
              <option value="dabou">Dabou</option>
              <option value="daloa">Daloa</option>
              <option value="danane">Danané</option>
              <option value="daoukro">Daoukro</option>
              <option value="diegonoufla">Diego-Noufla</option>
              <option value="divo">Divo</option>
              <option value="duekoue">Duékoué</option>
              <option value="fresco">Fresco</option>
              <option value="gagnoa">Gagnoa</option>
              <option value="grandbassam">Grand-Bassam</option>
              <option value="grandlahou">Grand-Lahou</option>
              <option value="guiglo">Guiglo</option>
              <option value="issia">Issia</option>
              <option value="katiola">Katiola</option>
              <option value="korhogo">Korhogo</option>
              <option value="lakota">Lakota</option>
              <option value="man">Man</option>
              <option value="mankono">Mankono</option>
              <option value="minignan">Minignan</option>
              <option value="odienne">Odienné</option>
              <option value="oume">Oumé</option>
              <option value="sakassou">Sakassou</option>
              <option value="sanpedro">San Pedro</option>
              <option value="sassandra">Sassandra</option>
              <option value="seguela">Séguéla</option>
              <option value="sinfra">Sinfra</option>
              <option value="soubre">Soubré</option>
              <option value="tabou">Tabou</option>
              <option value="tanda">Tanda</option>
              <option value="tiassale">Tiassalé</option>
              <option value="touba">Touba</option>
              <option value="toulepleu">Toulepleu</option>
              <option value="toumodi">Toumodi</option>
              <option value="vavoua">Vavoua</option>
              <option value="yakasseattobrou">Yakassé-Attobrou</option>
              <option value="yamoussoukro">Yamoussoukro</option>
              <option value="zanouala">Zaranou</option>
              <option value="zuénoula">Zuénoula</option>
          </select>
          
         
          <div class="form-group my-3">
              <input type="text" name="commune" size="40" class="required form-control" id="commune" aria-required="true" aria-invalid="true" placeholder="Commune / Quartier*">
          </div>
      
          <div class="form-group my-3">
            <input type="text" name="nom" size="40" class="required form-control" id="nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" aria-required="true" aria-invalid="true" placeholder="Votre nom complet*" >
        </div>
      
        <div class="form-group my-3">
          <input type="text" name="societe" size="40" class=" form-control" id=""  aria-invalid="true" placeholder="Société">
      </div>
      
      <div class="form-group my-3">
        <input type="text" name="emails" size="40" class=" form-control" id=""  aria-invalid="true" placeholder="Email*" >
      </div>
      
      <div class="form-group my-3">
      <input type="text" name="telephone" size="40" class=" form-control" id=""  aria-invalid="true" placeholder="Téléphone*" >
      </div>
      
      <div class="form-group my-3">
      <textarea class="form-control" id="message" name="message" rows="4" placeholder="Votre demande*" ></textarea>
      </div>
      <div>
      <input type="submit" value="Envoyer">
      </div>
      </form>

      </div>

      <div class="col-md-6 py-3 py-md-0 reveal2" style="margin-top: 50px;">
        <br> 
        <br>
        <p>
          GLS est une entreprise prestataire, spécialisée dans l'accompagnement des entreprises publiques et privées,
           commerces et personnes physiques, pour prévenir les actes de malveillance humaine et protéger les personnes et les biens contre les conséquences de tels actes.
<br>
           <br>
           De par notre expertise, nous aidons nos clients à réduire drastiquement le niveau de risque lié aux actes de malveillance (vol, incendie criminel, agression, intrusion de personnes ou d’objets malveillants en vue de nuire, …).

      </p>
      <P>
        Courrier électrique : <a title="cliqué pour nous écrire !" href="mailto:gls.ciabj@gmail.com">
          glorysecurityservices.com
         </a>
      </P>
      <p>
        Nous contacter: <a title="cliqué pour nous appeler !" href="tel:+2250507208790"> Cel:(+225) 05 07 20 87 90</a> &nbsp;&nbsp;
        <a title="cliqué pour nous appeler !" href="tel:+2252722495191"> Tél:(+225) 27 22 49 51 91</a>
      </p>
      <p>
        Localisation : Abidjan,Cocody, Angré carrefour des Oscars, Côte d'Ivoire
      </p>
      
        <p>
          Assistance technique : 24h/24 et 7j/7
        </p>


      </div>

    </div>

  </div>
</section>
<!-- About End -->
        
      

<footer id="foot">
  <div class="footer-col">
      <h4>Contactez-nous</h4>
      <ul>
          <li><a title="cliqué pour nous écrire !" href="mailto:gls.ciabj@gmail.com">
           glorysecurityservices.com
          </a></li>
          <li><a title="cliqué pour nous appeler !" href="tel:+2250507208790"> Cel:(+225) 05 07 20 87 90</a></li>
          <li><a title="cliqué pour nous appeler !" href="tel:+2252722495191"> Tél:(+225) 27 22 49 51 91</a></li>
          <li class="nopointer"><a title="Notre emplacement" href="#foot">Cocody, Angré carrefour des Oscars</a></li>
      </ul>
  </div>
  
  <div class="footer-col">
      <h4>Secrétariat</h4>
      <ul class="nopointer">
          <li><a title="Nos horaires" href="#foot">Horaire : 07h30-12h00</a></li>
          <li><a title="Nos horaires" href="#foot">13h30-17h00</a></li>
          <li><a title="Notre disponibilité" href="#foot">Assistance Technique : 24h/24 et 7j/7</a></li>
         
      </ul>
  </div>
  <div class="footer-col">
      <h4>Liens utiles</h4>
      <ul>
        <li><a title="Démander un dévis" href="#foot">Dévis gratuit</a></li>
          <li><a title="Nos formations" href="#foot">Formation</a></li>
          <li><a title="La société" href="#foot">La société</a></li>
      </ul>
  </div>
  <div class="footer-col">
      <h4>Suivez-nous</h4>
      <div class="links">
          <a title="Page Linkedin" href="#foot"><i class="fab fa-linkedin-in"></i></a>
          <a title="Page Facebook" href="#foot"><i class="fab fa-facebook-f"></i></a>
           <a title="Whatsapp" href="#foot"><i class="fab fa-whatsapp"></i></a>
          <a title="Page twitter" href="#foot"><i class="fab fa-twitter"></i></a>
         
      </div>
  </div>
  
</footer>

<p class="footer-row">
 &copy;2024 - Glorysecurityservices.com 2024- Mention légale
</p>

<script src="../assets/js/reveal-script/index.js"></script>
<script src="../assets/js/reveal-script/index1.js"></script>
<script src="../assets/js/reveal-script/reveal2.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/progress.js"></script>
</body>
</html>