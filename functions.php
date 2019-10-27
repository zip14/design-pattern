<?php
function projectAutoload($class)
{
    $prefix = '';
    $baseDir = __DIR__ . '/classes/';

    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0) {
        return false;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require $file;
    }
}