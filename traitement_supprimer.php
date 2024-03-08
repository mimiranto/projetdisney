<?php
if (isset($_GET['route'])&& isset($_POST['action'])) { // Vérifie si les données 'nom' et 'action' sont envoyées via POST
    
    if($_POST['action'] == 'Supprimer') { // Vérifie si l'action est de supprimer une attraction
        $index1 = null; // Initialise l'indice de l'attraction à null
 
        $file = fopen('fav.csv', 'r'); // Ouvre le fichier CSV des favoris en mode lecture
        while (($data = fgetcsv($file)) !== false) { // Parcours du fichier CSV des favoris
            $tab1[] = $data; // Stocke chaque ligne dans un tableau
        }
        fclose($file) ; // Ferme le fichier des favoris
        foreach ($tab1 as $key => $value) { // Parcours du tableau des favoris
            if($value[1] == $_GET['route']){ // Vérifie si l'ID de l'attraction correspond à celui envoyé via POST
              $index1 = $key  ;                  
            }     
        }
        if($index1 !== null) { // Vérifie si l'indice de l'attraction à supprimer a été trouvé
        unset($tab1[$index1]); // Supprime l'attraction du tableau des favoris
        }
 
    $file_b = fopen('fav.csv', 'w'); // Ouvrir un fichier en mode écriture
 
    foreach ($tab1 as $row) { // Parcours du tableau des favoris
        fputcsv($file_b, $row); // Écrire une ligne dans le fichier CSV
    }
 
        fclose($file_b); // Fermer le fichier
   
        
        }
        header('Location: ./traitement_liste.php'); // Redirection vers la page actuelle

    }


    
    ?>