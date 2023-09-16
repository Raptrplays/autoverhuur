<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('edit/update/' . $auto->autonummer) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="merk">Merk</label>
            <input type="text" id="merk" name="merk" value=" {{ $auto->merk }} " placeholder="automerk">
        </div>
    
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" id="type" name="type" value=" {{ $auto->type }}" placeholder="autotype">
        </div>
    
        <div class="form-group">
            <label for="bouwjaar">Bouwjaar</label>
            <input type="text" id="bouwjaar" name="bouwjaar" value=" {{ $auto->bouwjaar }}" placeholder="autobouwjaar">
        </div>
    
        <div>
            <button type="submit">Opslaan</button>
        </div>
    </form>
            
</body>
</html>