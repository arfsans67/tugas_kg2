<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" class="table table-hover">
        <tr>
            <th>idsiswa</th>
            <th>NamaSiswa</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Action</th>
            
        </tr>
        @foreach($data as $b)
        <tr>
            <td>{{ $b->idsiswa }}</td>
            <td>{{ $b->NamaSiswa }}</td>
            <td>{{ $b->Alamat }}</td>
            <td>{{ $b->Kelas }}</td>

            <td><td> <a href="/show/{{$b->idsiswa}}"><button type="button" class="btn btn-success btn">Edit</button></a>
            <a href="/hapus/{{$b->idsiswa}}"><button type="button" class="btn btn-danger btn">Hapus</button></a>
            
        
        </tr>
        @endforeach
</table>

</body>
</html>