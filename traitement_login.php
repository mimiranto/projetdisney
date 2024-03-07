<?php
// Démarrage de la session
session_start();
$_SESSION['id_user']=$_POST['id'];

// Vérification de l'existence des données envoyées via la méthode POST
if (isset($_POST['id']) && isset($_POST['mdp'])) {
    // Nom du fichier CSV
    $file_name = 'user.csv';

    // Ouverture du fichier en mode lecture ('r')
    $file = fopen($file_name, 'r');

    // Vérification si le fichier a été ouvert avec succès
    if ($file) {
        // Parcours du fichier ligne par ligne
        while (($line = fgetcsv($file)) !== false) {
            // Vérification de l'identifiant dans la ligne courante
            if ($line[2] === $_POST['id']) {
                // Vérification du mot de passe dans la ligne courante
                if ($_POST['mdp'] === $line[3]) {
                    // Fermeture du fichier
                    fclose($file);
                    // Redirection vers une page externe vers la page après la connexion
                    header('Location: ./index1.php');
                    exit(); // Arrêt de l'exécution du script après la redirection
                }
            }
        }
        // Inclusion du fichier login.php en cas d'identifiant incorrect
        include ('./login.php');
        // Fermeture du fichier
        fclose($file);
    }
}
?>
