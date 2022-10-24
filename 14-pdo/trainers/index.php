    <?php $title = 'List All Trainers' ?>
    <?php require '../config/app.php' ?>
    <?php include '../config/database.php'  ?>
    <?php include '../includes/header.inc' ?>
    <?php include '../includes/navbar.inc' ?>
    <?php include '../includes/security.inc' ?>
    <?php include '../includes/protect-admin.inc' ?>
    <!--  -->
    <main class="container">
        <section class="row">
            <div class="col-md-8 offset-md-2 my-5">
                <h1 class="text-center">
                    <i class="fa fa-users"></i>
                    Trainers
                </h1>
                <hr>
                <a href="add.php" class="btn btn-lg btn-outline-success">
                    <i class="fa fa-plus"></i>
                    Add Trainer
                </a>
                <div class="table-responsive">
                    <table class="table table-striped table-hover mt-5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th class="d-none d-sm-table-cell">EMAIL</th>
                                <th>PHOTO</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php $trainers = listAllTrainers($conx) ?>
                            <?php foreach($trainers as $trainer): ?>
                            <tr>
                                <td><?php echo $trainer['id'] ?></td>
                                <td><?php echo $trainer['name'] ?></td>
                                <td class="d-none d-sm-table-cell"><?php echo $trainer['email'] ?></td>
                                <td>
                                    <img src="../<?php echo $trainer['photo'] ?>" width="40px">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                            <i class="fa fa-cog"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark">
                                            <li><a class="dropdown-item" href="show.php?id=<?php echo $trainer['id'] ?>"><i class="fa fa-search"></i> Show</a></li>
                                            <li><a class="dropdown-item" href="edit.php?id=<?php echo $trainer['id'] ?>"><i class="fa fa-pen"></i> Edit</a></li>
                                            <li><a class="dropdown-item bg-danger btn-delete" data-id="<?php echo $trainer['id'] ?>" href="javascript:;"><i class="fa fa-trash"></i> Delete</a></li>
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
    <!--  -->
    <?php include '../includes/scripts.inc' ?>
    <!--  -->
    <script>
        $(document).ready(function () {
            <?php if(isset($_SESSION['message'])): ?>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '<?php echo $_SESSION['message'] ?>',
                showConfirmButton: false,
                timer: 2500
            })
            <?php endif ?>
            <?php unset($_SESSION['message']) ?>
            // - - - - - - - - - - -
            $('.btn-delete').click(function (e) {
                e.preventDefault()
                $id = $(this).attr('data-id')
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#212529',
                    cancelButtonColor: '#dc3545',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.replace('delete.php?id=' + $id)
                    }
                })
            })
            // - - - - - - - - - -
        })
    </script>
</body>
</html>