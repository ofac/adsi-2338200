<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Hello World!"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">&larr; Main Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">01- Hello World</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <?php 
                    echo "<h1 class='mt-5'>Hello World!</h1><hr>";
                    print('<p class="text-start text-muted lh-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus rem ea id odit corporis sapiente vel tenetur aut molestias ducimus optio magnam maiores repudiandae alias aperiam eveniet ipsum dolore, explicabo inventore quam nam possimus, voluptatem corrupti. Non quas excepturi dolores, natus odit laudantium ipsum dolore vitae blanditiis rem consequuntur magni alias labore recusandae eum sapiente, perferendis assumenda omnis ab, molestiae accusantium. Quasi repellat, nesciunt provident assumenda quos velit eos maiores quam at, earum consequuntur consequatur deserunt explicabo! Facere architecto laboriosam accusantium aspernatur possimus reprehenderit sapiente odit quasi. Ab est officiis, explicabo, qui at quam illo commodi et provident ad assumenda?
                    </p>')
                ?>
            </div>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>