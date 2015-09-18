<?php
    function load_scripts(&$content)
    {
        require("dblogin.php"); // get login credentials
        
        // insert HTML to load external JavaScript files
        $scripts = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="jquery.loadJSON.js"></script>'; // TODO: can this be inserted only for city hall?

        $content = str_replace("<head>", "<head> $scripts", $content);

        // insert HTML for form elements that support storage of JSON data
        $jsonform = '<input id="json_form_button" type="submit" name="json_form_submit" value="Submit" formmethod="post" formaction="json_form_store.php">'; // formenctype="multipart/form-data">';

        $content = str_replace("</form>", "$jsonform </form>", $content);

        if (isset($_GET["id"])) {
            // For city call users fetching by record id.

            // if URL includes a record id, populate primary form with that record's contents
            $id = $_GET["id"];

            $conn = mysqli_connect($db_server, $db_city_user, $db_city_password, $db_database);

            if (!$conn) {
                $content = str_replace("<article>", "<article><p class=\"syserror\">Error connecting to database: " . mysqli_connect_error() . "</p>", $content);
                return $content;
            }

            $data = "<script>\ndata = ";

            $sql = "SELECT `data_string` FROM `cityForms` WHERE `submission_number` = $id";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                $data .= $result->fetch_assoc()["data_string"];

                // for each attachment, add link
                $query = "SELECT `name` FROM `output_images` WHERE `submission_number` =$id";
                $result = mysqli_query($conn, $query) or die('query failed.');
                $file = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $name =$file['name'];

                $content = str_replace("</form>", "</form><p><a href=\"download.php?id=$id\">$name</a></p>", $content);

                $conn->close();
            }
            else {

                $content = str_replace("<article>", "<article><p class=\"syserror\">Error fetching record with ID $id: found $result->num_rows database rows.</p>", $content);
                $conn->close();
                return $content;
            }

            $data .= ";\n\$('form').loadJSON(data);\n</script>\n";

            $content = str_replace("</body>", "$data </body>", $content);
        }
        else {
            // For public users, who get blank form.
            // TODO: test this with database storage
            // hide all elements with internaluse class
            $hidden = "<style>.internaluse { display: none; } </style>";

            $content = str_replace("</head>", "$hidden </head>", $content);
        }

        return $content;

    }

    ob_start('load_scripts');


?>
