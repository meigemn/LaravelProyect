<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($category!=null){
        <h1>Aqui se mostrara el post{{$post}} de la categoria {{$category}}</h1>
    }@else{
        <h1>Aqui se mostrara el post {{$post}}</h1>
    }
    @endif
</body>
</html>