<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- script -->
    <script type="text/javascript" src="js/main.js" async></script>

    <!-- styles CSS -->
    <link  href="css/fonts.css" rel="stylesheet">
    <link  href="css/reset.css" rel="stylesheet">
    <link  href="css/styles.css" rel="stylesheet">

    <title>Le Crédit Lédonien</title>
</head>
<body>
<div id="wrapper">

    <!-- début de la page -->
    <div id="page">
        <!-- header -->
        <header class="header">
            <?php include 'includes/header.php'; ?>
        </header>

        <!-- debut du main -->
        <main id="main">
            <?php
            if (!empty($_GET['page'])) {
                    switch ($_GET['page']) {
                    case 'about': include 'includes/about.php'; break;
                    default : include 'includes/home.php';
                    }
                }else{
                    include 'includes/home.php';
                }
                ?>
            </main>
            <!-- fin du main -->

            <!-- navigation du bas -->
            <nav id="bottomNav">
                <?php include 'includes/bottomNav.php'; ?>
            </nav>
            
            
            <!-- footer -->
            <footer id="footer">
                <?php include 'includes/footer.php'; ?>
            </footer>
    </div>
        
    <!-- fin de la page -->
    
    <!-- menu latéral -->
        <nav id="lateralNav">
            <button id="btOpenMenu" id="menuBurger">
                <div id="trait1"></div>
                <div id="trait2"></div>
                <div id="trait3"></div>
            <span id="Menu">Menu</span> 
            </button> 
                <button id="btCloseMenu" id="menuBurger">
                    <div id="trait1"></div>
                    <div id="trait2"></div>
                    <div id="trait3"></div>
                    <span id="Menu">Menu</span>
                </button> 
                <div class="blockNavCenter" >
                    <button>FR</button>
                    <button><a href="tel:+0000000000"><img id="pictoCall" src="img/call.svg" alt="appel"></a></button>
                    <button><img id="pictoLoupe" src="img/loupe.svg" alt="rechercher"></button>
                </div>
                <div id="scroll">SCROLL</div>
                <div id="traitScroll"></div>
                
        </nav>
        

            <div id="mySidenav" class="sidenav">  
                <div class="header">
                    <?php include 'includes/header.php'; ?>
                </div> 
                    <div id="sidenavLinks">
                        <a href="?page=home" title="Accueil">ACCUEIL</a>
                        <a href="?page=about" title="qui sommes nous">QUI SOMMES NOUS?</a>
                        <a href="?page=offres" title="nos offres">NOS OFFRES</a>
                        <a href="?page=contact">CONTACTEZ-NOUS</a>
                    </div>
            </div>
            <div id="boxShadow"></div>
    </body>
</html>
