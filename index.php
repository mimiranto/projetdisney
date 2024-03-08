<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/new-walt-disney-font" rel="stylesheet">
    <title>ACCUEIL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;          
            background-color: #101085;
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
            margin-right: 181px;
        }
 
        #inscription, #connexion {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        #inscription:hover{
            background-color: #1E90FF;
        }
 
        #connexion:hover{
            background-color: #1E90FF;
        }
 
        #contenu{
            display:flex;
            justify-content: space-between;
        }
        
        .container {
         max-width: 800px; /* Ajustez la largeur de votre conteneur selon vos besoins */
         text-align: center;
        }
        video{
            align-self: center; 
            width: 1100px;
            margin-left: 205px;
            margin-top: 90px;
            margin-bottom: 80px;
        }
        h1{
            font-family: 'New Walt Disney Font', sans-serif;                                
            font-size: 52px;
            margin: 0;
            text-align: center;
            position:relative;
            margin-block-end: -22px;
            margin-left: 490px;
            margin-top: 70px;
            margin-right: 521px;
            color: #cacadaf5;
        }
    </style>
</head>
<body>
 
    <nav> <!-- Balise de navigation -->
        <div id="contenu"> <!-- Conteneur de la barre de navigation -->
            <div> <!-- Première partie de la barre de navigation : logo -->
                <img class="logo" src="asset/Disney+_logo.jpg"> <!-- Logo -->
            </div>
            <div class='log'> <!-- Deuxième partie de la barre de navigation : liens d'inscription et de connexion -->
                <a href="./inscription.php" id="inscription">Inscription</a> <!-- Lien vers la page d'inscription -->
                <a href="./login.php" id="connexion">Connexion</a> <!-- Lien vers la page de connexion -->
            </div>
        </div>
    </nav>
    <h1>Venez Decouvrir Notre Parc</h1>
        <video controls autoplay muted>
            <source src="asset/disneyvideo.mp4" type="video/mp4">
        <!-- Ajoutez des sources supplémentaires ici pour la compatibilité avec d'autres formats -->
            Votre navigateur ne prend pas en charge la lecture de vidéos HTML5.
        </video> 

</body>
</html>