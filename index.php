<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- script -->
    <script type="text/javascript" src="js/main.js"></script>

    <!-- styles CSS -->
    <link  href="css/styles.css" rel="stylesheet">

    <title>Le Crédit Lédonien</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

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

    <?php include 'includes/footer.php'; ?>
    
</body>
</html>