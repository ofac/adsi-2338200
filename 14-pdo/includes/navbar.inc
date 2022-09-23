<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <i class="fa fa-dragon"></i>
        <small class="ms-2">Web App Pokemons</small>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTop">
      <ul class="navbar-nav me-auto my-2 my-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li> -->
      </ul>
      <ul class="navbar-nav ms-auto my-2 my-lg-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?php echo $_SESSION['tphoto'] ?>" class="me-2 img-fluid rounded" width="50px">
                <?php echo $_SESSION['temail'] ?>
          </a>
          <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="pokemons/index.php">
                    <i class="fa fa-paw"></i>
                    Pokemons
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="trainers/index.php">
                    <i class="fa fa-users"></i>
                    Trainers
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="gyms/index.php">
                    <i class="fa fa-landmark"></i>
                    Gyms
                </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <a class="dropdown-item" href="close.php">
                    <i class="fa fa-times"></i>
                    Close Session
                </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>