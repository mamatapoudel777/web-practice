<?php
session_start();
?>
<html>
    <body>
        <?php
        $_SESSION["name"]= "fruit";
        $_SESSION["class"]= "apple";
        echo"session variable are set";
        ?>
        </body>
        </html>
        