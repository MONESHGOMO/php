
<?php
function greet($name) {
    echo "Hello, $name!";
}

$func = 'greet';

if (is_callable($func)) {
    $func("monesh");  // Outputs: Hello, monesh!
}
?>
