<!Doctype html>
<!--Soan Morey-->
<html lang="fr">

<head>
    <link rel="apple-touch-icon" sizes="57x57" HREF="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" HREF="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" HREF="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" HREF="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" HREF="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" HREF="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" HREF="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" HREF="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" HREF="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" HREF="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" HREF="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" HREF="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" HREF="/favicon-16x16.png">
    <link rel="manifest" HREF="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Soan Morey - Portfolio</title>
    <meta charset=" UTF-8">
    <link rel="stylesheet" href="index.css" />
    <script src="index.js"></script>
    <meta name="viewport">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap" rel="stylesheet">
</head>

<body>
    <div class="fond">
    </div>
    <div class="mainsep">
        <?php include 'header.php'; ?>
        <main>
            <div class="main-division rowcontainer" id="division0">
                <div class="text-présentation">
                    <span class="texterandom"> Bonjour, je m'appelle</span>
                    <span class="texterandom gras">Soan Morey</span><span class="texterandom">et je suis</span>
                    <span class="texterandom gras vertglow">Junior en création digitale.</span>
                    <div class="lelien rowlist" id="division1">
                        <button><a href="./IMG/CV-Soan-Morey-2024.pdf" target="_blank">📄Accéder à mon Cv</a></button>
                        <button><a href="https://youtu.be/o-cPkulV9DM" target="_blank">▶️My video resume</a></button>
                    </div>
                </div>
                <div class="sized-div columncontainer">
                    <img class="moi" src="./IMG/CV_Soan_Morey-Pfp.png" alt="moi">
                    <div id='circle'
                        data-text="#OPENTOWORK #OPENTOWORK #OPENTOWORK #OPENTOWORK #OPENTOWORK #OPENTOWORK&nbsp;"></div>
                </div>
            </div>
            <h2> Projets</h2>
            <h2>Parcours</h2>
            <div class="main-division columncontainer" id="division3">
                <div class="timeline-container">
                    <div class="timeline-element timeline-left">

                        <p><span class="gras">2022-2025 (en cours)</span>
                            BUT Métier du Multimédia et de l'Internet (MMI)
                            <br>IUT de Lannion (22), Université de Rennes (Communication, Audiovisuel,
                            Développement-Web)
                        </p>

                    </div>
                    <div class="timeline-element timeline-right">

                        <p><span class="gras">Eté 2022</span>
                            Brevet d'aptitude aux fonctions d'animateur (BAFA)
                            <br> Formation, Stage pratique (scoutisme) et Approfondissement (Grands jeux)
                        </p>

                    </div>
                    <div class="timeline-element timeline-left">

                        <p><span class="gras">2022</span>
                            Baccalauréat général - Mention bien - Guebwiller(68)
                            <br>Spécialités Sciences Economiques et Sociales; Histoire, Géographie, Géopolitique et
                            Sciences Politiques.
                            <br>Option Langue, Littérature et Culture Etrangères, Anglais
                        </p>

                    </div>
                </div>
            </div>

            <div id="division4" class="main-division columncontainer footer">

                <span class="gras">Me Contacter :</span>
                <a href="https://www.linkedin.com/in/soan-morey-111071270/" target="_blank" class="social"><img
                        class="inlogo" src="./IMG/in.png">LinkedIn</a>
                <a href="#" onclick="CopyToClipboard('mail');return false;" class="social"><img class="inlogo"
                        src="./IMG/mail.png">&nbsp;Copier mon e-mail</a>
                <br>

                <h1 class="sm">[<span class="vertglow">S</span>M]</h1>

                <div class="footer">Site web réalisé par&nbsp;<span class="vertglow">Soan
                        Morey</span>,&nbsp;&nbsp;Junior en communication digitale - 2023</div>

            </div>

            <div id="snackbar">E-mail copié dans le presse-papier !</div>
            <p class="hide" id="mail">
                soan.morey@etudiant.univ-rennes.fr
            </p>
    </div>
    </main>
    <footer>
    </footer>
</body>