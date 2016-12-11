<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verify Your Email Address</h2>
        <div>
            Merci d'avoir créer votre compte Client sur ByCorsica.
            Veuillez s'il vous plait suivre le lien ci-dessous pour vérifier votre adresse mail :<br>
            {{ URL::to('user/activation/'. $token) }}<br/>
        </div>
    </body>
</html>