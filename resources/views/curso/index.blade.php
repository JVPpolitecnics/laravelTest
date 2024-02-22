<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($cursos as $item)
    <p>This is item {{ $item->getSigles() }}</p>
@endforeach
</body>
</html>