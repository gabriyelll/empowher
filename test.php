<?php
$path = __DIR__ . "/firebase/firebase_credentials.json";


echo "Trying to load: $path\n";

if (!file_exists($path)) {
    echo "File does not exist.\n";
} elseif (!is_readable($path)) {
    echo "File is not readable (permissions).\n";
} else {
    $json = file_get_contents($path);
    echo "Success loading JSON. Length: " . strlen($json) . "\n";
}
