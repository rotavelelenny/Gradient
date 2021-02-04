<?php session_start();
if($_SESSION["autoriser"] !="oui"){
  header("location: connexion.php");
  exit();
}


$bdd = new PDO('mysql:host=localhost;dbname=gradien', 'root', '');
$insert = $bdd->prepare("SELECT nom, prenom, email, datedenaissance, numero_dossier FROM inscription ");   //  Selectionne pseudo et email de ma bdd
$insert->execute();
// récupe les résultats
$infos = $insert->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./CSS/index_stagiaire.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap"
      rel="stylesheet"
    />
    <title>Utilisateur</title>
  </head>
  <body>
  
    <main>
      <section class="landing"> 
    

        <nav> 
          <h1 id="logo">AFPA</h1>
          <ul class="decoBtn">   
           
              <a href="deconnexion.php">Déconnexion</a>
          </ul>
      
       
          <ul class="nav-links">
            <a href="https://www.afpa.fr/recherche-centre">
              <li>Centre de formation</li>
            </a>
          </ul>
         
        </nav> 
       
         <h2 class="big-text_utilisateur">CHOISISSEZ L'AVENIR.</h2> 
        
        <div class="box_utilisateur">
          <!--ajouté par lenny-->
          <ul>
<!-- jai ajouter ceci -->
  <?php foreach ($infos as $infos): ?>

  
 <?php endforeach; ?>
<!--  -->
</ul>
            
            <a href="./formulaire_neon/formulaire.php">
              <p>Formulaire de stage</p>  
              <img src="https://s2.svgbox.net/octicons.svg?ic=arrow-right-bold" alt="">
              <p style="color: black; font-size:0.75rem">Remplir en ligne</p>
            </a>
          
          <div class="utilisateur" placeholder="nom_utilisateur">
            <h2>Nom : <?= $_SESSION['nom'] ?></h2>
          </div>

          <div class="utilisateur" placeholder="prenom_utilisateur">
            <h2>Prénom : <?= $_SESSION['prenom'] ?></h2>
          </div>

          <div class="utilisateur" placeholder="prenom_utilisateur">
            <h2>Date de naissance : <?= $_SESSION['datedenaissance'] ?></h2>
          </div>

          <div class="utilisateur" placeholder="numero_dossier_utilisateur">
            <h2>N° dossier : <?= $_SESSION['numero_dossier'] ?></h2>
          </div>

          <div class="utilisateur" placeholder="mail_utilisateur">
            <h2>Mail : <?= $_SESSION['email'] ?></h2>
          </div>
          
          <a style="margin-top:100px;" href="./formulaire_neon/formulaire.php">
            <p style="color: black ;border:black ;">Formulaire de stage rempli</p>
            <p style="color: black; font-size:0.75rem; text-align:justify; padding:20px">Télécharger votre formulaire ici lorsque vous l'aurez rempli en ligne </p>
            <img src="./CSS/assets/PDF.png" alt="logo pdf en couleur" style="width: 40px;">
          </a>
        </div>   

      </section>
    </main>
<!--Slide au chargement de la page-->
    <div class="intro">
      <div class="intro-text">
        <h1 class="hide">
          <span class="text">Agence Nationale</span>
        </h1>
        <h1 class="hide">
          <span class="text">Pour la Formation Professionnelle</span>
        </h1>
        <h1 class="hide">
          <span class="text">Des Adultes</span>
        </h1>
      </div>
    </div>

    <div class="slider"></div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
      integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
      crossorigin="anonymous">
    </script>
    <script src="./JS/index.js"></script>   
  </body>
</html>
