<!DOCTYPE html>
<html>
<head>
    <title>Multiple File Upload</title>
</head>
<body>

<h2>Upload Multiple Files</h2>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple>
    <br><br>
    <input type="submit" value="Upload">
</form>

</body>
</html>
