<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>    
    @foreach ($data as $data2)
   id : {{$data2['id']}} <br>
   Nama : {{$data2['nama']}} <br>
   Username : {{$data2['username']}} <br>
   Email : {{$data2['email']}} <br>
   Alamat : {{$data2['alamat']}} <br>
   Mapel Pelajaran :
   <ul>
   @foreach ($data2['mapel'] as $data3)
            <li>{{$data3}}</li>



   @endforeach
</ul>
<hr>


    @endforeach


</body>
</html>
