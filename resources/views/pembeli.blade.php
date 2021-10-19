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
    {{$data->id}} <br>
    {{$data->nama_pelanggan}} <br>
    {{$data->nama_supplier}} <br>
    {{$data->qty}} <br>
    {{$data->tgl}}
       <hr>





    @endforeach

</body>
</html>
