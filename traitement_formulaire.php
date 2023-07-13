<?php
// Connexion à la BDD
$host = 'localhost';
$dbname = 'siterencontre';
$username = 'root';
$password = ''; 

try {
    $connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// ---------------------------------------------------------------------------------

// Vérification formulaire soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération centre intérêt sélectionné
    $centreInteret = $_POST['centre_interet'];

    // Requête récupérer personnes même centre intérêt
    $query = "SELECT Nom, Prenom, Email, Pays_visite FROM Utilisateur WHERE Centre_interet = :centreInteret";
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(':centreInteret', $centreInteret);
    $stmt->execute();

// ---------------------------------------------------------------------------------   

    // Affichage résultats tableau avec bordures
    echo '<style>
            table {
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid black;
                padding: 8px;
            }
        </style>';


    echo ' <html>
               <head>
               <title>Formulaire de Centre dIntérêts</title>
  
               <!-- lien pour réseaux sociaux -->
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
             
                 <!-- Le site sadapte à la taille de lécran -->
                 <meta name="viewport" content="width=device-width, initial-scale=1.0">
             
                 <!-- Description du site web -->
                 <meta name="description" content="Site de rencontre entre voyage addicts">
             
                 <meta charset="UTF-8">
               
                 <!-- Mot clé du site -->
                 <meta name="keywords" content="Adopte un Globe-Trotter, site de rencontre, voyage, amitié, amour">
               
                 <!-- Fav icons -->
                 <link rel="icon" type="image/png" href="../image/avion2.png">
               
                 <!-- Balise de langage du site -->
                 <meta http-equiv="Content-Language" content="fr">
               
                 <!-- Balise dauteur -->
                 <meta name="author" content="Hallier Manon">
             
                 <!-- Style sheet de la page daccueil -->
               <link rel="stylesheet" type="text/css" href="../CSS/style-accueil-ok.css">
             
             </head>
             <body>

             <div id="header">
             <div id="logo">
               <img src="../image/logo-gif-unscreen.gif" alt="Logo" height="50">
             </div>
             <div id="navigation">
               <ul>
                 <li><a href="../PHP/accueil-site.html">Accueil</a></li>
                 <li><a href="../PHP/formulaire.php">Inscription</a></li>
                 <li><a href="../PHP/notre-promesse.html">Quelle est notre promesse ?</a></li>
               </ul>
             </div>
           </div>             

             </body>';

    echo '
            <h1>Vous êtes compatible avec ...</h1>
           <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>E-mail</th>
                <th>Pays visités</th>
            </tr>';
    
// ---------------------------------------------------------------------------------    

    // Affichage personne compatible via centre interet
    while ($row = $stmt->fetch()) {
        echo '<tr>';
        echo '<td>' . $row['Nom'] . '</td>';
        echo '<td>' . $row['Prenom'] . '</td>';
        echo '<td>' . $row['Email'] . '</td>';
        echo '<td>' . $row['Pays_visite'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';

    echo '
    
    <div id="footer">
    <!-- liens réseaux sociaux fictifs -->
  <div id="social-media-section">
    <ul>
      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
      <li><a href="#"><i class="fab fa-snapchat-ghost"></i></a></li>
    </ul>
  </div>
  <ul>
    <li><a href="../PHP/a-propos.html">À propos</a></li>
    <li><a href="../PHP/mentions-legales.html">Mentions légales</a></li>
  </ul>
</div>

</body>
</html>';
}
?>