<?php
session_start();
?>
<html>
    <body>
        <?php
        session_unset();
        session_destroy();
        echo"session vaiable are cleared and session is destroyed.";
        ?>
        </body>
        </html>