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
                <h3 id="inscription-title">Pour devenir stagiaire AFPA,<br> ça commence ici</h3>
                <img src="./img/icone/swords.svg" alt="swords" height="15%">
                <form autocomplete="on"class="inscription-form">
                <!--<form method="post" action="traitement.php">-->
                    <fieldset>
                        <legend>Devenir Stagiaire</legend>
                        
                        
                        <div class="inscription-info">
                            <div>Vous souhaitez intégrer l'une de nos <a href="#">formations</a>?<br> Ce questionnaire nous permettra d'en apprendre plus sur vous<br> et de vous envoyer des informations pertinentes.</div>
                            <hr>
                            <select id="formation" name="formation">
                                <option value="" disabled selected>Selectionner votre formation</option>
                                <option value="informatique">Informatique</option>
                                <option value="textile">Textile</option>
                                <option value="hotel">Hôtel</option>
                                <option value="vente">Vente et distribution</option>
                            </select>

                            <div class="input-group">
                                <input type="text" name="prénom" id="prénom" class="form-control" placeholder="Prénom" class="no_border" autofocus required>
                                <div class="input-group-btn">
                                  <button class="btn btn-default" type="submit">
                                    <i class="fa fa-id-card" aria-hidden="true"></i>
                                  </button>
                                </div>
                            </div>
                            
                            
                            <div class="input-group">
                                <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" class="no_border" autofocus required>
                                <div class="input-group-btn">
                                  <button class="btn btn-default" type="submit">
                                    <i class="fa fa-id-card" aria-hidden="true"></i>
                                  </button>
                                </div>
                            </div>
                            

                            <div class="input-group">
                                <input type="text" name="mail" id="mail" class="form-control" placeholder="Mail" class="no_border" autofocus required>
                                <div class="input-group-btn">
                                  <button class="btn btn-default" type="submit">
                                    <i class="fas fa-envelope"></i>
                                  </button>
                                </div>
                            </div>
                            
                            <div class="input-group">
                              <input type="password" id="pwd" name="pwd" class="form-control no_border bottom-border" placeholder="Password" autofocus required>
                              <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                  <i class="fas fa-key"></i>
                                </button>
                              </div>
                            </div>
                            <div class="input-group">
                              <input type="password" id="confirmation" class="form-control no_border bottom-border" placeholder="Confirmation" autofocus required/>
                              <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                  <i class="fas fa-key"></i>
                                </button>
                              </div>
                            </div>


                            <div class="input-group">
                                <input type="text" name="tel" id="tel" class="form-control" placeholder="Téléphone" class="no_border" autofocus required>
                                <div class="input-group-btn">
                                  <button class="btn btn-default" type="submit">
                                    <i class="fas fa-phone"></i>
                                  </button>
                                </div>
                            </div>
                            <input type="date" id="birthday" name="birthday">

                            <div class="input-group text-left">
                              <input type="checkbox" id="conditions" name="conditions" value="Conditions" required>
                              <label for="conditions"> J'ai lu et j'accepte les <a href="#">Conditions Générales d'Utilisation</a> et la <a href="#">Politique de Protection des Données Personnelles</a>.</label><br>
                            </div>

                            
                            <input type="checkbox" id="offres" name="offres" value="Offres">
                            <label for="offres"> J'aimerais recevoir des offres de formations pertinentes de l'AFPA.</label><br>
                            <input type="submit" value="OK" />
                            <div>Vous avez déjà un compte? <a href="#">Connectez-vous.</a></div>
                        </div>

                        
                    </fieldset>
                    
                </form>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>