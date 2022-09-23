<?php

    if (isset($_SESSION['tid'])) {
        echo "<script>
                window.location.replace('dashboard.php')
              </script>";
    }
