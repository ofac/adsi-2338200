<?php require 'config/app.php' ?>
<?php include('config/database.php') ?>
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
            <div class="col-md-8 offset-md-2 my-5">
                <h1 class="text-center">
                    <i class="fa fa-dragon"></i>
                    Web App Pokemons
                </h1>
                <hr>
                <a href="index.php" class="btn btn-outline-dark">
                    <i class="fa fa-arrow-left"></i>
                    Back to All Pokemons
                </a>
                <h2 class="text-center my-5">
                    <i class="fa fa-search"></i>
                    Show Pokemon
                </h2>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <?php 
                                $id = $_GET['id'];
                                $pokemon = showPokemon($conx, $id);
                            ?>
                            <?php foreach($pokemon as $pk): ?>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <img src="<?php echo $pk['image'] ?>" class="img-thumbnail" width="240px">
                                    </td>
                                </tr>
                                <tr>
                                    <th>ID:</th>
                                    <td><?php echo $pk['id'] ?></td>
                                </tr>
                                <tr>
                                    <th>NAME:</th>
                                    <td><?php echo $pk['name'] ?></td>
                                </tr>
                                <tr>
                                    <th>TYPE:</th>
                                    <td><span class="badge bg-dark"><?php echo $pk['type'] ?></span></td>
                                </tr>
                                <tr>
                                    <th>STRENGTH:</th>
                                    <td><span class="badge bg-success"><?php echo $pk['strength'] ?></span></td>
                                </tr>
                                <tr>
                                    <th>STAMINA:</th>
                                    <td><span class="badge bg-success"><?php echo $pk['stamina'] ?></span></td>
                                </tr>
                                <tr>
                                    <th>SPEED:</th>
                                    <td><span class="badge bg-success"><?php echo $pk['speed'] ?></span></td>
                                </tr>
                                <tr>
                                    <th>ACCURACY:</th>
                                    <td><span class="badge bg-success"><?php echo $pk['accuracy'] ?></span></td>
                                </tr>
                                <tr>
                                    <th>TRAINER:</th>
                                    <td><?php echo $pk['nametrainer'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </section>
        <?php $conx = null; ?>
    </main>
    <script src="public/js/jquery-3.6.0.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/sweetalert2.js"></script>
    <script>
        $(document).ready(function () {
        })
    </script>
</body>
</html>