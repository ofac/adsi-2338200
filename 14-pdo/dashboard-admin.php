    <?php $title = 'Dashboard' ?>
    <?php require 'config/app.php' ?>
    <?php include 'config/database.php'  ?>
    <?php include 'includes/header.inc' ?>
    <?php include 'includes/navbar.inc' ?>
    <?php include 'includes/security.inc' ?>
    <?php include 'includes/protect-admin.inc' ?>
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
                  <div class="col-md-4 col-xs-6 mb-2">
                    <div class="card bg-dark text-light">
                      <div class="card-body">
                        <h3 class="card-title">
                            <i class="fa fa-paw fa-2x"></i>
                            Pokemons
                        </h3>
                        <p class="card-text mt-4">
                            Administrate all information about pokemons 
                        </p>
                        <a href="pokemons/index.php" class="btn btn-danger form-control">
                            <i class="fa fa-circle-chevron-right"></i>
                            Enter
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-xs-6 mb-2">
                    <div class="card bg-dark text-light">
                      <div class="card-body">
                        <h3 class="card-title">
                            <i class="fa fa-users fa-2x"></i>
                            Trainers
                        </h3>
                        <p class="card-text mt-4">
                            Administrate all information about trainers 
                        </p>
                        <a href="trainers/index.php" class="btn btn-danger form-control">
                            <i class="fa fa-circle-chevron-right"></i>
                            Enter
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-xs-6">
                    <div class="card bg-dark text-light">
                      <div class="card-body">
                        <h3 class="card-title">
                            <i class="fa fa-landmark fa-2x"></i>
                            Gyms
                        </h3>
                        <p class="card-text mt-4">
                            Administrate all information about gyms 
                        </p>
                        <a href="gyms/index.php" class="btn btn-danger form-control">
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

        })
    </script>
</body>
</html>