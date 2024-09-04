<?php
// Specify the directory containing the files
$directory = "C:/Users/Diego_Nogueira/Downloads/Músicas Deus para acalmar";

// Convert directory path to use backslashes for Windows
$directory = str_replace('/', DIRECTORY_SEPARATOR, $directory);

$searchString = '[Diego H. Nogueira] Músicas Deus para acalmar';
$replaceString = '[Diego H. Nogueira] ';

// Check if the directory exists
if (!is_dir($directory)) {
    die("Directory does not exist: $directory");
}

// Get the list of files in the directory
$files = scandir($directory);

foreach ($files as $file) {
    // Skip the current and parent directory entries
    if ($file === '.' || $file === '..') {
        continue;
    }

    // Construct the full path of the file
    $oldPath = $directory . DIRECTORY_SEPARATOR . $file;

    // Check if the file is a regular file and contains the substring
    if (is_file($oldPath) && strpos($file, $searchString) !== false) {
        // Generate the new filename by replacing the substring
        $newFilename = str_replace($searchString, $replaceString, $file);
        $newPath = $directory . DIRECTORY_SEPARATOR . $newFilename;

        // Rename the file
        if (rename($oldPath, $newPath)) {
            echo "Renamed: $file -> $newFilename <br>";
        } else {
            echo "Error renaming: $file <br>";
        }
    }
}
