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
                <a href="add.php" class="btn btn-lg btn-outline-success">
                    <i class="fa fa-plus"></i>
                    Add Pokemon
                </a>
                <div class="table-responsive">
                    <table class="table table-striped table-hover mt-5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th class="d-none d-sm-table-cell">TYPE</th>
                                <th>IMAGE</th>
                                <th class="d-none d-sm-table-cell">TRAINER</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php $pokemons = listAllPokemons($conx) ?>
                            <?php foreach($pokemons as $pokemon): ?>
                            <tr>
                                <td><?php echo $pokemon['id'] ?></td>
                                <td><?php echo $pokemon['name'] ?></td>
                                <td class="d-none d-sm-table-cell"><span class="badge bg-dark"><?php echo $pokemon['type'] ?></span></td>
                                <td>
                                    <img src="<?php echo $pokemon['image'] ?>" width="40px">
                                </td>
                                <td class="d-none d-sm-table-cell"><?php echo $pokemon['nametrainer'] ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                            <i class="fa fa-cog"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark">
                                            <li><a class="dropdown-item" href="show.php?id=<?php echo $pokemon['id'] ?>"><i class="fa fa-search"></i> Show</a></li>
                                            <li><a class="dropdown-item" href="edit.php?id=<?php echo $pokemon['id'] ?>"><i class="fa fa-pen"></i> Edit</a></li>
                                            <li><a class="dropdown-item bg-danger" href="#"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
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
            // Swal.fire(
            //     'Good job!',
            //     'Everything is OK!',
            //     'success'
            // )
        })
    </script>
</body>
</html>