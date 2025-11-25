<?php

// Open the file in read mode
$file = "files/info.txt";
if (file_exists($file)) {
    $handle = fopen($file, "r");
    if ($handle) {


        $content = fread($handle, filesize($file));
        echo $content;

        fclose($handle); // Close the file
    } else {
        echo "File exists but failed to open.";
    }
} else {
    echo "Failed to open the file.";
}

?>