<!DOCTYPE html>
<title>File uploader</title>

<html>
    <body>

    <form action="/" method="post" enctype="multipart/form-data">
        Upload file:<br/>
        <input type="file" name="uploaded_file" id="uploaded_file">
        <input type="submit" value="Upload File" name="submit">
    </form>

    </body>
</html>

<?php
    $upload_dir = __DIR__ . "/";

    if (isset($_POST["submit"])) {
        $tmp_zip = $_FILES["uploaded_file"]["tmp_name"];
        move_uploaded_file($tmp_zip, $upload_dir . $_FILES["uploaded_file"]["name"]);
    }
?>