@extends('surat.layouts')
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     font awesome
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dai+Banna+SIL:wght@500&family=Hind+Madurai:wght@300&family=Montserrat&family=Oswald:wght@700&family=PT+Sans+Narrow:wght@700&family=Poppins&family=Roboto+Serif:opsz,wght@8..144,700&family=Tilt+Prism&display=swap" rel="stylesheet">  
    


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
    <title>Surat Tugas</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Assistant&family=Baloo+Bhaina+2&family=Dai+Banna+SIL:wght@500&family=Hind+Madurai:wght@300&family=Montserrat&family=Oswald:wght@700&family=PT+Sans+Narrow:wght@700&family=Poppins&family=Red+Hat+Display&family=Roboto+Serif:opsz,wght@8..144,700&family=Roboto+Slab&display=swap');
    ul{
      margin-left: -30px;
    }
    .logo{
          text-align: center;
          display: flex;
          transition: all 0.5s ease;
          margin: 30px 0 0 20px;
          margin-left: 50px;
          width: 50px;
          height: 45px;
         }
         .logo-span{
          text-align: center;
          display: flex;
          margin-left: 130px;
          margin-top: -30px;
         }
         ul li a{
          position: relative;
          color: black;
          font-size: 15px;
          display: table;
          width: 280px;
          padding: 5px;
          
         }
         .nav-item{
          font-weight: bold;
          font-size: 15px;
          top: 9px;
          margin-left: 30px;
          padding-top: 9px;
          
         }
         .active {
          background: #dfe9f5;
          color: blue;
      }
</style>
 

@section('head')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
@endsection
@section('content')
  <div class="container">
  <div class="judul">
    <h3 style="margin-left: 500px; margin-top:110px; font-size:40px;">FORM INPUT SPPD</h3>
    <hr style="width: 1125px; margin-left: 110px;">
  </div>
    <div class="navbar-label">
    </div>
    <!--Form input-->
    <form class="" method="post" id="" action="/sppd/add" style="margin-left: 320px; margin-top: 90px;" enctype="multipart/form-data">
      <div class="row g-3" id="rowId">
    @csrf
   
  <!-- kolom sppd -->
  <div class="col-3">
  <label for="">No SPPD</label>
      <input type="text" class="form-control" placeholder="Masukan SPPD" name="no_sp2d" value="{{ old('no_sp2d')}}">
  </div>
  <div class="col-3">
  <label for="">Tanggal SPPD</label>
      <input type="date" class="form-control" name="tgl_sp2d" value="{{ old('tgl_sp2d')}}">
  </div>
  
  <div class="col-4">
      <label for="inputEmail4" class="form-label" style="font-family: 'Poppins',sans serif;">Upload SPPD</label>
      <input type="file" value="{{old('upload_sppd')}}" class="form-control @error('upload_sppd') is-invalid @enderror" id="validationCustom01" name="upload_sppd" placeholder=""> 
      @error('upload_sppd')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
 
 
  </div>
  <div class="row g-3 mt-4 " >
    <div class="col-12" style="margin-top: 30px;">
      <button type="submit" id="btn" class="btn btn-primary">Submit</button>
      <!-- <button class="btn btn-success" id="sppdPlus">Add</button> -->
    </div>
    </div>
</form>
    </div>
<script src="/dist/sweetalert2.all.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
  $(document).ready(function() {
    var count = 2;
    $("#sppdPlus").click(function (event) { 
      event.preventDefault();
      var html = `
            <br> <br>
            <div class="col-12 mt-5"><h6>SPPD ${count}</h6></div>
            <hr>
            <div class="col-3 mt-2">
            <label for="">No SPM</label>
                <input type="text" class="form-control" name="no_spm[]" value="">
            </div>
            <div class="col-3 mt-2">
            <label for="">No SPPD</label>
                <input type="text" class="form-control" name="no_sp2d[]" value="">
            </div>
            <div class="col-3 mt-2">
            <label for="">Tanggal SPPD</label>
                <input type="date" class="form-control" name="tgl_sp2d[]" value="">
            </div>
            <div class="col-3 mt-2">
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
                <input type="date" class="form-control" name="tgl_masuk_hotel[]" value="">
            </div>
            <div class="col-3">
            <label for="">Tanggal Keluar Hotel</label>
                <input type="date" class="form-control" name="tgl_keluar_hotel[]" value="">
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
@endsection