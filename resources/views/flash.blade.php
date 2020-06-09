<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Session</title>
</head>
<body>
    <form action="flash" method="post">
    <input type="text" name="user">
    @csrf
    <button type="submit">Submit Data</button>
    </form>
</body>
</html>