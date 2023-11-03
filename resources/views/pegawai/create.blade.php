<!-- <!DOCTYPE html>
<html lang="en">
<head> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Tambah Pegawai</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cabin&family=Caprasimo&family=Inconsolata:wght@600&family=Laila:wght@300&family=Lalezar&family=Noto+Sans:wght@500&family=Poppins&display=swap');
    *{
        padding: 0;
        margin: 0;
    }
    body{
      font-family: 'Poppins', sans-serif;
    }
    label{
      font-weight: bold;
    }
    .container{
        padding: 40px;
        margin-left: 275px;
        margin-top: 25px;
        width: 56%;
        border-radius: 3px;
    }
    .judul h3{
       margin-top: 20px;
        text-align: center;
        padding-top: 50px;
        font-weight: bold;
        font-size: 30px;
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
    <h3>FORM INPUT PEGAWAI</h3>
  </div>
  <div class="container">
    <div class="navbar-form">
    </div>
    <!--Form input-->
    <form class="row g-3" method="post" action="{{ route('storePegawai') }}" style="margin-top: 20px; margin-left: 50px;">
    @csrf
    <div class="col-md-7">
      <label for="inputEmail4" class="form-label">Nama Pegawai</label>
      <input type="input" min="0" max="9999" value="{{old('nama')}}" class="form-control @error('nama') is-invalid @enderror" id="validationCustom01" name="nama" placeholder="Masukan Pegawai">
      @error('nama')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-md-5">
      <label for="inputPassword4" class="form-label">NIP/NIK</label>
      <input type="input" placeholder="Masukan NIP/NIK" class="form-control @error('nip') is-invalid @enderror" value="{{old('nip')}}"  name="nip" id="validationCustom02">
      @error('nip')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
  <div class="col-6">
    <label for="inputPassword4" class="form-label">Jabatan</label>
    <input type="input" class="form-control @error('jabatan') is-invalid @enderror" placeholder="Masukan Jabatan" value="{{old('jabatan')}}"  name="jabatan" id="validationCustom02">
    @error('jabatan')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="col-6">
    <label for="inputPassword4" class="form-label">Golongan</label>
    <input type="input" placeholder="Masukan Golongan" value="{{old('gol')}}" class="form-control @error('gol') is-invalid @enderror"   name="gol" id="validationCustom02">
    @error('gol')
      <div class="alert-danger" style="color: red;">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-6">
    <div class="form-group">
      <label for="">Unit</label>
      <input type="input" class="form-control @error('unit') is-invalid @enderror" value="{{old('unit')}}" name="unit" placeholder="Masukan Unit">
    </div>
    @error('unit')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-6">
    <div class="form-group">
      <label for="">Status</label>
      <select name="status" id="" class="form-select @error('status') is-invalid @enderror">
        <option value="" hidden disabled selected>Pilih Status</option>
        <option value="1">SLR</option>
        <option value="2">NON SLR</option>
      </select>
      <!-- <input type="input" placeholder="Masukan Status" class="form-control" name="kota_tujuan" value=""> -->
    </div>
    @error('status')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-12">
    <button type="submit" id="btn" class="btn btn-primary">Submit</button>

    <script src="/dist/sweetalert2.all.min.js"></script>
    
  </div>
</form>
    </div>

</body>
</html>
