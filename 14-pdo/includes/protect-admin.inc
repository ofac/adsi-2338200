<?php 

if ($_SESSION['trole'] != 'Admin') {
    $_SESSION['error'] = "Content Not Allowed!";
    echo "<script> 
            window.location.replace('".$base_url."/index.php')
        </script>";
}