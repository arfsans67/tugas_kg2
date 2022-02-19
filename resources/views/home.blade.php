<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.1.3-dist/css/bootstrap.css')}}">
    <script src="{{ asset('bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('jquery-3.6.0.min.js')}}"></script>
    <script type="text/javascript"> 
    function datasiswa(){
                      $.ajax({
                      type:"GET",
                      url:"/tabel"
                      }).done(function(data){
                      $('#tabel').html(data);
                      });
                      }
    
    function caridata(){
        var idsiswa = document.getElementById("idsiswa").value;
        $.ajax({
                      type:"GET",
                      url:"/cari/"+idsiswa
                      }).done(function(data){
                      $('#tabel').html(data);
                      alert("Data ditemukan sayang");
                      });
                   }
    </script>
    

</head>
<body onload="datasiswa();">
<h1 class="container-fluid p-5 bg-dark text-white" style="text-align:center">Nama-Nama Siswa <h1>
    <h2>Data Siswa</h2>
    
    <br/>
    <label for="idsiswa">Masukkan id Siswa yang ingin dicari</label>
    <table>
        <tr>    
    <td><input type="text" id="idsiswa" class="form-control form-control" style="width: 300px;"></td>
    <td><button type="button" id="submit" class="btn btn-success btn" style="width:100px;" onclick="caridata();">Search</button></td>
    <td><button type="button" id="all" class="btn btn-danger btn" style="width:125px;" onclick="datasiswa();">Lihat Semua</button></td>    
        </tr>
    </table>
    <br/>
    <br/>
    
    
    <button type="button" id="isi" class="btn btn-info btn" data-bs-toggle="modal" data-bs-target="#ModalInsert">Tambah Data Siswa</button>
    
    
    <p></p>

    <div id="tabel">
    </div>

    <div class="modal" id="ModalInsert">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">

    <form action="/tambah" method="post" enctype="multipart/form-data" id="formdata">
    {{ csrf_field() }}

    <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data  Siswa</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
    

    <!-- Modal body -->
    <div class="modal-body">
    <table>
    <tr>
        <td>Id Siswa :</td><td><input type="text" id="idsiswa" name="idsiswa" class="form-control"></td>
    </tr>
    <tr>
                <td>Nama Siswa :</td><td><input type="text" id="NamaSiswa" name="NamaSiswa"  class="form-control"></td>
            </tr>
            <tr>
                <td>Alamat :</td><td><input type="text" id="Alamat" name="Alamat"  class="form-control"></td>
            </tr>
            <tr>
                <td>Kelas :</td><td><input type="number" id="Kelas" name="Kelas" min="1" max="100" class="form-control"></td>
            </tr>
    
        </table>
        </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-danger" value="submit" id="submit">
      </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>