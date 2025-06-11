<?php
$filename = "createdFileUsingCode.txt";

// Step 1: Delete the file if it exists
if (file_exists($filename)) {
    unlink($filename); // Delete the existing file
    echo "Step 1: File '$filename' deleted successfully.<br><br>";
} else {
    echo "Step 1: File does not exist or already deleted.<br><br>";
}

// Step 2: Append data to the file (creates the file if it doesn't exist)
$file = fopen($filename, "a"); // Open file in append mode
fwrite($file, "This line was added later.\n"); // Write a line
fclose($file); // Close file
echo "Step 2: Data appended to '$filename'.<br><br>";

// Step 3: Read from the file
echo "Step 3: Reading from the file:<br>";
if (file_exists($filename)) {
    $file = fopen($filename, "r"); // Open file for reading
    while (!feof($file)) {
        echo fgets($file) . "<br>"; // Print each line
    }
    fclose($file);
    echo "<br>";
} else {
    echo "File does not exist.<br><br>";
}

// Step 4: Overwrite the file with new content
$file = fopen($filename, "w"); // Open file in write mode (clears content)
fwrite($file, "hello gomo how are you\n"); // Write new content
fwrite($file, "something data\n"); // Add more content
fclose($file); // Close the file
echo "Step 4: File '$filename' written successfully with new content.<br>";
?>
