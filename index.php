
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mon Portfolio</title>
        <meta name="description" content="Venez nombreux">
        <link rel="Stylesheet" href="style.css">
    </head>
    <body>
        <header class="Taskbar">  
            <nav>
                <ul>
                    <li><a href="#formation">Formation</a></li>
                    <li><a href="#projet">Expérience</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <div class="SocNet">
                        <li><a href="https://www.linkedin.com/in/maxence-rosnoblet-7a7451228/"><img src="Image/linkedin.png" with="30" height="30"></a></li>
                    </div>
                </ul>
            </nav>  
        </header>
            <section class="presentation">
                <div class="bloc">
                    <h1>Bonjour je suis <bold class="important">Maxence</bold></h1>
                    <p>Etudiant en alternance en école d'ingénieur dans les systèmes embarqués</p> 
                    <ul>
                        <li>Haute-Savoie</li>
                        <li>maxence@rosnoblet.fr</li>
                        <li><a href="Document/ROSNOBLET MAXENCE CV Novembre 2022.pdf">CV</a></li>                   
                    </ul> 
                </div> 
            </section>
        <hr>
        <section id="formation">
            <h1>Formation</h1>
            <div class="bloc">         
                <h2 class="soustitre1">Ecole d'ingénieur Grenoble INP - ESISAR</h2>
                <a href="#"><img src="Image/ESISAR.webp" with="30" height="30"></a>
                <h3 class="soustitre2">Fillière Eléctronique, Informatique et système en Alternance</h3>
                <div class="lieu">ESISAR,Université Grenoble Alpes,Campus Valence Briffaut.</div>
                
                <div class="annee">
                    <bold class="important">année 2021-2022</bold>
                </div>                  
            </div>
            <div class="bloc">         
                <h2 class="soustitre1">DUT Genie Electrique et Informatique Industrielle (GEII)</h2>
                <a href="#"><img src="Image/IUT.png" with="30" height="30"></a>
                <h3 class="soustitre2">parcours Informatique</h3>
                <div class="lieu">IUT d'Annecy,Université Savoie Mont Blanc,Campus d'Annecy-le-Vieux.</div>
                <ul>
                    <li>Semestre 4</li>
                    <ul>
                        <li>Réalisation d'un jeu de plateau utilisant des badges RFID</li>
                    </ul>
                    <li>Semestre 3</li>
                    <ul>
                    <li>Réalisation d'une interface graphique de portique de station de ski</li>
                    <li>Affichage de diffèrent fractale complexe sur une cible temps réel </li>
                    </ul>
                    <li>Semestre 2</li>
                    <ul>
                        <li>Réalisation d'un thermomètre numérique</li>
                        <li>Réalisation de l'éclairage automatique d'un couloir</li>
                    </ul>
                    <li>Semestre 1</li>
                    <ul>
                        <li>Réalisation d'une Morpion en invite de commande</li>
                    </ul>
                </ul>
                <div class="annee">
                    <bold class="important">année 2021-2022</bold>
                </div>                  
            </div>
            <div class=bloc>
                <h2 class="soustitre1" >BACCALAUREAT Sciences et Technique de l'Industrie et du Developpement Durable (STI2D)</h2>
                <a href="#"><img src="Image/Stmich.webp" with="50" height="50"></a>
                <h3 class="soustitre2">option Système d'information et numérique</h3>
                <div class="lieu">Lycée Saint-Michel, Annecy.</div> 
                <div class="lieu">années 2019-2020</div>
                <ul> 
                <li>Baccalaureat</li>
                    <ul>
                        <li>
                        Réalisation d'une maquette de maison domotique,
                        <br>
                        Partie régulation de la température et gestion de la lumière de manière automatique et manuelle.
                        </li>
                    </ul>
                </ul>
                <div>Bac avec mention assez bien</div>
            </div>
        </section>
        <section id="projet">
            <hr>
            <h1>Expérience proffessionnel</h1>
            <div class="bloc">
                <h2 class="soustitre1">SOMFY</h2>
                <a href="#"><img src="Image/Somfy.webp" with="30" height="30"></a>
                <h3 class="soustitre2">Apprenti concepteur logiciel</h3>
                <div class="lieu">Cluses, Haute-Savoie.</div>
                <p>Réalisation d'un banc de test automatique</p>
            </div>
            <div class="bloc">
                <h2 class="soustitre1">Alpes DEIS</h2>
                <a href="#"><img src="Image/ADEIS.png" with="30" height="30"></a>
                <h3 class="soustitre2">Stagiaire technicien électronique</h3>
                <div class="lieu">Marigner, Haute-Savoie.</div>
                <p>Veille technologique sur les technologies de la géolocalisation par satellite, des réseaux cellulaires IoT et des serveurs cloud</p>
            </div>
            <hr>
        </section>
        <section class="contact">
            <h1>Me contacter</h1>
            <div class="blocform">
                <form action ="Connex.php" method="post" class="form-envoie">
                <div class="form-envoie">
                    <div class="flex-nom">
                        <div>
                            <label for="nom">Nom</label>
                            <br>
                            <INPUT type="text" name="nom" placeholder="Brique" required>
                        </div>
                        <div>
                            <label for="nom">Prenom</label>
                            <br>
                            <INPUT type="text" name="prenom" placeholder="Théo" required>
                        </div>
                        <div>
                            <label for="email">Adresse email</label>
                            <br>
                            <INPUT type="email" name="email" placeholder="monadresse@gmail.com" required>
                        </div>
                    </div>
                    </div>
                    <div class="form-envoie">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="auto" rows="8" placeholder="Bonjour, je vous contacte car...." required></textarea>
                    <label>
                    </div>
                    <div class="form-envoie">    
                    <input type="submit" name="Validation" value="Envoyer le message"/>
                    </div>
                </form>
            </div>
        </section>
        <footer>

        </footer>
    </body>
</html>
