    <?php $title = 'Dashboard' ?>
    <?php require 'config/app.php' ?>
    <?php include 'config/database.php'  ?>
    <?php include 'includes/header.inc' ?>
    <?php include 'includes/navbar.inc' ?>
    <?php include 'includes/security.inc' ?>
    <!--  -->
    <main class="container">
        <section class="row">
            <div class="col-md-8 offset-md-2 my-5">
                <h1 class="text-center">
                    <i class="fa fa-cog"></i>
                    Dashboard
                </h1>
                <hr>

                <div class="row mt-5">
                  <div class="col-md-6 col-xs-6 mb-2">
                    <div class="card bg-dark text-light">
                      <div class="card-body">
                        <h3 class="card-title">
                            <i class="fa fa-paw fa-2x"></i>
                            My Pokemons
                        </h3>
                        <p class="card-text mt-4">
                            Administrate all info about my own pokemons 
                        </p>
                        <a href="pokemons/mypokemons.php" class="btn btn-danger form-control">
                            <i class="fa fa-circle-chevron-right"></i>
                            Enter
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-xs-6 mb-2">
                    <div class="card bg-dark text-light">
                      <div class="card-body">
                        <h3 class="card-title">
                            <i class="fa fa-user fa-2x"></i>
                            My Account
                        </h3>
                        <p class="card-text mt-4">
                            Administrate all information about me 
                        </p>
                        <a href="trainers/myaccount.php" class="btn btn-danger form-control">
                            <i class="fa fa-circle-chevron-right"></i>
                            Enter
                        </a>
                      </div>
                    </div>
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
        })
    </script>
</body>
</html>