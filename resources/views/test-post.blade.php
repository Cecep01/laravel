<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <center><h1>Data Post</h1></center>
    @foreach ($query as $tampil)
    <h2>{{$tampil->title}}</h2>
    <h2>{{$tampil->content}}</h2>
    <hr>

    @endforeach

</body>
</html>
