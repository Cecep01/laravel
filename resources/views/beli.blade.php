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
    {{$data->nama}} <br>
    {{$data->jk}} <br>
    {{$data->alamat}} <br>
    {{$data->kode_pos}} <br>
    {{$data->kota}} <br>
    {{$data->tgl_lahir}} <br>
       <hr>





    @endforeach

</body>
</html>
