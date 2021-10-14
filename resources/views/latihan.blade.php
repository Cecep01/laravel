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
    @foreach ($latihan as $data2)
   Nis : {{$data2['nis']}} <br>
   Nama : {{$data2['nama']}} <br>
   Kelas : {{$data2['kelas']}} <br>

   Hobi :
   <ul>
   @foreach ($data2['hobi'] as $data3)
            <li>{{$data3}}</li>



   @endforeach
</ul>
<hr>


    @endforeach


</body>
</html>
