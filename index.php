<?php
    include 'dist/php/database.php';

    // header('Content-Type: application/json');

    // echo json_encode($database);
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
        <h1>Tramite php</h1>
        <div class="album-container">

            <?php

            foreach($database as $key => $value) {
                ?><div class="album">
                    <img src="<?= $value['poster'] ?>">
                    <h4><?= $value['title'] ?></h4>
                    <h3><?= $value['author'] ?></h3>
                    <span><?= $value['genre'] ?></span>
                    <span><?= $value['year'] ?></span>
                </div>
            <?php
            } ?>

            
        </div>
    </div>
    <div id="root"class="container-fluid">
        <h1>Tramite vue</h1>
        <div class="album-container">
            <div v-for="disco in dischi" class="album">
                <img :src="disco.poster" alt="">
            </div>
            
        </div>
    </div>


    <!-- link a librerie js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="dist/js/main.js"></script>
</body>
</html>