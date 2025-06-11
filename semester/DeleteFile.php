<?php
$filename = "createdFileUsingCode.txt";

if (file_exists($filename)) {
    unlink($filename); // Delete file
    echo "File '$filename' deleted successfully.<br>";
} else {
    echo "File does not exist or already deleted.<br>";
}
?>