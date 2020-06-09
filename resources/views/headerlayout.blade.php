<!DOCTYPE html>
<html lang="en">
<head>
@section('head')
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" media="screen" type="text/css">
    <script src="{{asset('js/app.js')}}"></script>
    @show
</head>

<script>
$(document).ready(function()
{
    console.warn('echo code')
})
</script>
<body>
    @section('header')
    <div class="header">
    <h1>Header Part</h1>
    </div>
    @show


    <!-- @section('footer')
    <div class="footer">
    <h1>Footer Part</h1>
    </div>
    @show -->
</body>
</html>