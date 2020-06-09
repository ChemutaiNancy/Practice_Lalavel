<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch data From Database: Eloquent</title>
</head>
<body>
    <div>
        <ul>
            @foreach($data as $data)
                <li>{{$data->name}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>