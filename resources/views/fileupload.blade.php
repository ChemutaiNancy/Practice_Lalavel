<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="fileupload" method="post" enctype="multipart/form-data">
        <input type="file" name="user_img">
        @csrf
        <br><br>
        <button type="submit">Upload Image</button>
    </form>
</body>
</html>