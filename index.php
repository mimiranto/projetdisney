<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCUEIL</title>
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
            background-color: rgb(255,255,255,0.7);
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
 
   <h3>
 
 
</body>
</html>