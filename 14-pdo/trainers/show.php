    <?php $title = 'Show Trainer' ?>
    <?php require '../config/app.php' ?>
    <?php include '../config/database.php'  ?>
    <?php include '../includes/header.inc' ?>
    <?php include '../includes/navbar.inc' ?>
    <?php include '../includes/security.inc' ?>
    <!--  -->
    <main class="container">
        <section class="row">
            <div class="col-md-8 offset-md-2 my-5">
                <a href="index.php" class="btn btn-outline-dark">
                    <i class="fa fa-arrow-left"></i>
                    Back to All Trainers
                </a>
                <hr>
                <h1 class="text-center">
                    <i class="fa fa-search"></i>
                    Show Trainer
                </h1>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <?php 
                                $id = $_GET['id'];
                                $trainer = showTrainer($conx, $id);
                            ?>
                            <?php foreach($trainer as $trn): ?>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <img src="<?php echo $base_url . '/' . $trn['photo'] ?>" class="img-thumbnail" width="240px">
                                    </td>
                                </tr>
                                <tr>
                                    <th>ID:</th>
                                    <td><?php echo $trn['id'] ?></td>
                                </tr>
                                <tr>
                                    <th>NAME:</th>
                                    <td><?php echo $trn['name'] ?></td>
                                </tr>
                                <tr>
                                    <th>LEVEL:</th>
                                    <td><span class="badge bg-dark"><?php echo $trn['level'] ?></span></td>
                                </tr>
                                <tr>
                                    <th>EMAIL:</th>
                                    <td><?php echo $trn['email'] ?></td>
                                </tr>
                                <tr>
                                    <th>ROLE:</th>
                                    <td>
                                        <?php if ($trn['role'] == 'Admin'): ?>
                                            <i class="fa fa-user-tie"></i>
                                        <?php else: ?>
                                            <i class="fa fa-user"></i>
                                        <?php endif ?>
                                        <?php echo $trn['role'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>GYM:</th>
                                    <td><?php echo $trn['namegym'] ?></td>
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
    <?php include '../includes/scripts.inc' ?>
    <!--  -->
    <script>
        $(document).ready(function () {
        })
    </script>
</body>
</html>