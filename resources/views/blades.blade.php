<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use of Blades</title>
</head>
<body>
    <div>{{$data['name']}}</div>
    
    <div>
    @if($data['name'] == 'Nancy')
    Hi, this is me
    @elseif($data['name'] == 'anil')
    Hi, this s a friend
    @else
    Hi, new Buddy
    @endif
    </div>

    <div>
    @foreach($data as $item)
    <!-- <li>{{$item}}</li> -->
    <li>{!!$item!!}</li>
    @endforeach
    </div>
</body>

<script>
var a = @json($data);
console.log('PHP code in js', a);
</script>
</html>