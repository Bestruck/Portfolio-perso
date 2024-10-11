<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['tel']; // Assure-toi que le nom du champ correspond
    $message = $_POST['message'];

    // L'adresse e-mail où tu souhaites recevoir le message
    $to = 'amelien.poncelet1@gmail.com'; // Remplace par ton adresse e-mail
    $subject = 'Nouveau message de contact';

    // Contenu de l'e-mail
    $body = "Prénom: $prenom\nNom: $nom\nEmail: $email\nTéléphone: $telephone\nMessage: $message";
    
    // En-têtes de l'e-mail
    $headers = "From: $email\r\n" . // L'adresse de l'expéditeur
               "Reply-To: $email\r\n" . // L'adresse pour répondre
               "X-Mailer: PHP/" . phpversion();

    // Envoie l'e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès!";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }

    // Insertion dans la base de données (si nécessaire)
    // Assure-toi que tu as bien établi la connexion à la base de données
    $requete = $bdd->query("INSERT INTO users(nom,prenom,email,telephone,message)
                            VALUES('$nom','$prenom','$email','$telephone','$message')");
}
?>





<html>
    <head>
        <title>Portfolio Amélien Poncelet</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="app.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <div style="display: flex; justify-content: center;">
            <div class="header" style="position: absolute; width: 400px;
                height: 50px;
                background-color: lightgray;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 20px;
                color: black;
                border: 1px solid black;
                box-sizing: border-box;
                clip-path: polygon(0% 0%, 100% 0%, 90% 100%, 10% 100%);">
                <h1 style="font-size: 25px;" data-aos="zoom-in" >Portfolio Amélien Poncelet</h1>
            </div>
        </div>
        <div class="invisible textback" id="backdropb">
            <div style="z-index:2;">
                <nav class="invisible" id="menu">
                    <div>
                        <ul class="menu-style">
                            <li>
                                <a href="CV.php">Accueil</a>
                            </li>
                            <li>
                                <a href="bts.php">BTS SIO</a>
                            </li>
                            <li>
                                <a href="parcours.php">Parcours</a>
                            </li>
                            <li>
                                <a href="projet.php">Projets</a>
                            </li>
                            <li>
                                <a href="veilletechno.php">Veille technologique</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
        <div style="z-index:0;">
            <nav>
                <ul>
                    <li>
                        <a class="accueil" href="CV.html"></a>
                        <div class="logoajust">
                            <div class="logo-acc" style="z-index:1;">
                                <h1><img
                                    src="logoaccueil1.png"
                                    width="85px"
                                    class="Logoaccueil"
                                    alt="Image à cliquer"
                                    id="logoaccueilblanc"/></h1>
                            </div>
                            <div class="logo-rubix" style="z-index:2;">
                                <button class="image-button" id="bouton">
                                    <img src="rubixcube 1.png" width="110px" class="rubixcube" id="rubixcube-menu"/>
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>        
        </div>
        <div class="presentation2" style="z-index:2;">
            <h1 class="textpresentation2" data-aos="zoom-in">
                Contactez-moi</h1>
        </div>
        <center>
            <hr style="border: none; height: 2px; background-color: black; width: 50%; margin-top: 20px;">
            <div class="contact-form" data-aos="zoom-in">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label>Prénom :</label>
                        <input type="text" id="prenom" name="prenom" required>
                    </div>
                    <div class="form-group">
                        <label>Nom :</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Téléphone :</label>
                        <input type="tel" id="tel" name="tel" required>
                    </div>
                    <div class="form-group">
                        <label>Message :</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="boutonformulaire">Envoyer</button>
                </form>
            </div>
        </center>
        <div style="height: 350px; background-color: #14191d; margin-top: 200px;">
            <div style="display: flex; justify-content: center;">
                <a href="contact.php" style="text-decoration: none;">
                    <button  style="width: 150px;
                    height: 40px;
                    background-color: white;
                    color: #14191d;
                    font-weight: bold;
                    border: 1px solid grey;
                    border-radius: 5px;
                    cursor: pointer;
                    transition: background-color 0.3s;
                    position: relative;
                    margin-top: 100px;" class="button">CONTACTEZ-MOI</button>
                </a>
            </div>
            <div style="position: absolute; margin-left: 10%; display: flex; align-items: center; margin-top: -120px;">
                <img src="favicon/apple-touch-icon.png" width="70px" data-aos="zoom-in">
                <div style="width: 1px; background-color: white; height: 250px; margin-left: 10px; margin-right: 10px; margin-top: 50px;"></div>
                <div style="display: flex; flex-direction: column; margin-top: 50px;">
                    <a href="CV.php" style="text-decoration: none; color: white; font-size: 20px;">Accueil</a>
                    <a href="bts.php" style="text-decoration: none; color: white; font-size: 20px; margin-top: 20px;">BTS SIO</a>
                    <a href="parcours.php" style="text-decoration: none; color: white; font-size: 20px; margin-top: 20px;">Parcours</a>
                    <a href="projet.php" style="text-decoration: none; color: white; font-size: 20px; margin-top: 20px;">Projets</a>
                    <a href="veilletechno.php" style="text-decoration: none; color: white; font-size: 20px; margin-top: 20px;">Veille Technologique</a>
                </div>
            </div>
            <div style="display: flex; justify-content: center; margin-top: 70px;">
                <a href="https://github.com/Bestruck?tab=repositories" target= "_blank";>
                    <img src="image/github.png" width="90px" data-aos="zoom-in" style="margin-right: 60px;">
                </a>
                <a href="https://www.linkedin.com/in/am%C3%A9lien-poncelet-95a781279/" target= "_blank">
                    <img src="image/linkedin.png" width="90px" data-aos="zoom-in">
                </a>
            </div>
        </div>
        <script src="CV.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>

