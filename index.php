<?php $config = include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">

    <title><?php echo $config['title'] ?></title>    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./media/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    
    <?php include 'includes/nav.php' ?>
    <main>
        <?php include 'includes/home.php' ?>
        <?php include 'includes/who.php' ?>
        <?php include 'includes/get-involved.php' ?>
        <?php include 'includes/back-to-top.php' ?>
    </main>     
    <?php include 'includes/footer.php' ?>
    <script src="scripts/index.js"></script>
</body>
</html>