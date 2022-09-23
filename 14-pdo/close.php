<?php
    include 'config/app.php';

    unset($_SESSION['tid']);
    unset($_SESSION['temail']);
    unset($_SESSION['tphoto']);

    if (session_destroy()) {
        echo "<script>
                window.location.replace('index.php')
             </script>";
    }



