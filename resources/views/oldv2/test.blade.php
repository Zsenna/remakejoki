<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tst</title>
</head>

<body>
    @foreach ($mainbox as $main)
    <h1>{{$main['itemDesc']}}</h1>
    @endforeach
</body>

</html>