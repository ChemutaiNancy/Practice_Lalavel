<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Database Record: Eloquent</title>
</head>
<body>
    <form action="delete" method="post">
    @csrf
        <select name="id">
            <option value="1">Samsung</option>
            <option value="2">Google</option>
            <option value="3">Safaricom</option>
        </select>
        <br><br>
        <button type="submit">Delete Record</button>
    </form>
</body>
</html>