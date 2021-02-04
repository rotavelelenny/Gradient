
<?php
 if (isset($_POST["submit"])){

    // Je recupere les donnees de mes champs dans la html

   $Prenom = $_POST['Prenom']; 
   $Nom = $_POST['Nom'];
   $Mail= $_POST['Mail'];
   $Telephone = $_POST['Telephone'];
   $periode_stage = $_POST['periode_stage'];
   $nom_entreprise = $_POST['nom_entreprise'];
   $adresse_entreprise = $_POST['adresse_entreprise'];
   $Siret = $_POST['Siret'];
   $Tel_entreprise = $_POST['Tel_entreprise'];
   $Representant_legal = $_POST['Representant_legal'];
   $Mail_entreprise = $_POST['Mail_entreprise'];
   $Activite_entreprise = $_POST['Activite_entreprise'];
   $reception_stagiaire = $_POST['reception_stagiaire'];
   $lieu_stage = $_POST['lieu_stage'];
   $Tuteur_entreprise = $_POST['Tuteur_entreprise'];
   $poste_occuper = $_POST['poste_occuper'];
   $tel_contact_entreprise = $_POST['tel_contact_entreprise'];
   $mail_contact_entreprise = $_POST['mail_contact_entreprise'];
   $Activite_proposer = $_POST['Activite_proposer'];
   $Nom_formateur_afpa = $_POST['Nom_formateur_afpa'];
   $date_validaton = $_POST['date_validaton'];
  //  $signature = $_POST['signatures']; 

// je me connecgt a ma base de donnees
   $servname = "localhost";
   $bddname = "projet_afpa";
   $root = "root";
   $pass = "";
   
   $bdd = new PDO("mysql:host=$servname;dbname=$bddname","$root","$pass"); 


  //  j'envoi les données

$requete = $bdd->prepare("INSERT INTO form_stage(Prenom, Nom , Mail, Telephone ,periode_stage,nom_entreprise , adresse_entreprise , Siret , Tel_entreprise , Representant_legal , Mail_entreprise, Activite_entreprise , reception_stagiaire , lieu_stage , Tuteur_entreprise , poste_occuper , tel_contact_entreprise , mail_contact_entreprise , 
Activite_proposer ,Nom_formateur_afpa , date_validaton ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$requete->execute([$Prenom,$Nom,$Mail,$Telephone,$periode_stage,$nom_entreprise,$adresse_entreprise,$Siret,$Tel_entreprise,$Representant_legal,$Mail_entreprise,$Activite_entreprise,$reception_stagiaire,$lieu_stage,$Tuteur_entreprise,$poste_occuper,$tel_contact_entreprise,$mail_contact_entreprise,$Activite_proposer,$Nom_formateur_afpa,$date_validaton]);}


?> 


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css" />
  <!-- font modifié par Lenny -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet" />
</head>
<body>

    <!--modifié et remise en page par Lenny-->
  <div class="container">
    <div id="wrap"> 
      <div class="header"><h1 class="h1">BIENVENUE AU CENTRE DE FORMATION DE L'A.F.P.A</h1>
    </div>  
  </div>   
    <div class="row100"> <h2>Fiche de Renseignements Périodes en Entreprise</h2>
      <form action="index.php" method="POST">

        <div class="col">
          <div class="inputBox">
            <input type="text" name="Prenom" required="required">
              <span class="text">Prénom :</span>
              <span class="line"></span>
          </div>
        </div> 
        
        <div class="col">
          <div class="inputBox">
            <input type="text" name="Nom" required="required">
              <span class="text">Nom :</span>
              <span class="line"></span>
          </div> <br/><br/>
        </div>   
    
        <div class="col">
          <div class="inputBox">
            <input type="mail" name="Mail" required="required">
                <span class="text">Email :</span>
                <span class="line"></span>
          </div>
        </div> <br/><br/>
                  
        <div class="col">
          <div class="inputBox">
            <input type="text" name="Telephone" required="required">
              <span class="text">N° Télephone :</span>
              <span class="line"></span>
          </div> <br/><br/>
        </div>
                

        <div class="col">
          <div class="inputBox textarea">
                                      <!-- <textarea required="required"></textarea> -->
            <input type="text" name="periode_stage" value="" required="required">
              <span class="text">Dois réaliser une période en formation du : </span>
              <span class="line"></span>
          </div>
        </div>  <br/><br/>

          <!-- Entreprise / modifié par Lenny et remise en page -->
        <h2>Information entreprise</h2> <br><br/>
      
        <div class="col">
          <div class="inputBox">
            <input type="text" name="nom_entreprise" required="required">
            <span class="text">Nom :</span>
            <span class="line"></span>
          </div>
        </div> 

        <div class="col">
          <div class="inputBox">
            <input type="text" name="adresse_entreprise" required="required">
              <span class="text">Adresse :</span>
              <span class="line"></span>
          </div>
        </div> 

        <div class="col">
          <div class="inputBox">
            <input type="text" name="Siret" required="required">
              <span class="text">N° Siret :</span>
              <span class="line"></span>
          </div>
        </div> 

        <div class="col">
          <div class="inputBox">
            <input type="text" name="Tel_entreprise" required="required">
              <span class="text">N° Téléphone:</span>
              <span class="line"></span>
        </div>
        </div> 

        <div class="col">
          <div class="inputBox">
          <input type="text" name="Representant_legal" required="required">
            <span class="text">Représentant légal :</span>
            <span class="line"></span>
          </div>
        </div> 

        <div class="col">
          <div class="inputBox">                                                                                                                  
            <input type="text" name="Mail_entreprise" required="required">
              <span class="text">Mail entreprise :</span>
              <span class="line"></span>
          </div>
        </div> 
        
                      
        <div class="col">
          <div class="inputBox">                                                                                                                                   
            <input type="text" name="Activite_entreprise" required="required">
              <span class="text">Activité de l'entreprise :</span>
              <span class="line"></span>
          </div>
        </div> 
                  
        <div class="col">
          <div class="inputBox">                                                                                                                                   
            <input type="text" name="reception_stagiaire" value=""required="required">
              <span class="text">Stagiaire reçu le (JJ/MM/AAAA)  de (--h--)  à  (--h--):</span>
              <span class="line"></span>
          </div>
        </div> <br/><br/>           

          <!-- Pré-conviention / Modifié par Lenny -->
          <h3>Accepte le/la Stagiaire pour la période en entreprise.</br></br>
              Une convention sera obligatoirement établie par l'Afpa.
          </h3>  <br/><br/>

          
            <div class="col">
              <div class="inputBox">                                                                                                                                   
                <input type="text" name="lieu_stage" required="required">
                  <span class="text">Lieu de stage (Si différente de l'adresse indiqué en haut) :</span>
                  <span class="line"></span>
              </div>
            </div>             

            <div class="col">
              <div class="inputBox">                                                                                                                                   
                <input type="text" name="Tuteur_entreprise" required="required">
                  <span class="text">Tuteur désigné par l'entreprise :</span>
                  <span class="line"></span>
              </div>
            </div> 

            <div class="col">
              <div class="inputBox">                                                                                                                                   
                <input type="text" name="poste_occuper" required="required">
                  <span class="text">Poste occupé :</span>
                  <span class="line"></span>
              </div>
            </div> 

            <div class="col">
              <div class="inputBox">                                                                                                                                   
                <input type="text" name="tel_contact_entreprise" required="required">
                  <span class="text">Téléphone :</span>
                  <span class="line"></span>
                </div>
              </div> 

            <div class="col">
              <div class="inputBox">                                                                                                                                   
                <input type="text" name="mail_contact_entreprise" required="required">
                  <span class="text">Mail :</span>
                  <span class="line"></span>
              </div>
            </div> 

            <div class="col">
              <div class="inputBox">                                                                                                                                   
                <input type="text" name="Activite_proposer" required="required">
                  <span class="text">Activités proposées par l'entreprise :</span>
                  <span class="line"></span>
              </div>
            </div>  <br/><br/>
                      
          <!-- Validation et champs de saisie / modifié par lenny -->
          <h2>Validation du formateur si accord de l'entreprise</h2><br/><br/>
        
          <div class="col">
            <div class="inputBox">                                                                                                                                   
              <input type="text" name="Nom_formateur_afpa" required="required">
                <span class="text">Nom :</span>
                <span class="line"></span>
            </div>
          </div>

          <div class="col">
            <div class="inputBox">                                                                                                                                   
            <input type="text" name="date_validaton" required="required">
                <span class="text">Date :</span>
                <span class="line"></span>
            </div>
          </div>

          <!-- signature / modifié par lenny -->
          <h2>Canvas pour signature</h2><br/><br/>
          
            <div class="mise-en-page">
              <div class="bloc-mise-en-page">
                <h2> (<span id="bt-clear"> Signer nettoyer</span>)</h2>
                <canvas id="canvas" name="signatures"></canvas>
              </div>

              <div class="bloc-mise-en-page">
                <h2>Capture de la signature</h2>
                <div id="capture" name="signatures"></div> 
              </div>

              <div class="col">
                  <input type="submit" name="Submit" value="ENVOYER">
              </div>
            </div> 
  </div>          
    </div> 
      <form>
    <script src="script.js"></script>
</body>
</html>