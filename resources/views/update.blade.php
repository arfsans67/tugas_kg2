<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="head" class="container-fluid pb-5 bg-info text-white">
<form  action="/edit" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<table>
        <tr>
    @foreach($data as $b)
           <td align="center" bgcolor="green" >Id siswa : {{ $b->idsiswa}}</td><td><input type="hidden" name="idSiswa" value="{{$b->idsiswa}}"></td>
            
            </tr>
            <tr>
                <td align="center" bgcolor="green" >Nama Siswa :</td><td><input type="text" id="NamaSiswa" name="NamaSiswa"  class="form-control" value="{{$b->NamaSiswa}}"></td>
            </tr>
            <tr>
                <td align="center" bgcolor="green" >Alamat :</td><td><input type="text" id="Alamat" name="Alamat"  class="form-control" value="{{$b->Alamat}}"></td>
            </tr>
            <tr>
                <td align="center" bgcolor="green" >Kelas :</td><td><input type="number" id="Kelas" name="Kelas" min="1" max="100" class="form-control" value="{{$b->Kelas}}"></td>
            </tr>
            
                 

            
        </table>


     </br>
        
<input type="submit" class="btn btn-danger" value="Edit">
    </form>
</div>
    @endforeach
</body>
</html>