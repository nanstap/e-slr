<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dai+Banna+SIL:wght@500&family=Hind+Madurai:wght@300&family=Montserrat&family=Oswald:wght@700&family=PT+Sans+Narrow:wght@700&family=Poppins&family=Roboto+Serif:opsz,wght@8..144,700&family=Tilt+Prism&display=swap" rel="stylesheet">  
    


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Surat Tugas</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Assistant&family=Baloo+Bhaina+2&family=Dai+Banna+SIL:wght@500&family=Hind+Madurai:wght@300&family=Montserrat&family=Oswald:wght@700&family=PT+Sans+Narrow:wght@700&family=Poppins&family=Red+Hat+Display&family=Roboto+Serif:opsz,wght@8..144,700&family=Roboto+Slab&display=swap');
*{
        padding: 0;
        margin: 0;
    }
    body{
      background-color: white;
    }
    .container{
      padding: 40px;
      margin-left: 135px;
      margin-top: 90px;
      width: 80%;
      height: 120%;
      border-radius: 5px;
      background-color: white;
      box-shadow: 1px 2px 3px .1px black;
     
    }
    .judul h3{
        /* padding-left: 43%; */
        padding-top: -5px;
        padding-left: 10px;
        font-weight: 400;
        font-size: 35px;
        font-family: 'Baloo Bhaina 2';
        font-style: bold;
        /* letter-spacing: 3px; */
        color: black;
        text-align: center;
        
    }
    .col{
      padding-left: 20px;
    }.col-4{
      margin-left: 40px;
    }
    #checkbox{
      margin-left: 80px;
    }
    form{
      padding-top: 20px;
    }
    h6{
      padding-top: 10px;
      font-size: 20px;
    }
    label{
      font-family: 'Baloo Bhaina 2', cursive;
      font-size: 16px;
    }
    .header{
      background-color: yellow;
      width: 100%;
      height: 75px;
    }
    img{
      width: 40px;
      padding-top: 20px;
      margin-left: 40px;
    }
    p{
      font-size: 15px;
      font-family: 'Roboto Slab', serif;
      margin-left: 90px;
      margin-top: -30px;
    }
    ul li{
      list-style: none;
      margin-left: 1150px;
      margin-top: -40px;
    }
    ul li a{
      font-family: 'Roboto Slab', serif;
      text-decoration: none;
      color: black;
      transition: all .3s ease-in-out;
    }
    ul li a:hover{
      box-shadow: 0px 1px 0px 0px black;
    }
