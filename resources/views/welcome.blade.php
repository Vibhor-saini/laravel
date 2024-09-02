<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h1 style="text-align: center;">{{$message}} this is welcome page</h1>
    @foreach($items as $item)
    {{$item}}</br>
    @endforeach

</body>
</html>


