<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO LARAVEL</h1>


@php
$username = "biya123";
$email = "biya@gmail.com";
@endphp

<h2>
    {{$username}}
    {{$email}}
</h2>

@if($username == "biya123")
<h3>condition is true {{$username}}</h3>
@else
<h3>condition is false {{$username}}</h3>
@endif


</body>
</html>