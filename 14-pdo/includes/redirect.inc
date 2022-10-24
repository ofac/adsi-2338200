<?php

    if (isset($_SESSION['tid'])) {
        if ($_SESSION['trole'] == 'Admin') {
            echo "<script>
                    window.location.replace('dashboard-admin.php')
                </script>";
        } else {
            echo "<script>
                    window.location.replace('dashboard-trainer.php')
                </script>";
        }
    }
