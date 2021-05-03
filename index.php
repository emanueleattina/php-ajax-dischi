<?php
    include 'dist/php/database.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link a google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- link a mio css -->
    <link rel="stylesheet" href="dist/css/master.css">

    <title>Player</title>
</head>
<body>
    <div class="container-fluid">
        <h1>Spotify</h1>
        <div class="album-container">

            <?php

            foreach($database as $key => $value) {
                ?><div class="album">
                    <img src="<?= $value['poster'] ?>">
                    <h4><?= $value['title'] ?></h4>
                    <h4><?= $value['author'] ?></h4>
                    <h4><?= $value['genre'] ?></h4>
                    <h4><?= $value['year'] ?></h4>
                </div>
            <?php
            } ?>

            
        </div>
    </div>
</body>
</html>