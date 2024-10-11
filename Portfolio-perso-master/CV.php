<html>
    <head>
        <title>Portfolio Amélien Poncelet</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="app.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon//apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon//favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon//favicon-16x16.png">
        <link rel="manifest" href="favicon//site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
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
            <div style="z-index:-1;">
                <video autoplay="autoplay" loop="loop" muted="muted" class="fond">
                    <source src="black.mp4" type="video/mp4">
                </video>
            </div>
            <div class="presentation" style="z-index:2;">
                <h1 id="text-presentation" data-aos="zoom-in" style="font-weight: normal; font-size: 35px;">
                    <span style="font-size: 50px; font-weight: bold;">Amélien Poncelet</span> <br>
                    <br>Développeur web</h1>
            </div>
            <div style="display: flex; justify-content: center;">
                <a href="#apropos.html" style="text-decoration: none;">
                    <button  style="width: 120px;
                    height: 40px;
                    background-color: black;
                    color: white;
                    font-weight: bold;
                    border: 1px solid grey;
                    border-radius: 5px;
                    cursor: pointer;
                    transition: background-color 0.3s;
                    position: relative;
                    margin-top: -150px;" class="button">QUI SUIS-JE ?</button>
                </a>
            </div>
        </div>
        <center>
            <div>
                <img src="image/serpent.png" class="photobginsta" style="width: 20%; position: absolute; opacity: 10%;" data-aos="zoom-in">
                <div class="perso" id="apropos.html">
                    <h1 data-aos="zoom-in" class="persotitre">A propos de moi</h1>
                </div>
                <div>
                    <h2 class="monapropos" data-aos="zoom-in" style="font-weight: normal;">Passionné par le développement logiciel et les nouvelles technologies, <br>je suis 
                    actuellement en formation en BTS Services Informatiques aux Organisations, 
                    option SLAM. <br> Mon parcours me permet de maîtriser différentes technologies et langages de programmation, avec un fort intérêt pour la création de solutions 
                    logicielles adaptées aux besoins des entreprises.</h2>
                </div>
                <div class="photo-container1" style="margin-bottom: 50px;">
                    <img src="image/photobg.png" class="photobginsta" width="80%" data-aos="zoom-in" style="z-index: 1;">
                </div>
            </div>
        </center>
        <div style="height: 350px; background-color: #14191d;">
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
                    <a href="bts.php" style="text-decoration: none; color: white; font-size: 20px;">BTS SIO</a>
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