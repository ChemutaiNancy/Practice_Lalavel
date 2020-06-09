<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
</head>
<style>
    .page-item
    {
        display:inline-block;
        padding:10px;
    }
</style>
<body>
   <div>
   @foreach($data as $item)
    <li>{{$item->name}}</li>
   @endforeach
   </div>

   <div>
   {{$data->links()}}
   </div>
</body>
</html>