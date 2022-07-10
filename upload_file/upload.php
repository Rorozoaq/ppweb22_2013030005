<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>file handling</title>
</head>
<body>
    <h2>Upload file</h2>
    <form action="upload_file.php" method="post" enctype="multipart/form-data">
        Select file to upload;<br>
        <input type="file" name="fileToUpload"><br>
        <input type="submit" value="Upload File" name="submit">
</form>
</body>