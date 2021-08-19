<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <!-- Bootstrap 5 -->
        <link rel="shortcut icon" href="/public/resources/football.png" type="image/png">
        <link rel="stylesheet" href="/public/styles/styles.css">
        <title> CRUD - FUTBOLISTAS </title>
    </head>
    <body>

        <h1 class="p-2 text-center">CRUD - FOOTBALLERS</h1>

        <div class="container mt-4">
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