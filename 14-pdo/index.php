<?php require 'config/app.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web App Pokemons</title>
    <link rel="stylesheet" href="public/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/fontawesome.min.css">
    <link rel="stylesheet" href="public/css/fonts.css">
</head>
<body>
    <main class="container">
        <section class="row">
            <div class="col-8 offset-2 my-5">
                <h1 class="text-center">
                    <i class="fa fa-dragon"></i>
                    Web App Pokemons
                </h1>
                <hr>
                <?php include('config/database.php') ?>
            </div>
        </section>
    </main>
    <script src="public/js/jquery-3.6.0.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/sweetalert2.js"></script>
    <script>
        $(document).ready(function () {
            Swal.fire(
                'Good job!',
                'Everything is OK!',
                'success'
            )
        })
    </script>
</body>
</html>