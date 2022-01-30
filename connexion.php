<?php $title = 'Connexion'; ?>
<?php ob_start(); ?>


  <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 id="connexion-title">Connexion</h3>
                <img src="./img/icone/swords.svg" alt="swords" height="15%">
                <form autocomplete="on" class="inscription-form">
                <!--<form method="post" action="traitement.php">-->
                    <fieldset class="d-flex flex-column align-items-center">
                        <legend>Connectez-vous avec votre adresse mail :</legend>
                        
                        
                        <div class="inscription-info">
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

<?php 

$content = ob_get_clean();

require('template.php'); 

?>