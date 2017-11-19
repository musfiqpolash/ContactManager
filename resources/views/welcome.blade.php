<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>
    @foreach($names as $name)
    <p>welcome {{$name->name}} your home town : {{$name->address}}</p>
    @endforeach
</body>
</html>