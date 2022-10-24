    <?php $title = 'Edit Pokemon' ?>
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
                    Back to All Pokemons
                </a>
                <hr>
                <h1 class="text-center">
                    <i class="fa fa-pen"></i>
                    Edit Pokemon
                </h1>
                <?php $id = $_GET['id'] ?>
                <?php $pokemon = showPokemon($conx, $id) ?>
                <?php foreach($pokemon as $pk): ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 text-center">
                        <figure class="figure">
                            <img src="<?php echo $base_url . '/' . $pk['image'] ?>" width="240" id="preview" class="figure-img img-fluid img-thumbnail rounded">
                        </figure>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-danger btn-lg form-control btn-upload" type="button"> 
                            <i class="fa fa-upload"></i>
                            Select Photo 
                        </button>
                        <input type="file" class="form-control d-none" id="image" name="image" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $pk['name'] ?>" placeholder="Name of Pokemon" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type:</label>
                        <select name="type" id="type" class="form-select">
                            <option value="">Select a Type...</option>
                            <option value="Dragon"   <?php if($pk['type'] == 'Dragon'):   ?> selected <?php endif ?>>Dragon</option>
                            <option value="Electric" <?php if($pk['type'] == 'Electric'): ?> selected <?php endif ?>>Electric</option>
                            <option value="Fire"     <?php if($pk['type'] == 'Fire'):     ?> selected <?php endif ?>>Fire</option>
                            <option value="Ghost"    <?php if($pk['type'] == 'Ghost'):    ?> selected <?php endif ?>>Ghost</option>
                            <option value="Grass"    <?php if($pk['type'] == 'Grass'):    ?> selected <?php endif ?>>Grass</option>
                            <option value="Ground"   <?php if($pk['type'] == 'Ground'):   ?> selected <?php endif ?>>Ground</option>
                            <option value="Normal"   <?php if($pk['type'] == 'Normal'):   ?> selected <?php endif ?>>Normal</option>
                            <option value="Poison"   <?php if($pk['type'] == 'Poison'):   ?> selected <?php endif ?>>Poison</option>
                            <option value="Rock"     <?php if($pk['type'] == 'Rock'):     ?> selected <?php endif ?>>Rock</option>
                            <option value="Water"    <?php if($pk['type'] == 'Water'):    ?> selected <?php endif ?>>Water</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="strength" class="form-label">Strength:</label>
                        <input type="number" class="form-control" id="strength" name="strength" value="<?php echo $pk['strength'] ?>" placeholder="Strength" required>
                    </div>
                    <div class="mb-3">
                        <label for="stamina" class="form-label">Stamina:</label>
                        <input type="number" class="form-control" id="stamina" name="stamina" value="<?php echo $pk['stamina'] ?>" placeholder="Stamina" required>
                    </div>
                    <div class="mb-3">
                        <label for="speed" class="form-label">Speed:</label>
                        <input type="number" class="form-control" id="speed" name="speed" value="<?php echo $pk['speed'] ?>" placeholder="Speed" required>
                    </div>
                    <div class="mb-3">
                        <label for="accuracy" class="form-label">Accuracy:</label>
                        <input type="number" class="form-control" id="accuracy" name="accuracy" value="<?php echo $pk['accuracy'] ?>" placeholder="Accuracy" required>
                    </div>
                    <div class="mb-3">
                        <label for="trainer_id" class="form-label">Trainer:</label>
                        <select name="trainer_id" id="trainer_id" class="form-select">
                            <option value="">Select a Trainer...</option>
                            <?php $trainers = listAllTrainers($conx) ?>
                            <?php foreach($trainers as $trainer): ?>
                                <option value="<?php echo $trainer['id'] ?>" <?php if($pk['trainer_id'] == $trainer['id']): ?> selected <?php endif ?>><?php echo $trainer['name'] ?></option>
                            <?php endforeach ?>
                        </select>
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
                        $id         = $_GET['id'];
                        $name       = $_POST['name'];
                        $type       = $_POST['type'];
                        $strength   = $_POST['strength'];
                        $stamina    = $_POST['stamina'];
                        $speed      = $_POST['speed'];
                        $accuracy   = $_POST['accuracy'];
                        $trainer_id = $_POST['trainer_id'];
                        // Upload Image
                        if(!empty($_FILES['image']['name'])) {
                            $path  = "../public/images/";
                            $image = $path.time().".".pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        } else {
                            $image = null;
                        }
                        
                        if(updatePokemon($conx, $id, $name, $type, $strength, $stamina, $speed, $accuracy, $image, $trainer_id)) {
                            if($image != null) {
                                move_uploaded_file($_FILES['image']['tmp_name'], $image);
                            }
                            $_SESSION['message'] = "Pokemon : $name was updated!";
                            echo "<script>
                                    window.location.replace('index.php')
                                  </script>";
                        } else {
                            $_SESSION['error'] = "Pokemon Name: $name already exist!";
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