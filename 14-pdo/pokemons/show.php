    <?php $title = 'Show Pokemon' ?>
    <?php include 'includes/header.inc' ?>
    <!--  -->
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
    <!--  -->
    <?php include 'includes/scripts.inc' ?>
    <!--  -->
    <script>
        $(document).ready(function () {
        })
    </script>
</body>
</html>