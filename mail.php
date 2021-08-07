<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>Envoi d 'un message par formulaire</title>
    </head>

    <body>
        <?php
            $retour=mail('kouraichiahmed2@gmail.com','Envoi sepuis la page contact')
            if ($retour){
                echo'<p>Votre message a bien envoi".</p>

            }
    </body>
    ?>
