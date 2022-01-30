<?php $title = 'Contact'; ?>
<?php ob_start(); ?>

<!-- Contact -->
            <div class="container-fluid green-bg">
                <div class="row">
                    <div class="col-12">
                        
                        <h1 id="contact">Contact</h1>
                        
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6"> <!-- Info centre -->
                            
                                <H3>Nos coordonnées</H3>
                                <div class="card left">
                                    
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-map-marker-alt"></i>244 Route de Turin</li>
                                            <li>06300 Nice</li>
                                        </ul>
                                </div>
                                <H3>Votre formateur</H3>
                                <div class="card left">
                                    
                                        <ul class="list-unstyled">
                                            <li>Benoit Hézard</li>
                                            <li><i class="fas fa-phone"></i>04 93 27 63 00</li>
                                            <li><i class="fas fa-envelope"></i><a href="mailto: benoit.hezard@afpa.fr" target="_blank">benoit.hezard@afpa.fr</a></li>
                                        </ul>
                                </div>
                        </div>
                        <div class="col-12 col-lg-6">
            
                                <h3>Vos coordonnées</h3>
                                <form method="post" action="">
                                    <fieldset>
                                        
                    
                                        <div class="info_form">
                                            
                                            <label for="prénom" autofocus required><i class="fa fa-id-card" aria-hidden="true"></i>Nom Prénom :</label>
                                           
                                            <input type="text" name="prénom" id="prénom" placeholder="Ex: Elton John" class="no_border"/>
                                            <hr>
                                        
                                            
                                            <label for="email" required><i class="fas fa-envelope"></i>E-mail :</label>
                                            
                                            <input type="email" name="email" id="email" class="no_border"/>
                                            <hr>
            
                                            <label for="tel"><i class="fas fa-phone"></i>Téléphone :</label>
                                            
                                            <input type="tel" name="tel" id="tel" class="no_border"/>
                                            <hr>
            
                                            <label for="msg" required><i class="fa fa-comment" aria-hidden="true"></i>Votre message :</label>
                                            <textarea name="msg" id="msg"></textarea>
                                        
                                    
                                
                                            <input type="submit" value="Envoyer" />
                                        </div>
                                    </fieldset>
                                    
                                </form>
                            
                        </div>
                        
                    </div>
                </div>
            </div>

<?php
$content = ob_get_clean();
require('template.php'); 
?>