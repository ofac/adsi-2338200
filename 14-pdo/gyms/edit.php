    <?php $title = 'Edit Gym' ?>
    <?php require '../config/app.php' ?>
    <?php include '../config/database.php'  ?>
    <?php include '../includes/header.inc' ?>
    <?php include '../includes/navbar.inc' ?>
    <?php include '../includes/security.inc' ?>
    <!--  -->
    <main class="container">
        <section class="row">
            <div class="col-md-6 offset-md-3 my-5">
                <a href="index.php" class="btn btn-outline-dark">
                    <i class="fa fa-arrow-left"></i>
                    Back to All Gyms
                </a>
                <hr>
                <h1 class="text-center">
                    <i class="fa fa-pen"></i>
                    Edit Gym
                </h1>
                <?php $id = $_GET['id'] ?>
                <?php $gym = showGym($conx, $id) ?>
                <?php foreach($gym as $gm): ?>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $gm['name'] ?>" placeholder="Name of Gym" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success btn-lg form-control">
                            <i class="fa fa-save"></i>
                            Edit
                        </button>
                        <button type="reset" class="btn btn-dark btn-lg form-control mt-2">
                            <i class="fa fa-eraser"></i>
                            Reset
                        </button>
                    </div>
				</form>
                <?php endforeach ?>
                <?php
                    if($_POST) {
                        //var_dump($_POST);
                        //echo "<hr>";
                        //var_dump($_FILES);
                        $id       = $_GET['id'];
                        $name     = $_POST['name'];
                        
                        if(updateGym($conx, $id, $name)) {
                            $_SESSION['message'] = "Gym : $name was updated!";
                            echo "<script>
                                    window.location.replace('index.php')
                                  </script>";
                        } else {
                            $_SESSION['error'] = "Gym Name: $name already exist!";
                        }

                    }
                ?>
            </div>
        </section>
        <?php $conx = null; ?>
    </main>
    <!--  -->
    <?php include '../includes/scripts.inc' ?>
    <!--  -->
    <script>
        $(document).ready(function () {
            // - - - - - - - - - - - - - 
            $('.btn-upload').click(function() {
                $('#image').click();
            });
            // - - - - - - - - - - - - - 
            $('#image').change(function(event) {
                let reader = new FileReader()
                reader.onload = function(event) {
                    $('#preview').attr('src', event.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            })
            // - - - - - - - - - - - - - 
            <?php if(isset($_SESSION['error'])): ?>
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: '<?php echo $_SESSION['error'] ?>',
                showConfirmButton: false,
                timer: 2500
            })
            <?php endif ?>
            <?php unset($_SESSION['error']) ?>
        })
    </script>
</body>
</html>