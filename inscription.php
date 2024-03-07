<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href='./inscription.css'>
    <title>Inscription</title>
</head>
<body>
<section class="signup"> <!-- Début de la section d'inscription -->
    <div class="container"> <!-- Conteneur principal -->
        <div class="signup-content"> <!-- Contenu de l'inscription -->
            <div class="signup-form"> <!-- Formulaire d'inscription -->
                <h2 class="form-title">Inscription</h2> <!-- Titre du formulaire -->
                <form method="POST" class="register-form" id="register-form" action='./traitement_inscription.php'> <!-- Formulaire de méthode POST avec action vers un fichier de traitement -->
                    <div class="form-group"> <!-- Groupe de formulaire pour le mail -->
                        <label for="mail"><i class="zmdi zmdi-account material-icons-name"></i></label> <!-- Icône et label pour le mail -->
                        <input type="email" name="mail" id="mail" placeholder="Mail" required> <!-- Champ de texte pour le mail-->
                    </div>
                    <div class="form-group"> <!-- Groupe de formulaire pour le prénom -->
                        <label for="prenom"><i class="zmdi zmdi-account material-icons-name"></i></label> <!-- Icône et label pour le prénom -->
                        <input type="text" name="prenom" id="prenom" placeholder="Prénom" required> <!-- Champ de texte pour le prénom -->
                    </div>
                    <div class="form-group"> <!-- Groupe de formulaire pour le nom -->
                        <label for="nom"><i class="zmdi zmdi-email"></i></label> <!-- Icône et label pour le nom -->
                        <input type="texte" name="nom" id="nom" placeholder="Nom" required> <!-- Champ de texte pour le nom -->
                    </div>
                    <div class="form-group"> <!-- Groupe de formulaire pour l'identifiant -->
                        <label for="id"><i class="zmdi zmdi-lock"></i></label> <!-- Icône et label pour l'identifiant -->
                        <input type="id" name="id" id="id" placeholder="Identifiant" required> <!-- Champ de texte pour l'identifiant -->
                    </div>
                    <div class="form-group"> <!-- Groupe de formulaire pour le mot de passe -->
                        <label for="mdp"><i class="zmdi zmdi-lock-outline"></i></label> <!-- Icône et label pour le mot de passe -->
                        <input type="password" name="mdp" id="mdp" placeholder="Mot de Passe"/> <!-- Champ de texte pour le mot de passe -->
                    </div>
                    <div class="form-group form-button"> <!-- Groupe de formulaire pour le bouton de soumission -->
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Je m'inscris"/> <!-- Bouton de soumission du formulaire -->
                    </div>
                </form>
            </div>
            <div class="signup-image"> <!-- Image de l'inscription -->
                <figure><a href='./index.php'><img src="asset/disneyland.png" alt="sing up image"></a></figure> <!-- Image associée à l'inscription -->
                <a href="./login.php" class="signup-image-link">Connexion</a> <!-- Lien vers la page de connexion -->
            </div>
        </div>
    </div>
</section> <!-- Fin de la section d'inscription -->

</body>
</html>