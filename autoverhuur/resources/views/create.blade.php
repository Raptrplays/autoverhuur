<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="store" method="POST">
    @csrf
    <div class="form-group">
        <label for="merk">Merk</label>
        <input type="text" id="merk" name="merk" placeholder="automerk">
    </div>

    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" id="type" name="type" placeholder="autotype">
    </div>

    <div class="form-group">
        <label for="bouwjaar">Bouwjaar</label>
        <input type="number" id="bouwjaar" name="bouwjaar" placeholder="autobouwjaar">
    </div>

    <div>
        <button type="submit">Opslaan</button>
    </div>
    </form>
        
</body>
</html>