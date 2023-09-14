<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leenautos</title>
</head>
<body>

    @foreach ($leenautos as $leenauto)
        {{ $leenauto->merk }}, {{ $leenauto->type }}, {{ $leenauto->bouwjaar }} 
        <a href="{{ url('edit/' . $leenauto->autonummer) }}">Edit</a> 

        <form action="index/{autonummer}" method="post">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-primary">
            Delete
        </button>
        </form>

        <br>
    @endforeach
    
</body>
</html>