</style>
<body>
  <div class="header">
    <img src="/gambar/gatrik.png" alt="">
    <p>Direktorat Jenderal Ketenagalistrikan</p>
    <ul>
      <li><a href="/surat-tugas">List Surat Tugas</a></li>
    </ul>
  </div>
  <div class="container">
  <div class="judul">
    <h3>FORM INPUT SPPD</h3>
    <hr>
  </div>
    <div class="navbar-label">
    </div>
    <!--Form input-->
    <form class="" method="post" id="" action="/sppd/add">
      <div class="row g-3" id="rowId">
    @csrf
   
  <!-- kolom sppd -->
  <h6>SPPD</h6>
  <hr>
  <div class="col-3">
  <label for="">No SPM</label>
      <input type="text" class="form-control" placeholder="Masukan SPM" name="no_spm[]" value="{{old('no_spm[]')}}">
  </div>
  <div class="col-3">
  <label for="">No SPPD</label>
      <input type="text" class="form-control" placeholder="Masukan SPPD" name="no_sp2d[]" value="{{ old('no_sp2d[]')}}">
  </div>
  <div class="col-3">
  <label for="">Tanggal SPPD</label>
      <input type="date" class="form-control" name="tgl_sp2d[]" value="{{ old('tgl_sp2d[]')}}">
  </div>
  <div class="col-3">
  <label for="">Tanggal Pergi</label>
      <input type="date" class="form-control" name="tgl_pergi[]" value="{{ old('tgl_pergi[]')}}">
  </div>
 
  <div class="col-3">
    <label for="inputPassword4" class="form-label">Maskapai Pergi</label>
    <input type="text" class="form-control" placeholder="Masukan Maskapai" value="{{ old('maskapai_pergi[]')}}" name="maskapai_pergi[]" id="validationCustom02">
  </div>
  <div class="col-3">
    <label for="inputPassword4" class="form-label">Kode Booking Pergi</label>
    <input type="text" class="form-control" placeholder="Masukan Maskapai" value="{{ old('kode_booking_pergi[]')}}" name="kode_booking_pergi[]" id="validationCustom02">
  </div>
  <div class="col-3">
    <label for="inputPassword4" class="form-label">No Tiket Pergi</label>
    <input type="text" class="form-control" placeholder="Masukan Maskapai" value="{{ old('no_tiket_pergi[]')}}" name="no_tiket_pergi[]" id="validationCustom02">
  </div>
  <div class="col-3">
    <label for="inputPassword4" class="form-label">Harga Pergi</label>
    <input type="text" class="form-control" placeholder="Masukan Maskapai" value="{{ old('harga_pergi[]')}}" name="harga_pergi[]" id="validationCustom02">
  </div>
  <div class="col-3">
  <label for="">Tanggal Pulang</label>
      <input type="date" class="form-control" name="tgl_pulang[]" value="{{ old('tgl_pulang[]')}}">
  </div>
  <div class="col-3">
  <label for="">Maskapai Pulang</label>
      <input type="text" class="form-control" placeholder="Masukan Maskapai" name="maskapai_pulang[]" value="{{ old('maskapai_pulang[]')}}">
  </div>
  <div class="col-3">
  <label for="">Kode Booking Pulang</label>
      <input type="text" class="form-control" placeholder="Masukan Kode" name="kode_booking_pulang[]" value="{{ old('kode_booking_pulang[]')}}">
  </div>
  <div class="col-3">
  <label for="">No Tiket Pulang</label>
      <input type="text" class="form-control" placeholder="Masukan No Tiket" name="no_tiket_pulang[]" value="{{ old('no_tiket_pulang[]')}}">
  </div>
  <div class="col-3">
  <label for="">Harga Pulang</label>
      <input type="text" class="form-control" placeholder="Masukan Nominal" name="harga_pulang[]" value="{{ old('harga_pulang[]')}}">
  </div>
  <div class="col-3">
  <label for="">Tanggal Masuk Hotel</label>
      <input type="date" class="form-control" name="tgl_masuk_hotel[]" value="{{ old('tgl_masuk_hotel[]')}}">
  </div>
  <div class="col-3">
  <label for="">Tanggal Keluar Hotel</label>
      <input type="date" class="form-control" name="tgl_keluar_hotel[]" value="{{ old('tgl_keluar_hotel[]')}}">
  </div>
  <div class="col-3">
  <label for="">Jumlah Hari Hotel</label>
      <input type="text" class="form-control" placeholder="Masukan Jumlah Hari" name="jumlah_hari_hotel[]" value="{{ old('jumlah_hari_hotel[]')}}">
  </div>
  <div class="col-3">
  <label for="">Nama Hotel</label>
      <input type="text" class="form-control" placeholder="Masukan Nama Hotel" name="nama_hotel[]" value="{{ old('nama_hotel[]')}}">
  </div>
  <div class="col-3">
  <label for="">No Kamar</label>
      <input type="text" class="form-control" placeholder="Masukan Nomor" name="no_kamar[]" value="{{ old('no_kamar[]')}}">
  </div>
  <div class="col-3">
  <label for="">Tarif</label>
      <input type="text" class="form-control" placeholder="Masukan Nominal" name="tarif[]" value="{{ old('tarif[]')}}">
  </div>
  <div class="col-12">
    <script src="/dist/sweetalert2.all.min.js"></script>
  </div>
  </div>
  <div class="row g-3 mt-1">
    <div class="col-12">
      <button type="submit" id="btn" class="btn btn-primary">Submit</button>
      <button class="btn btn-success" id="sppdPlus">Add</button>
    </div>
    </div>
