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
        <header id="header">
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
            <div id="topNav">  
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
                <span id="Menu">Menu</span></button> 
                    <div class="bouttonNav" >
                        <bouton class="bt" ><div id="langueFR">FR</div></bouton>
                        <bouton class="bt"><a href="tel:+0000000000"><img id="pictoCall" src="picto/call.svg" alt="appel"></a></bouton>
                        <bouton class="bt"><img id="pictoLoupe" src="picto/loupe.svg" alt="rechercher"></bouton>
                    </div>
                
                <div id="bottomNavLateral">
                    <div id="scroll">SCROLL</div>
                    <div id="traitScroll"></div>
                </div>
            </div>
        </nav>
        
            <div id="mySidenav" class="sidenav">  
                <div id="header">  
                    <div id="leftHeader">
                        <div id="wrpLogo"><img src="img/imageCL.jpg" alt="logo"></a></div>               
                    </div>
                    <div id="rightHeader">
                        <p>Un crédit vous engage et doit être remboursé.<br> 
                        Vérifiez vos capacités de remboursementavant de vous engager.</p>
                    </div>
                </div>
                <div id="sidenavLinks"><a href="#">ACCEUIL</a>
                    <a href="#">QUI SOMMES NOUS ?</a>
                    <a href="#">NOS OFFRES</a>
                    <a href="#">CONTACTEZ-NOUS</a>
                </div>
            </div>
    </body>
</html>