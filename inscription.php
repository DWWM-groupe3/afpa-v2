<?php $title = 'Inscription Afpa'; ?>

<?php ob_start(); ?>


  <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 id="inscription-title">Pour devenir stagiaire AFPA,<br> ça commence ici</h3>
                <img src="./img/icone/swords.svg" alt="swords" height="15%">
                <form autocomplete="on"class="inscription-form">
                <!--<form method="post" action="traitement.php">-->
                    <fieldset class="d-flex flex-column align-items-center">
                        <legend>Devenir Stagiaire</legend>
                        
                        
                        <div class="inscription-info">
                            <div>Vous souhaitez intégrer l'une de nos <a href="#">formations</a>?<br> Ce questionnaire nous permettra d'en apprendre plus sur vous<br> et de vous envoyer des informations pertinentes.</div>
                            
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

                            <div class="input-group">
                              <input type="checkbox" id="conditions" name="conditions" value="Conditions" required>
                              <label> J'ai lu et j'accepte les <a href="#">Conditions Générales d'Utilisation</a><br> et la <a href="#">Politique de Protection des Données Personnelles</a>.</label><br>
                            </div>

                            <input type="checkbox" id="offres" name="offres" value="Offres">
                            <label for="offres"> J'aimerais recevoir des offres de formations pertinentes de l'AFPA.</label><br>
                            <input type="submit" value="OK" />
                            <div>Vous avez déjà un compte? <a href="connexion.php">Connectez-vous.</a></div>
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