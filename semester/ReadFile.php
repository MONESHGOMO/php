<?php

if (file_exists("createdFileUsingCode.txt")){
    $file = fopen("createdFileUsingCode.txt","r");
    while(!feof($file)){
        echo fgets($file) . "<br>";
    
    }

    fclose($file);
} else {
    echo "File does not exist.";
}
?>

