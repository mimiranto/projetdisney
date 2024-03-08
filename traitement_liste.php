<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://fonts.cdnfonts.com/css/new-walt-disney-font" rel="stylesheet"> 
    <title>Attractions Favorites</title> <!-- Titre de la page -->
    <style>
        body{
            background-color:#101085;
        }
        h1{
            font-size: 70px;
            margin-top: 80px;
            margin-bottom: 89px;

         font-family: 'New Walt Disney Font', sans-serif; 
         text-align: center;
         color:#cacadaf5;
        }
    form{
        display: flex;
        justify-content: space-between;
        margin: 1%;
        padding: 1%;
        border: solid 2px black;
        width: 85%;
        margin-left: 100px;
        border-radius: 15px;
        background-color:#cacadaf5;
        box-shadow: 5px 5px 10px;
        transition: transform 0.3s ease;
    }
    form:hover {
         transform: scale(1.05);
        }
    form img {
     width: 30%;
     height: 260px;
     border-radius: 15px;
    }
    form p{
     font-size: 80px;
     font-family: 'New Walt Disney Font', sans-serif; 
     color:#101085;
    }
    #sup input{
     
    }
    nav {
     background-color: rgb(255,255,255,0.7);
     color: white;
     padding: 15px;
     margin: -7px
    }
    nav a {
     color: white;
     text-decoration: none;
     margin: 0 15px;
     text-align: right;
    }
    nav img{
     width:100px;
     text-align: center;
     margin-left: 73px;
    }
    #contenu{
     display:flex;
     justify-content: space-between;
    }
    .supp{
        display:flex;
    }
    #sup{
            
            font-family: "Open Sans", sans-serif;
            font-size: 9px;
            letter-spacing: 2px;
            text-decoration: none;
            text-transform: uppercase;
            cursor: pointer;
            border: 3px solid;
            padding: 0.25em 0.5em;
            box-shadow: 5px 5px 10px;
            position: relative;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            height: 23px;
            margin-top: 118px;
            margin-right: 19px;
        }
        
    </style>
</head>
<body>   
    <nav>
        <div id="contenu">
            <div>
               <a href="./index1.php"><img class="logo" src="asset/Disney+_logo.jpg "></a> <!-- Logo et lien vers la page d'accueil -->
            </div>
        </div>      
    </nav>
    <h1>Attraction Favorites</h1> <!-- Titre de la page -->

   <div class ='container'>
    <?php
    session_start(); // Démarre une session PHP

    $file=fopen("fav.csv","r"); // Ouvre le fichier CSV des favoris en mode lecture

    while(($data=fgetcsv($file))!==false){ // Parcours du fichier CSV des favoris
        while(($line = fgetcsv($file)) !== false) { // Lecture de chaque ligne du fichier
            if($line[0] == $_SESSION['id_user']){ ?>  <!-- Vérifie si l'ID de l'utilisateur correspond à celui stocké en session -->
           <form action="" method="post"> <!-- Formulaire pour supprimer une attraction -->
            <img src="<?php echo $line[3] ?>" alt="img"> <!-- Affichage de l'image de l'attraction -->
            <p><?php echo $line[2] ?><p> <!-- Affichage du nom de l'attraction -->
            <div class='supp'>
             <input type="checkbox" name="nom" value="<?php echo $line[0]?>"> <!-- Case à cocher avec l'ID de l'attraction -->
             <input type="submit" name="action" id='sup' value="Supprimer"> <!-- Bouton de suppression -->
            </div> 
        </form>
         
            <?php
        }}
    }  

fclose($file); // Ferme le fichier CSV des favoris

if (isset($_POST['nom'])&& isset($_POST['action'])) { // Vérifie si les données 'nom' et 'action' sont envoyées via POST
    
    if($_POST['action'] == 'Supprimer') { // Vérifie si l'action est de supprimer une attraction
        $index1 = null; // Initialise l'indice de l'attraction à null
 
        $file = fopen('fav.csv', 'r'); // Ouvre le fichier CSV des favoris en mode lecture
        while (($data = fgetcsv($file)) !== false) { // Parcours du fichier CSV des favoris
            $tab1[] = $data; // Stocke chaque ligne dans un tableau
        }
        fclose($file) ; // Ferme le fichier des favoris
        foreach ($tab1 as $key => $value) { // Parcours du tableau des favoris
            if($value[0] == $_POST['nom']){ // Vérifie si l'ID de l'attraction correspond à celui envoyé via POST
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
        header('location: ./traitement_liste.php'); // Redirection vers la page actuelle
    }

    
    ?>
    </div>
</body>
</html>
