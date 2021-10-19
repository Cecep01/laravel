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
    <ul>
    @foreach ($query as $tampil)
    Nama :{{$tampil->nama}} <br>
    Tanggal Lahir:{{$tampil->tanggal_lahir}} <br>
    Jenis Kelamin :{{$tampil->jk}} <br>
    Alamat :{{$tampil->alamat}} <br>
    Agama :{{$tampil->agama}} <br>
    Umur :{{$tampil->umur}} <br>
    Hobby :{{$tampil->hobi}} <br>

    <hr>

    @endforeach

</body>
</html>
