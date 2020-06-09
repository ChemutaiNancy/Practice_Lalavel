<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data in to the Database using Form: Eloquent</title>
</head>
<body>
    <form action="submit" method="post">
        @csrf
        <input type="text" name="name" placeholder="Company Name">
        <br><br>
        <input type="text"name="address" placeholder="Company Address">
        <br><br>
        <button type="submit">Submit Data</button>
    </form>
</body>
</html>