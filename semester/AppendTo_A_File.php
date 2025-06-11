<?php
$file = fopen("createdFileUsingCode.txt", "a"); // open file to append
fwrite($file, "This line was added later.\n");
fclose($file);
?>

