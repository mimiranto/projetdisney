<?php
print_r($_GET);
session_start(); // Démarre la session PHP pour pouvoir utiliser les variables de session

if (isset($_GET['route']) && isset($_POST['action']) && isset($_SESSION['id_user'])) { // Vérifie si les données 'nom' et 'action' sont envoyées via POST et si la session utilisateur est active
    $user = $_SESSION['id_user']; // Stocke l'ID de l'utilisateur actuel dans la variable $user
    $file_name = 'fav.csv'; // Définit le nom du fichier de favoris

    $file = fopen($file_name, 'a'); // Ouvre le fichier en mode "ajout" 

    if (filesize($file_name) == 0) { // Vérifie si le fichier est vide
        fputcsv($file, ['id_user', 'id', 'nom', 'image', 'description']); // Écrit une ligne d'en-tête CSV si le fichier est vide
    }
    fclose($file); // Ferme le fichier

    $file_a = fopen('attraction.csv', 'r'); // Ouvre le fichier des attractions en mode lecture
    while (($row = fgetcsv($file_a, 0, ';')) !== false) { // Parcourt le fichier CSV des attractions
        $tab[] = $row; // Stocke chaque ligne dans un tableau
    }
    fclose($file_a); // Ferme le fichier des attractions

    if ($_POST['action'] == 'Ajouter aux favoris') { // Vérifie si l'action est d'ajouter une attraction aux favoris
        $file = fopen('fav.csv', 'a+'); // Ouvre à nouveau le fichier des favoris en mode lecture et écriture

        while (($data = fgetcsv($file)) !== false) { // Parcourt le fichier CSV des favoris
            $tab1[] = $data; // Stocke chaque ligne dans un tableau
        }

        $index1 = null; // Initialise l'indice de l'attraction à null
        foreach ($tab as $key => $value) { // Parcourt le tableau des attractions
            if ($value[0] == $_GET['route']) { // Vérifie si le nom de l'attraction correspond à celui envoyé via POST
                $index1 = $key; // Stocke l'indice de l'attraction correspondante
            }
        }

        if ($index1 !== null) { // Vérifie si l'indice de l'attraction a été trouvé
            $elementExiste = false;
            foreach ($tab1 as $row) {
               if (  $row[0] == $user && $row[1] == $tab[$index1][0]) {
                   $elementExiste = true;
                   break;
               }
           }
            if (!$elementExiste){
                fputcsv($file, array_merge([$user], $tab[$index1]));
               
            }
            } // Logique pour vérifier et ajouter l'attraction aux favoris
        }

        fclose($file); // Ferme le fichier des favoris
    }
    header('location: ./index1.php'); // Redirige vers la page 'index1.php' une fois l'opération terminée

?>
