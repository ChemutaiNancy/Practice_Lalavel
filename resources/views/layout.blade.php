<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Name - @yield('title')</title>
</head>
<body>
    @section('header')
    <div class="header">
        <h1>Header Part</h1>
    </div>
    @show

    <div class="content">
    @yield('content')
    </div>

    @section('footer')
    <div class="footer">
        <h1>Footer Part</h1>
    </div>
    @show
</body>

<style>
.header
{
    background-color: antiquewhite;
    padding: 20px;
    text-align: center;
}

.footer
{
    background-color: antiquewhite;
    padding: 20px;
    text-align: center;
    position: 'center'
    bottom: 0;
}

.content
{
   height: 350px;
   background-color: bisque;
   padding: 20px;
}

body
{
    margin: 0
}
</style>
</html>