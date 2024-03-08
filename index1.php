<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/new-walt-disney-font" rel="stylesheet">
                
    <title>Bienvenue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;         
            background-color: #0f1e76; 
            background-position: center; 
            background-size: cover;
            background-attachment: fixed;
         
        }

        nav {
            background-color: #cacadaf5;
            color: white;
            padding: 15px;
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
            margin-left: 90px;
        }
        .log{
            margin-top: 13px;
            margin-right: 120px;
        }

        #inscription, #connexion {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.7s ease;
        }
        #connexion:hover{
            background-color: #1E90FF;
        }

        #contenu{
            display:flex;
            justify-content: space-between;
        }
        #container {
          display: flex;
          flex-wrap: wrap; 
          justify-content: center; 
          align-items: center; 
          margin-bottom: 100px;
        }
        #bloc1,#bloc2,#bloc3,#bloc4,#bloc5,#bloc6,#bloc7,#bloc8,#bloc9,#bloc10{
            background-color: #cacadaf5;
            height: 280px;
            width: 405px;
            bottom:0px;
            right:0px;
            margin: 10px;
            border-radius: 15px;
            box-shadow: 5px 5px 10px;
            transition: 5s;
            display: flex;
            transition: transform 0.3s ease;
            align-items: center;
            flex-direction:column;
        }
        #im1{
            height:22vh;
            width:20vw;
            display: flex;
            justify-content:center;
            border-radius: 8px;
           

        }
        #txt{
            font-family: 'New Walt Disney Font', sans-serif;                                
            font-size: 40px;
            margin: 0;
            color:#101085;
            text-align: center;
            position:relative;
            margin-block-end: -22px;
            margin-top: 10px;
        }
        #attraction{
            font-family: 'New Walt Disney Font', sans-serif;  
            color:#cacadaf5;
            text-align: center;
            font-size: 60px;
            margin-right: 353px;
            margin-left: 424px;
            margin-top: 80px;
        }
        #ajt{
            
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
         background-color:#cacadaf5;
        }
        input[type="checkbox"] {
            box-shadow: 5px 5px 10px;
        }
        #bloc1:hover {
         transform: scale(1.05);
        }
        #bloc2:hover {
         transform: scale(1.05);
        }
        #bloc3:hover {
         transform: scale(1.05);
        }
        #bloc4:hover {
         transform: scale(1.05);
        }
        #bloc5:hover {
         transform: scale(1.05);
        }
        #bloc6:hover {
         transform: scale(1.05);
        }
        #bloc7:hover {
         transform: scale(1.05);
        }
        #bloc8:hover {
         transform: scale(1.05);
        }
        #bloc9:hover {
         transform: scale(1.05);
        }
        #bloc10:hover {
         transform: scale(1.05);
        }
    </style>
</head>
<body>

    <nav>
        <div id="contenu">
            <div> 
                <img class="logo" src="asset/Disney+_logo.jpg"> <!-- Logo -->
            </div>
            <div class='log'>
                <a href="./traitement_liste.php" id="connexion">Favoris</a> <!-- Lien vers la page des favoris -->
                <a href="./index.php" id="connexion" >Deconnexion</a> <!-- Lien de déconnexion -->
            </div>
        </div>
       
    </nav>

    <h1 id="attraction">Choisissez Vos Attractions Favorites<h1>
    <br>    
    <div id="container">
        <div id="bloc1">
            <h1 id="txt">Hollywood Tower</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/holly.jpeg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php?route=1"> <!-- Formulaire pour ajouter aux favoris -->
                  <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc2">
            <h1 id="txt">Indiana Jones</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/jones.jpeg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php?route=2"> <!-- Formulaire pour ajouter aux favoris -->
           <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc3">
            <h1 id="txt">Manoir Hantée</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/maison.jpeg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php?route=3"> <!-- Formulaire pour ajouter aux favoris -->
             <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc4">
            <h1 id="txt">Flight force</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/iron.jpeg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php?route=4"> <!-- Formulaire pour ajouter aux favoris -->
            <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc5">
            <h1 id="txt">Buzz laser blast</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/buzz.jpeg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php?route=5"> <!-- Formulaire pour ajouter aux favoris -->
             <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc6">
            <h1 id="txt">Pirate des Caraïbes</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/pirate.jpg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php?route=6"> <!-- Formulaire pour ajouter aux favoris -->
            <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc7">
            <h1 id="txt">Big Thunder Mountain</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/mountain.jpg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php?route=7"> <!-- Formulaire pour ajouter aux favoris -->
             <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc8">
            <h1 id="txt">Its a Small World</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/word.jpg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php?route=8"> <!-- Formulaire pour ajouter aux favoris -->
             <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc9">
            <h1 id="txt">Star Tours</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/startour.jpg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php?route=9"> <!-- Formulaire pour ajouter aux favoris -->
             <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
    </div>
<!-- HTML !-->

</body>
</html>
