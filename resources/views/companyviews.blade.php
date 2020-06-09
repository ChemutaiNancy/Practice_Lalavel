<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Database with HTML Form: Eloquent</title>
</head>
<body>
    <div>
        <form action="update" method="post">
            @csrf
            <select name="id">
                <option value="1">Samsung</option>
                <option value="2">Google</option>
                <option value="3">Safaricom</option>
            </select>
            <br><br>
            <input type="text" name="name">
            <br><br>
            <input type="text" name="address">
            <br><br>
            <button type="submit">Update Form</button>
        </form>
    </div>
</body>
</html>