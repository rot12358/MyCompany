<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <div class="header">
    @include('master.header')
</div>
    <div class="tieude">
    @section('title')    
    @show
</div>
<div class ="baiviet">
    @section('content')
    @show
</div>
<div class="logo">
    @section('logo')
    @show
</div>
    @include('master.footer')
</body>

</html>