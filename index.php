<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>File upload</title>
    <meta name="author" content="Matej">


</head>

<body>
<form method="POST" action="upload.php" id="profileData" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col">
            <div class="form-group">
                <label for="filename">Filename</label>
                <input name="filename" type="text" id="filename" class="form-control" placeholder="File name">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="upfile">Upload file</label>
        <input name="upfile" type="file" class="form-control" id="upfile">
    </div>
    <div class="form-group">
        <button type="button" id="submit" class="btn btn-outline-primary">Submit</button>
    </div>
</form>

<script src="js/script.js"></script>

</body>
</html>
<?php

