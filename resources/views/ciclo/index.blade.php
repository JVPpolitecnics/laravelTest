<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach ($cicles as $item)
    <p>This is item {{ $item->getSigles() }}</p>
    <p>This is item {{ $item->getNom() }}</p>
@endforeach

</body>
</html>