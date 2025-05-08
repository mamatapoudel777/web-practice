<?php
$file = fopen("read.txt", "w");

if ($file) {
    fwrite($file, "i am a student of la grandee");
    fclose($file);
    echo "File written successfully.";
} else {
    echo "Failed to open file.";
    
}
?>
