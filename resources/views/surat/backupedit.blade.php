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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Surat Tugas</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cabin&family=Caprasimo&family=Inconsolata:wght@600&family=Laila:wght@300&family=Lalezar&family=Noto+Sans:wght@500&family=Poppins&display=swap');
    *{
        padding: 0;
        margin: 0;
    }
    body{

    }
    .container{
        padding: 40px;
        margin-left: 275px;
        margin-top: 25px;
        width: 56%;
        border-radius: 3px;
    }
    .judul h3{
        /* padding-left: 43%; */
        text-align: center;
        padding-top: 50px;
        font-weight: bold;
        font-size: 20px;
        font-family: 'Poppins', sans-serif;
        letter-spacing: 3px;
    }
    .col{
      padding-left: 20px;
    }
    #checkbox{
      margin-left: 80px;
    }
</style>
<body>
  <div class="judul">
    <h3>Edit Surat Tugas</h3>
  </div>
  <div class="container">
    <div class="navbar-form">
    </div>
    <!--Form input-->
    <form class="row g-3" method="post" action="{{ route('updateSurat', $allData->id) }}">
    @csrf
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Nomor Surat Tugas</label>
      <input type="number" min="0" max="9999" value="{{$nmrSurat}}" class="form-control @error('no_srt_tgs') is-invalid @enderror" id="validationCustom01" name="nmr_srt_tgs" placeholder="Masukan Nomor">
      @error('no_srt_tgs')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Tanggal</label>
      <input type="date" class="form-control @error('tgl_srt_tgs') is-invalid @enderror" value="{{$allData->tgl_srt_tgs}}"  name="tgl_srt_tgs" id="validationCustom02">
      @error('tgl_srt_tgs')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-12">
      <label for="checkbox">Nama Pegawai</label>
      <div class="col-12">
        <select name="pegawai" id="" class="form-select">
          <option value="{{$allData->pegawai->id}}" selected hidden>{{$allData->pegawai->nama}}</option>
          @foreach($pegawai as $pgw)
            <option value="{{$pgw->id}}">{{$pgw->nama}}</option>
          @endforeach
        </select>
      </div>
        <div class="w-100"></div> 
    </div>
    <div class="row align-items-start">

    <div class="col">
        <!-- loop pegawai slr -->
      
          <!-- <div class="col"><input type="checkbox" class="form-check-input" name="pegawai_[]" id="cek_$dat->id" value="$dat->id"  in_array($dat->id, old('pegawai_', [])) ? 'checked' : ''  > <label for="cek_$dat->id" class="form-check-label">$dat->nama</label> </div>
          <div class="w-100"></div>  -->
      
      </div>
    </div>
     

    <!-- <div class="row align-items-center">
      <div class="col">
    <input type="checkbox" id="checkbox" name="checkbox_name" value="1" />yanto spd
    <input type="checkbox" id="checkbox" name="checkbox_name" value="1" />yanto spd
    </div>  
  </div>
  <div class="row align-items-end">
    <div class="col">
    <input type="checkbox" id="checkbox" name="checkbox_name" value="1" />pidiN spd
    <input type="checkbox" id="checkbox" name="checkbox_name" value="1" />pidiN spd
    </div> -->
 
  

  <!-- <div class="col-1" style="margin-top:48px;">
    <button class="btn btn-success float-end" id="addnon" ><i class="fas fa-plus"></i></button>
  </div> -->
  <div class="col-12">
    <div id="target"></div>
  </div>
  <div class="col-12">
    <h6>Tanggal Perjadin</h6>
  </div>
  <div class="col-6">
    <label for="inputPassword4" class="form-label">Mulai</label>
    <input type="date" class="form-control" value="{{$allData->tgl_perjadin_mulai}}"  name="tgl_perjadin_mulai" id="validationCustom02">
  </div>
  <div class="col-6">
    <label for="inputPassword4" class="form-label">Selesai</label>
    <input type="date" class="form-control" value="{{$allData->tgl_perjadin_selesai}}"  name="tgl_perjadin_selesai" id="validationCustom02">
  </div>
  <div class="col-6">
    <div class="form-group">
      <label for="">Kota Asal</label>
      <input type="text" class="form-control " name="kota_asal" value="{{$allData->kota_asal}}">
    </div>
  </div>
  <div class="col-6">
    <div class="form-group">
      <label for="">Kota Tujuan</label>
      <input type="text" class="form-control" name="kota_tujuan" value="{{$allData->kota_tujuan}}">
    </div>
  </div>
  <div class="col-9">
    <div class="form-group">
      <label for="">Uraian Tugas</label>
      <input type="text" class="form-control" name="uraian_tugas" value="{{$allData->uraian_tugas}}">
    </div>
  </div>
  <div class="col-3">
    <label for="">Nomor Nota Dinas</label>
    <input type="text" class="form-control" name="no_nodin"  value="{{$allData->no_nodin}}">
  </div>
  <div class="col-5">
    <label for="">No SPPD</label>
    <select name="sppd" id="" class="form-select">
      <option value="1" selected disabled hidden>Pilih</option>
      <option value="1" selected class="text-muted">Belum Ada</option>
      @foreach($sppd as $sp)
        <option value="{{$sp->id}}">{{$sp->no_sp2d}}</option>
      @endforeach
    </select>
  </div>
  
 
    <!--
  <div class="col-md-6">
    <label for="inputCity" class="form-label">NIP/NIK</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Masukan NIP/NIK">
  </div>

  <div class="col-md-4">
    <label for="inputState" class="form-label">GOL</label>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>

  </div>
-->
  <div class="col-12">
    <button type="submit" id="btn" class="btn btn-warning">Selesai</button>

    <script src="/dist/sweetalert2.all.min.js"></script>
    
  </div>
</form>
    </div>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
  $(document).ready(function() {
    $("#addnon").click(function(event) {
      event.preventDefault();
      
    });
  });
</script>
</body>
</html>
