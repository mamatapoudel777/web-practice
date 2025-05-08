<?php
$files = fopen("abc.txt", "r");
echo fgetc($files);

// fgets($files);
//$content = fread($files, filesize("abc.txt"));
// echo $content;
//fclose($files); 
?>
