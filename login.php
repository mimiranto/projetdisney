<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href='./login.css'>
    <title>Login</title>
</head>
<body>
<section class="signup"> <!-- Début de la section de connexion -->
    <div class="container"> <!-- Conteneur principal -->
        <div class="signup-content"> <!-- Contenu de la connexion -->
            <div class="signup-form"> <!-- Formulaire de connexion -->
                <h2 class="form-title">Connexion</h2> <!-- Titre du formulaire -->
                <form method="POST" class="register-form" id="register-form" action='./traitement_login.php'> <!-- Formulaire de méthode POST avec action vers un fichier de traitement -->
                    <div class="form-group"> <!-- Groupe de formulaire pour l'identifiant -->
                        <label for="id"><i class="zmdi zmdi-email"></i></label> <!-- Icône et label pour l'identifiant -->
                        <input type="id" name="id" id="id" placeholder="Identifiant" required> <!-- Champ de texte pour l'identifiant -->
                    </div>
                    <div class="form-group"> <!-- Groupe de formulaire pour le mot de passe -->
                        <label for="mdp"><i class="zmdi zmdi-lock"></i></label> <!-- Icône et label pour le mot de passe -->
                        <input type="password" name="mdp" id="mdp" placeholder="Mot de Passe" required> <!-- Champ de texte pour le mot de passe -->
                    </div>
                    <div class="form-group form-button"> <!-- Groupe de formulaire pour le bouton de soumission -->
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Connexion"/> <!-- Bouton de soumission du formulaire -->
                    </div>
                </form>
            </div>
            <div class="signup-image"> <!-- Image de la connexion -->
                <figure><a href='./index.php'><img src="asset/disneyland.png" alt="sing up image"></a></figure> <!-- Image associée à la connexion -->
                <a href="./inscription.php" class="signup-image-link">Inscription</a> <!-- Lien vers la page d'inscription -->
            </div>
        </div>
    </div>
</section> <!-- Fin de la section de connexion -->

</body>
</html>