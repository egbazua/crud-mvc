<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <!-- Bootstrap 5 -->
        <link rel="shortcut icon" href="/public/resources/football.png" type="image/png">
        <title> CRUD - FUTBOLISTAS </title>
    </head>
    <body>

        <!-- <?php
            /* print_r($futbolista); */
        ?> -->

        <div class="container mt-3">
        <?php
            if(session('message')){
        ?>
        <div class="alert alert-danger" role="alert">
            <?php
                echo session('message');
            ?>
        </div>

        <?php
        
            }
        ?>