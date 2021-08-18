<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- script -->
    <script type="text/javascript" src="js/main.js"></script>

    <!-- styles CSS -->
    <link  href="/css/fonts.css" rel="stylesheet">
    <link  href="/css/reset.css" rel="stylesheet">
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
    <nav id="lateralNav">menu latéral</nav>
</div>
</body>
</html>