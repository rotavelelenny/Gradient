<?php session_start();
 $bdd = new PDO("mysql:host=localhost;dbname=gradien","root","");
 $erreur= "";
 if (isset($_POST["submit"])){

    @$email = $_POST["email"];
    @$numero_dossier = $_POST["numero_dossier"];

            if(empty($email) && empty($numero_dossier)){
                $erreur = "<p style= 'text-align:center;
                font-weight: 600;
                font-size: 10px;
                padding-bottom: 10px;
                background: red;
                border-radius: 5px;
                margin-bottom: 10px;
                padding-top: 10px;'> Veuillez remplir les champs obligatoires !</p>";
       
           
                        }else{
                            //   on verifie si l'email est correct
                            if(filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($numero_dossier)){
                                            
                                $requser = $bdd->prepare("SELECT * FROM formateurs WHERE email = ? AND numero_dossier = ?");
                                $requser->execute(array($email, $numero_dossier));
                                $userexist = $requser->rowCount();
                        
                                // on vérifie si il existe bien un compte
                                if($userexist == 1)
                                { 
                                
                                        $_SESSION['formateur']="oui";
                                        $erreur= "<p style= 'text-align:center;
                                        font-weight: 600;
                                        font-size: 10px;
                                        padding-bottom: 10px;
                                        background: red;
                                        border-radius: 5px;
                                        margin-bottom: 10px;
                                        padding-top: 10px;'> Bienvenue !</p>";
                                        header("location: ./admin_main.php"); 
                
                                }
                                      else
                                            {$erreur = "<p style= 'text-align:center;
                                                font-weight: 600;
                                                font-size: 10px;
                                                padding-bottom: 10px;
                                                background: red;
                                                border-radius: 5px;
                                                margin-bottom: 10px;
                                                padding-top: 10px;'> Mail ou Numéro Dossier non reconnus !</p>";
                                                // echo "<p style= 'color:red'> Mauvais mail ou mots de passe ! </p>";
                                                }

                                } else{$erreur = "
                                <p style= 'text-align:center;
                                font-weight: 600;
                                font-size: 10px;
                                padding-bottom: 10px;
                                background: red;
                                border-radius: 5px;
                                margin-bottom: 10px;
                                padding-top: 10px;'> 
                                Veuillez remplir les champs obligatoires !</p>";
                                    //  echo "<p style= 'color:red'> veuillez remplir les champs obligatoire! </p>";
                                }



    }
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription_connexion.css">
    <title>Connexion Admin</title>
</head>
<body>


<section class="section">
      <div class="box">
        <div class="form">
          <h2>Espace Formateur</h2>
        
          <form action="" method="POST">
            <div class="inputbox">
              <input type="text" name="email" placeholder="Email" />
              <img src="../CSS/assets/ID.png" />
            </div>
            <div class="inputbox">
              <input type="password" name="numero_dossier" placeholder="N Dossier" />
              <img src="../CSS/assets/verrouiller.png" />
            </div>
            <?php
            echo $erreur;
            ?>
            <div class="inputbox">
              <input type="submit" name="submit" value="Se connecter" />
            </div>
          </form>
          <p>
          </p>
        </div>
      </div>
    </section>
    
</body>
</html>