<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="style.css" media="screen">
        <title>Espace Graphiste</title>
    </head>
    <body>
        
       <?php
        include("menu.php");
        ?>
        <content>
        <div class="contact">
                <div class="mailright"> 

                    <h1>Contact</h1>
                    <p>Plus d'info? Un devis gratuit?<br><br>Décrivez-nous vos attentes par e-mail, par téléphone ou directement par le biais de se formulaire, nous pourrons ensuite en discuter ensemble.</p>
                    <div class="mail"><a href="mailto:espacegraphiste@outlook.com">espacegraphiste@outlook.com</a></div>
                    <div class="gsm">+32 (0)479 39 67 97</div>
                </div>
                <div class="box">
                    <?php
                    if(array_key_exists('errors', $_SESSION)):
                    ?>
                    <div class="alert alert-danger">
                        <?= implode('<br>', $_SESSION['errors']); ?>
                    </div>
                   

                    <?php unset($_SESSION['errors']);endif; ?>
                    <?php
                    if(array_key_exists('success', $_SESSION)):
                    ?>
                    <div class="alert alert-success">
                        Votre message a bien été envoyé.
                    </div>

                    <?php endif; ?>

                    <form method="POST" action="post_contact.php">

                        <label for="nom"></label>
                        <input type="text" id="nom" class="form-control" name="nom" placeholder="Nom" required="required" autocomplete="autocomplete" value="<?= isset($_SESSION['inputs']['nom']) ? $_SESSION['inputs']['nom']:''; ?>">
                        <br>

                        <label for="email"></label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Adresse e-mail" required="required" autocomplete="autocomplete" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email']:''; ?>">
                        <br>

                        <label for="message"></label>
                        <textarea required id="message" name="message" class="form-control" placeholder="Message"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message']:''; ?></textarea>
                        <br>

                        <input type="submit" value="Envoyer" class="form-control">

                    </form>
                        
                </div>
            </div>

       </content>
       
       
       
       
      
      <br><br><br>
       <?php
        unset($_SESSION['inputs']);
        unset($_SESSION['success']);
        unset($_SESSION['errors']);
        ?>
        
        <br><br><br><br>
        <?php
        include("footer.php");
        ?>
        
    </body>
</html>