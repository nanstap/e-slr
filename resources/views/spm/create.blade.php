@extends('surat.layouts')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
    
  ul{
    margin-left: -40px;
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
@endsection
@section('content')
<div class="container">
  <div class="judul">
    <h3 style="margin-left: 500px; margin-top:30px; font-size:40px;">FORM INPUT SPM</h3>
    <hr style="width: 1125px; margin-left: 110px;">
  </div>
    <div class="navbar-label">
    </div>
    <!--Form input-->
    <form class="" method="post" id="" action="/spm/add" style="margin-left: 220px; margin-top: 90px;" enctype="multipart/form-data">
      <div class="row g-3" id="rowId">
    @csrf
   
  <!-- kolom spm -->
  <div class="col-3" style="margin-top: 16px;">
    <label for="inputPassword4" class="form-label">Surat Tugas</label>
    <select name="surat[]" required class="form-select" id="dropdown">
      <option value="" class=''>Pilih Surat Tugas</option>
      @foreach($st as $sas)
      <option value="{{$sas->nmr_srt_tgs}}">{{$sas->nmr_srt_tgs}}</option>
      @endforeach
    </select>
  </div>
</div>
<div class="row g-3 mt-2">
  <div class="col-4">
  <label for="">No SPM</label>
      <input type="text" class="form-control" placeholder="Masukan SPM" name="no_spm" value="{{ old('no_spm')}}">
  </div>
  <div class="col-4">
  <label for="">Tanggal SPM</label>
      <input type="date" class="form-control" name="tgl_spm" value="{{ old('tgl_spm')}}">
  </div>
  <div class="row">
  <div class="col-4 mt-4">
  <label for="">No SP2D</label>
      <input type="text" class="form-control" placeholder="Masukan SPM" name="nosp2d" value="">
  </div>
  <div class="col-4 mt-4">
  <label style="margin-left:10px;" for="">Tanggal SP2D</label>
      <input style="margin-left: 10px;" type="date" class="form-control" name="tgll_sp2d" value="">
  </div>
  <div class="row">
  <div class="col-4 mt-4">
      <label for="inputEmail4" class="form-label" style="font-family: 'Poppins',sans serif;">Upload</label>
      <input type="file" value="{{old('doc')}}" class="form-control @error('doc') is-invalid @enderror" id="validationCustom01" name="doc" placeholder=""> 
      @error('doc')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    </div>
 
 
  </div>
  <div class="row g-3 mt-4 " >
    <div class="col-12" style="margin-top: 30px;">
      <button type="submit" id="btn" class="btn btn-primary">Submit</button>
      <button class="btn btn-success" id="sppdPlus">Add</button>
    </div>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
  $(document).ready(() => {
    let i = 2;
    $("#sppdPlus").on("click", (event) => {
      event.preventDefault();
      $('#rowId').append(`
      <div class="col-3" style="margin-top: 16px;">
        <label for="inputPassword4" class="form-label">Surat Tugas ${i}</label>
        <select name="surat[]" required class="form-select" id="dropdown">
          <option value="" class=''>Pilih Surat Tugas</option>
          @foreach($st as $sas)
          <option value="{{$sas->nmr_srt_tgs}}">{{$sas->nmr_srt_tgs}}</option>
          @endforeach
        </select>
      </div>
      `);
      i++;
    });
  });
</script>
@endsection