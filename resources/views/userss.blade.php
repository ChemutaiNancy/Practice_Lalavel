<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Tutorial</title>
</head>
<body>
    <form action="usersscontroller" method="POST">
    @csrf
    <input type="text" name="user">
    @error('user')
    <div>{{$message}}</div>
    @enderror
    <input type="password" name="password">
    @error('password')
    <div>{{$message}}</div>
    @enderror
    <button type="submit">Submit</button>
    </form>
</body>
</html>