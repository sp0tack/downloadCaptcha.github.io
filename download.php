<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
if (isset($_POST['btn1'])) {
    // Correct the file path
    $file = $_SERVER['DOCUMENT_ROOT'] . '/spotifex_v1.8.1.exe'; // Add a leading slash
    $file_type = 'application/octet-stream'; // Use a more generic MIME type

    // Check if the file exists before outputting headers
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: ' . $file_type);
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));

        ob_clean(); // Clean the output buffer
        flush();    // Flush system output buffer

        readfile($file); // Read the file and send it to the output buffer
        exit; 
    } else {
        echo "File not found!";
    }
} else {
    echo "POST not found";
}
?>
  
</body>
</html>
