    <?php $title = 'Login' ?>
    <?php require 'config/app.php' ?>
    <?php include 'config/database.php'  ?>
    <?php include 'includes/header.inc' ?>
    <?php include 'includes/redirect.inc' ?>
    <!--  -->
    <main class="container">
        <section class="row">
            <div class="col-md-4 offset-md-4 my-5">
                <h2 class="text-center">
                    <i class="fa fa-dragon"></i>
                    Web App Pokemons
                </h2>
                <hr>
                <form action="" method="POST">
                    <div class="mb-3 text-center">
                        <figure class="figure">
                            <img src="public/images/pokeball.png" width="240" id="preview" class="figure-img img-fluid img-thumbnail rounded">
                        </figure>
                    </div>
                    <h3 class="text-center">
                        <i class="fa fa-lock"></i>
                        Login for trainers
                    </h3>
                    <hr>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="ash@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="secret" required>
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark btn-lg form-control">
                            <i class="fa fa-lock-open"></i>
                            Login
                        </button>
                        <button type="reset" class="btn btn-light btn-lg form-control mt-2">
                            <i class="fa fa-users"></i>
                            Register
                        </button>
                    </div>
				</form>
                <?php
                    if ($_POST) {
                        $email = $_POST['email'];
                        $pass  = md5($_POST['password']);

                        if (login($conx, $email, $pass)) {
                            echo "<script>
                                    window.location.replace('dashboard.php')
                                  </script>";
                        } else {
                            $_SESSION['error'] = "Email or Password are incorrect!";
                        }

                    }
                ?>
            </div>
        </section>
        <?php $conx = null; ?>
    </main>
    <!--  -->
    <?php include 'includes/scripts.inc' ?>
    <!--  -->
    <script>
        $(document).ready(function () {
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
            // - - - - - - - - - -
        })
    </script>
</body>
</html>