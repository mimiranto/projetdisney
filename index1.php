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
            background-image: url('asset/disney.jpg'); 
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
        }
        .log{
            margin-top: 13px;
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
          margin-top: 7px;
          margin-bottom: 100px;
        }
        #bloc1,#bloc2,#bloc3,#bloc4,#bloc5,#bloc6,#bloc7,#bloc8,#bloc9,#bloc10{
            background-color: #cacadade;
            height: 280px;
            width: 475px;
            bottom:0px;
            right:0px;
            margin: 5px;
            box-shadow: 5px 5px 10px;
            transition: 5s;
            display: flex;
           
            align-items: center;
            flex-direction:column;
        }
        #im1{
            height:22vh;
            width:20vw;
            display: flex;
            justify-content:center;
            
           

        }
        #txt{
            font-family: 'New Walt Disney Font', sans-serif;                                
            font-size: 40px;
            margin: 0;
            text-align: center;
            position:relative;
            margin-block-end: -22px;
            margin-top: 10px;
        }
        #attraction{
            font-family: 'New Walt Disney Font', sans-serif;  
            text-align: center;
            font-size: 60px;
            box-shadow: 5px 5px 10px;
            background-color: #cacadaf5;
            margin-right: 353px;
            margin-left: 424px;
            margin-top: 70px;
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
        }
        input[type="checkbox"] {
            box-shadow: 5px 5px 10px;
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

    <h1 id="attraction">Choisissez Vos Attraction Favorites<h1>
    <br>    
    <div id="container">
        <div id="bloc1">
            <h1 id="txt">Hollywood Tower</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/holly.jpeg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php"> <!-- Formulaire pour ajouter aux favoris -->
            <input type="checkbox" name="nom" value="1"> <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc2">
            <h1 id="txt">Indiana Jones</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/jones.jpeg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php"> <!-- Formulaire pour ajouter aux favoris -->
            <input type="checkbox" name="nom" value="2"> <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc3">
            <h1 id="txt">Manoir Hantée</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/maison.jpeg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php"> <!-- Formulaire pour ajouter aux favoris -->
            <input type="checkbox" name="nom" value="3"> <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc4">
            <h1 id="txt">Flight force</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/iron.jpeg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php"> <!-- Formulaire pour ajouter aux favoris -->
            <input type="checkbox" name="nom" value="4"> <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc5">
            <h1 id="txt">Buzz laser blast</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/buzz.jpeg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php"> <!-- Formulaire pour ajouter aux favoris -->
            <input type="checkbox" name="nom" value="5"> <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc6">
            <h1 id="txt">Pirate des Caraïbes</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/pirate.jpg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php"> <!-- Formulaire pour ajouter aux favoris -->
            <input type="checkbox" name="nom" value="6"> <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc7">
            <h1 id="txt">Big Thunder Mountain</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/mountain.jpg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php"> <!-- Formulaire pour ajouter aux favoris -->
            <input type="checkbox" name="nom" value="7"> <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc8">
            <h1 id="txt">Its a Small World</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/word.jpg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php"> <!-- Formulaire pour ajouter aux favoris -->
            <input type="checkbox" name="nom" value="8"> <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
        <div id="bloc9">
            <h1 id="txt">Star Tours</h1> <!-- Titre du bloc -->
            <br>
            <img id="im1" src="asset/startour.jpg"> <!-- Image de l'attraction -->
        <form method="post" action="traitement_fav.php"> <!-- Formulaire pour ajouter aux favoris -->
            <input type="checkbox" name="nom" value="9"> <!-- Case à cocher pour l'ajout aux favoris -->
            <input type="submit" name="action" id='ajt' value="Ajouter aux favoris"> <!-- Bouton pour ajouter aux favoris -->
        </form>
        </div>
    </div>
<!-- HTML !-->

</body>
</html>