<?php
try {
    $link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);
    echo "Success: A proper connection to MySQL was made! The docker database is great." . PHP_EOL;
    mysqli_close($link);
} catch (e) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . e.getMessage() . PHP_EOL;
    exit;
}
