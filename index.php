<html>
<body>
<a href="https://php-storage-testapp.azurewebsites.net/phpQS.php">Test</a>
<br /><br />
<a href="https://php-storage-testapp.azurewebsites.net/phpQS.php?Create">Create Container</a>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>

</body>

</html>