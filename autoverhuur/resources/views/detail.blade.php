<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leenauto details</title>
</head>
<body>
@foreach ($leenautos as $leenauto)
    {{ $leenauto->merk }} {{ $leenauto->type }}, {{ $leenauto->bouwjaar }} 
@endforeach
</body>
</html>