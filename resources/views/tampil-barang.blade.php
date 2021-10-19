<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data Post</h1>
    @foreach ($a as $data)
    {{$data->id_barang}} <br>
    {{$data->nama}} <br>
    {{$data->varian}} <br>
    {{$data->harga_beli}} <br>
    {{$data->harga_jual}}
       <hr>





    @endforeach

</body>
</html>
