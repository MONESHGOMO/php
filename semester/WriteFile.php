<?php


$file = fopen("createdFileUsingCode.txt","w");

fwrite($file, "hello gomo how are you ");
fwrite($file, "something data ");
fclose($file);

echo ("file written successfully");

?>