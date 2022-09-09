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
            <div class="col-md-6 offset-md-3 my-5">
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
                    <i class="fa fa-plus"></i>
                    Add Pokemon
                </h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 text-center">
                        <figure class="figure">
                            <img src="public/images/pokeball.png" width="240" id="preview" class="figure-img img-fluid img-thumbnail rounded">
                        </figure>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-danger btn-lg form-control btn-upload" type="button"> 
                            <i class="fa fa-upload"></i>
                            Select Photo 
                        </button>
                        <input type="file" class="form-control d-none" id="image" name="image" accept="image/*" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name of Pokemon" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type:</label>
                        <select name="type" id="type" class="form-select">
                            <option value="">Select a Type...</option>
                            <option value="Dragon">Dragon</option>
                            <option value="Electric">Electric</option>
                            <option value="Fire">Fire</option>
                            <option value="Ghost">Ghost</option>
                            <option value="Grass">Grass</option>
                            <option value="Ground">Ground</option>
                            <option value="Normal">Normal</option>
                            <option value="Poison">Poison</option>
                            <option value="Rock">Rock</option>
                            <option value="Water">Water</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="strength" class="form-label">Strength:</label>
                        <input type="number" class="form-control" id="strength" name="strength" placeholder="Strength" required>
                    </div>
                    <div class="mb-3">
                        <label for="stamina" class="form-label">Stamina:</label>
                        <input type="number" class="form-control" id="stamina" name="stamina" placeholder="Stamina" required>
                    </div>
                    <div class="mb-3">
                        <label for="speed" class="form-label">Speed:</label>
                        <input type="number" class="form-control" id="speed" name="speed" placeholder="Speed" required>
                    </div>
                    <div class="mb-3">
                        <label for="accuracy" class="form-label">Accuracy:</label>
                        <input type="number" class="form-control" id="accuracy" name="accuracy" placeholder="Accuracy" required>
                    </div>
                    <div class="mb-3">
                        <label for="trainer_id" class="form-label">Trainer:</label>
                        <select name="trainer_id" id="trainer_id" class="form-select">
                            <option value="">Select a Trainer...</option>
                            <?php $trainers = listAllTrainers($conx) ?>
                            <?php foreach($trainers as $trainer): ?>
                                <option value="<?php echo $trainer['id'] ?>"><?php echo $trainer['name'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success btn-lg form-control">
                            <i class="fa fa-save"></i>
                            Add
                        </button>
                        <button type="reset" class="btn btn-dark btn-lg form-control mt-2">
                            <i class="fa fa-eraser"></i>
                            Reset
                        </button>
                    </div>
				</form>
                
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
            $('.btn-upload').click(function() {
                $('#image').click();
            });
            $('#image').change(function(event) {
                let reader = new FileReader()
                reader.onload = function(event) {
                    $('#preview').attr('src', event.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            })
        })
    </script>
</body>
</html>