</form>
    </div>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
  $(document).ready(function() {
    var count = 2;
    $("#sppdPlus").click(function (event) { 
      event.preventDefault();
      var html = `
            <h6>SPPD ${count}</h6>
            <hr>
            <div class="col-3">
            <label for="">No SPM</label>
                <input type="text" class="form-control" name="no_spm[]" value="">
            </div>
            <div class="col-3">
            <label for="">No SPPD</label>
                <input type="text" class="form-control" name="no_sp2d[]" value="">
            </div>
            <div class="col-3">
            <label for="">Tanggal SPPD</label>
                <input type="date" class="form-control" name="tgl_sp2d[]" value="">
            </div>
            <div class="col-3">
            <label for="">Tanggal Pergi</label>
                <input type="date" class="form-control" name="tgl_pergi[]" value="">
            </div>
          
            <div class="col-3">
              <label for="inputPassword4" class="form-label">Maskapai Pergi</label>
              <input type="text" class="form-control" placeholder="Masukan Maskapai"  name="maskapai_pergi[]" id="validationCustom02">
            </div>
            <div class="col-3">
              <label for="inputPassword4" class="form-label">Kode Booking Pergi</label>
              <input type="text" class="form-control" placeholder="Masukan Maskapai"  name="kode_booking_pergi[]" id="validationCustom02">
            </div>
            <div class="col-3">
              <label for="inputPassword4" class="form-label">No Tiket Pergi</label>
              <input type="text" class="form-control" placeholder="Masukan Maskapai"  name="no_tiket_pergi[]" id="validationCustom02">
            </div>
            <div class="col-3">
              <label for="inputPassword4" class="form-label">Harga Pergi</label>
              <input type="text" class="form-control" placeholder="Masukan Maskapai"  name="harga_pergi[]" id="validationCustom02">
            </div>
            <div class="col-3">
            <label for="">Tanggal Pulang</label>
                <input type="date" class="form-control" name="tgl_pulang[]" value="">
            </div>
            <div class="col-3">
            <label for="">Maskapai Pulang</label>
                <input type="text" class="form-control" name="maskapai_pulang[]" value="">
            </div>
            <div class="col-3">
            <label for="">Kode Booking Pulang</label>
                <input type="text" class="form-control" name="kode_booking_pulang[]" value="">
            </div>
            <div class="col-3">
            <label for="">No Tiket Pulang</label>
                <input type="text" class="form-control" name="no_tiket_pulang[]" value="">
            </div>
            <div class="col-3">
            <label for="">Harga Pulang</label>
                <input type="text" class="form-control" name="harga_pulang[]" value="">
            </div>
            <div class="col-3">
            <label for="">Tanggal Masuk Hotel</label>
                <input type="text" class="form-control" name="tgl_masuk_hotel[]" value="">
            </div>
            <div class="col-3">
            <label for="">Tanggal Keluar Hotel</label>
                <input type="text" class="form-control" name="tgl_keluar_hotel[]" value="">
            </div>
            <div class="col-3">
            <label for="">Jumlah Hari Hotel</label>
                <input type="text" class="form-control" name="jumlah_hari_hotel[]" value="">
            </div>
            <div class="col-3">
            <label for="">Nama Hotel</label>
                <input type="text" class="form-control" name="nama_hotel[]" value="">
            </div>
            <div class="col-3">
            <label for="">No Kamar</label>
                <input type="text" class="form-control" name="no_kamar[]" value="">
            </div>
            <div class="col-3">
            <label for="">Tarif</label>
                <input type="text" class="form-control" name="tarif[]" value="">
            </div>
            </div>
      `;
      count++;
      $("#rowId").append(html);
     });
    
  });
</script>
</body>
</html>
