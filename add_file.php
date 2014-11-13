<?php
if(isset($_FILES['uploaded_file'])) {

    if($_FILES['uploaded_file']['error'] == 0) {
        $dbLink = new mysqli('127.0.0.1', 'root', '0877019376', 'speedbook');// Connect to the database
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
        $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);
        $query = "
            INSERT INTO `file` (
                `name`, `size`, `data`, `created`
            )
            VALUES (
                '{$name}', {$size}, '{$data}', NOW()
            )";
       $result = $dbLink->query($query);
        if($result) {
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }
    $dbLink->close();
}
else {
    echo 'Error! A file was not sent!';
}
echo '<p>Click <a href="index.html">here</a> to go back</p>';
?>