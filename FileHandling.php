

<?php
// Step 1: Create and Write to the file
$file = "example.txt";
$data = "Hello Gomo!";

// Write data to the file (this creates the file if it doesn't exist)
file_put_contents($file, $data);

// Step 2: Read the content from the file
if (file_exists($file)) {
    $content = file_get_contents($file);
    echo "File Content: " . $content;
} else {
    echo "File does not exist.";
}
?>

