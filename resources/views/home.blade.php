<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>

<body>
    @extends("layouts.main")

    @section("content") 
    <h1>{{$salute}}</h1>
    <p>This is my body</p>
    @endsection
    
</body>

</html>