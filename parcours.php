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
                Mon parcours</h1>
        </div>
        <center>
            <hr style="border: none; height: 2px; background-color: black; width: 50%; margin-top: 20px;">
        </center>
        <div class="carousel-container">
            <button class="arrow arrow-left" onclick="scrollLeft()">&lt;</button>
            <div class="carousel-wrapper">
                <div class="carousel-content" id="carousel">
                    <a href="#sco.html" style="text-decoration: none;">  
                        <div class="optioncase">Parcours Scolaires</div>
                    </a>
                    <a href="#pro.html" style="text-decoration: none;">
                        <div class="optioncase">Parcours Professionnels</div>
                    </a>
                    <a href="#competence.html" style="text-decoration: none;">
                        <div class="optioncase">Compétences</div>
                    </a>
                </div>
            </div>
            <button class="arrow arrow-right" onclick="scrollRight()">&gt;</button>
        </div>
        <div>
            <center>
                <div class="presentation2" style="z-index:2; margin-top: 300px;" id="sco.html">
                    <h1 class="textpresentation2" data-aos="zoom-in">Parcours Scolaires</h1>
                </div>
                <hr style="border: none; height: 2px; background-color: black; width: 50%; margin-top: 20px;">
                <div style="margin-top: 100px;" class="optioncase2">
                    <h1 style="font-size: 30px; margin-top: 100px;"data-aos="zoom-in">IRIS - BTS : Services informatiques aux organisations (SIO)</h1>
                    <h2 style="margin-top: 50px; font-weight: normal; font-size: 20px;"data-aos="zoom-in">Septembre 2023 <br>- <br> En cours</h2>
                    <h1 style="font-size: 30px; margin-top: 100px;"data-aos="zoom-in">Supii Mecavenir - BTS : Conception en produit industriel (CPI)</h1>
                    <h2 style="margin-top: 50px; font-weight: normal; font-size: 20px;"data-aos="zoom-in">Septembre 2020 <br>- <br> Août 2022</h2>
                    <h1 style="font-size: 30px; margin-top: 100px;"data-aos="zoom-in">La Salle Saint Nicolas - Baccalauréat : <br>Sciences et technologies de l'industrie et du développement
                        durable (STI2D)</h1>
                    <h2 style="margin-top: 50px; font-weight: normal; font-size: 20px; margin-bottom: 50px;">Septembre 2017 <br>- <br> Août 2020</h2>
                </div>
                <div class="presentation2" style="margin-top: 200px;" id="pro.html">
                    <h1 class="textpresentation2" data-aos="zoom-in">Parcours Professionnels</h1>
                </div>
                <hr style="border: none; height: 2px; background-color: black; width: 50%; margin-top: 20px;">
                <div style="margin-top: 100px;" class="optioncase2">
                    <h1 style="font-size: 30px; margin-top: 100px;"data-aos="zoom-in">SCOR - Stage de 1ère année BTS SIO</h1>
                    <h2 style="margin-top: 50px; font-weight: normal; font-size: 20px;"data-aos="zoom-in">Mai 2024 <br>-<br> Juin 2024 <br> <br><br>
                        Migration de système d'exploitation pour optimiser la sécurité et la 
                        performance du poste de travail des utilisateurs. <br>
                        Supervision de la logistique et des systèmes informatiques pour la distribution de matériel informatique. </h2>
                    <h1 style="font-size: 30px; margin-top: 100px;"data-aos="zoom-in">Sodimate - Apprenti en conception 3D (Contrat d'apprentissage)</h1>
                    <h2 style="margin-top: 50px; font-weight: normal; font-size: 20px;"data-aos="zoom-in">Septembre 2020 <br>- <br> Août 2022 <br><br><br>
                        Utilisation experte de SolidWorks et Autocad pour la production de fichier 3D et plans 2D. <br>
                        Identification des contraintes de délais et de coûts pour élaborer les spécifications du projet. <br>
                    </h2>
                    <h1 style="font-size: 30px; margin-top: 100px;"data-aos="zoom-in">SCOR - Stage de seconde </h1>
                    <h2 style="margin-top: 50px; font-weight: normal; font-size: 20px; margin-bottom: 50px;">Mai 2017 <br>- <br> Juin 2020 <br><br><br>
                        Travail d'informaticien dans l'équipe d'information de Scor, réparation des ordinateurs, modification du système de réseau.
                    </h2>
                    <h1 style="font-size: 30px; margin-top: 100px;"data-aos="zoom-in">France Habitation - Stage de troisième</h1>
                    <h2 style="margin-top: 50px; font-weight: normal; font-size: 20px; margin-bottom: 50px;">Novembre 2016 <br>- <br> Décembre 2016 <br><br><br>
                        Travail informatique (site internet, modification de fichier) et découverte du site d'habitation.
                    </h2>
                </div>
                <div class="presentation2" style="margin-top: 200px;" id="competence.html">
                    <h1 class="textpresentation2" data-aos="zoom-in">Compétences</h1>
                </div>
                <hr style="border: none; height: 2px; background-color: black; width: 50%; margin-top: 20px;">
                <div>
                    <h1 style="margin-top: 100px; font-weight: bold; font-size: 40px;"data-aos="zoom-in">Langages</h1>
                </div>
                <hr style="border: none; height: 2px; background-color: black; width: 20%; margin-top: 20px;">
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">Anglais (B2) : 70%</h2>
                    <div class="progress-container" data-aos="zoom-in">
                        <div class="progress-bar" id="myBar"></div>
                    </div>
                </div>
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">Espagnol (A2) : 40%</h2>
                    <div class="progress-container1" data-aos="zoom-in">
                        <div class="progress-bar1" id="myBar"></div>
                    </div>
                </div>
                <div>
                    <h1 style="margin-top: 100px; font-weight: bold; font-size: 40px;"data-aos="zoom-in">Systèmes et réseaux</h1>
                </div>
                <hr style="border: none; height: 2px; background-color: black; width: 20%; margin-top: 20px;">
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">Cisco Packet Tracer : 70%</h2>
                    <div class="progress-container2" data-aos="zoom-in">
                        <div class="progress-bar2" id="myBar"></div>
                    </div>
                </div>
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">OS (Debian, Ubuntu) : 50%</h2>
                    <div class="progress-container3" data-aos="zoom-in">
                        <div class="progress-bar3" id="myBar"></div>
                    </div>
                </div>
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">Apache : 60%</h2>
                    <div class="progress-container4" data-aos="zoom-in">
                        <div class="progress-bar4" id="myBar"></div>
                    </div>
                </div>
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">Service DHCP, DNS et Linux : 60%</h2>
                    <div class="progress-container4" data-aos="zoom-in">
                        <div class="progress-bar4" id="myBar"></div>
                    </div>
                </div>
                <div>
                    <h1 style="margin-top: 100px; font-weight: bold; font-size: 40px;"data-aos="zoom-in">Développement</h1>
                </div>
                <hr style="border: none; height: 2px; background-color: black; width: 20%; margin-top: 20px;">
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">HTML, CSS : 95%</h2>
                    <div class="progress-container5" data-aos="zoom-in">
                        <div class="progress-bar5" id="myBar"></div>
                    </div>
                </div>
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">PHP : 70%</h2>
                    <div class="progress-container6" data-aos="zoom-in">
                        <div class="progress-bar6" id="myBar"></div>
                    </div>
                </div>
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">Javascript : 40%</h2>
                    <div class="progress-container7" data-aos="zoom-in">
                        <div class="progress-bar7" id="myBar"></div>
                    </div>
                </div>
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">Bootstrap : 90%</h2>
                    <div class="progress-container8" data-aos="zoom-in">
                        <div class="progress-bar8" id="myBar"></div>
                    </div>
                </div>
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">Base de donnée SQL : 80%</h2>
                    <div class="progress-container9" data-aos="zoom-in">
                        <div class="progress-bar9" id="myBar"></div>
                    </div>
                </div>
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">Wordpress : 70%</h2>
                    <div class="progress-container6" data-aos="zoom-in">
                        <div class="progress-bar6" id="myBar"></div>
                    </div>
                </div>
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">Github : 70%</h2>
                    <div class="progress-container6" data-aos="zoom-in">
                        <div class="progress-bar6" id="myBar"></div>
                    </div>
                </div>
                <div>
                    <h1 style="margin-top: 100px; font-weight: bold; font-size: 40px;"data-aos="zoom-in">Gestion de Projet</h1>
                </div>
                <hr style="border: none; height: 2px; background-color: black; width: 20%; margin-top: 20px;">
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">Pack Office : 90%</h2>
                    <div class="progress-container10" data-aos="zoom-in">
                        <div class="progress-bar10" id="myBar"></div>
                    </div>
                </div>
                <div>
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">Trello : 90%</h2>
                    <div class="progress-container10" data-aos="zoom-in">
                        <div class="progress-bar10" id="myBar"></div>
                    </div>
                </div>
                <div style="margin-bottom: 200px;">
                    <h2 style="margin-top: 50px; margin-bottom: 10px; font-weight: normal;" data-aos="zoom-in">Canva : 90%</h2>
                    <div class="progress-container10" data-aos="zoom-in">
                        <div class="progress-bar10" id="myBar"></div>
                    </div>
                </div>
            </center>
        </div>
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
                    <a href="CV.php" style="text-decoration: none; color: white; font-size: 20px;">Accueil</a>
                    <a href="bts.php" style="text-decoration: none; color: white; font-size: 20px; margin-top: 20px;">BTS SIO</a>
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