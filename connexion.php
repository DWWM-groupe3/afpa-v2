<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--Font awesome icons-->
    <script src="https://kit.fontawesome.com/eaf337826d.js" crossorigin="anonymous"></script>

    <!-- Style -->
    <link rel="stylesheet" href="main.css">

    <!-- JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
    <script src="main.js" defer></script>
</head>
<body>
  <!-- Header -->
  <?php include("nav.php"); ?>


  <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 id="connexion-title">Connexion</h3>
                <img src="./img/icone/swords.svg" alt="swords" height="15%">
                <form autocomplete="on"class="inscription-form">
                <!--<form method="post" action="traitement.php">-->
                    <fieldset>
                        <legend>Connectez-vous avec votre adresse mail :</legend>
                        
                        
                        <div class="inscription-info">
                            
                            <hr>
                            
                            <div id="erreur">
                                <p>Le formulaire comporte une erreur !</p>
                            </div>
                            <div class="input-group">
                                <input type="text" name="mail" id="mailCo" class="form-control no_border bottom-border infoCo" placeholder="Mail" autofocus required>
                                <div class="input-group-btn">
                                  <button class="btn btn-default" type="submit">
                                    <i class="fas fa-envelope"></i>
                                  </button>
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="password" id="pwdCo" name="pwd" class="form-control no_border bottom-border infoCo" placeholder="Password" autofocus required>
                                <div class="input-group-btn">
                                  <button class="btn btn-default" type="submit">
                                    <i class="fas fa-key"></i>
                                  </button>
                                </div>
                            </div>
                            
                            
                            <input type="submit" value="OK" />
                            <div>Vous n'avez pas encore de compte? <a href="inscription.php">Inscrivez-vous gratuitement.</a></div>
                        </div>

                        
                    </fieldset>
                    
                </form>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>