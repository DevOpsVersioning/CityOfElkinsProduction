<?php
    require("dblogin.php"); // get login credentials
    /*
       *This file handles downloading files from the database and displaying it given the file ID
     */
    // get file(s) associated with this id.
    if (isset($_GET['id'])) {
        // For city call users fetching by record id.

        // if URL includes a record id, populate primary form with that record's contents
        $id = $_GET['id'];
        $conn = mysqli_connect($db_server, $db_city_user, $db_city_password, $db_database);

        if (!$conn) {
            $content = str_replace("<article>", "<article><p class=\"syserror\">Error connecting to database: " . mysqli_connect_error() . "</p>", $content);
            return $content;
        }

        $q = "SELECT `name`,`type`,`size`,`content` FROM `output_images` WHERE `submission_number` =$id";

        $r = mysqli_query($conn, $q) or die('query failed.');

        if (mysqli_num_rows($r) == 1) {
            // Fetch the record into a variable:
            $file = mysqli_fetch_array($r, MYSQLI_ASSOC);
            $size = $file['size'];
            $type = $file['type'];
            $name =$file['name'];
            $fileContent = $file['content'];
            header("Content-length: $size");
            header("Content-type: $type");
            header("inline: attachment; filename=$name");
            header('Content-Transfer-Encoding: binary');
            echo $fileContent;
            // WARNING!!!! This is very sensitive to source code formatting. Extra whitespace, etc. may corrupt the download.
        }
    }
?>
