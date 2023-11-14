@extends('surat.layouts')

@section('head')
<style>
 ul{
    margin-left: -37px;
  }
  a{
    margin-right: -100px;
  }
  
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
@endsection
@section('content')
<div class="container">
  <div class="judul" style="margin-left: 450px; margin-top: 30px;">
    <h3>FORM INPUT SURAT TUGAS</h3>
  </div>
  <hr style="margin-left: 200px; border-top: 2px solid #000;">
    <!--Form input-->
    <form class="" method="post" id="" action="{{ route('storeSuratTugas') }}" style="margin-left: 200px;" enctype="multipart/form-data">
      <div class="row g-3" id="rowId">
    @csrf
    <div class="col-md-4">
      <label for="inputEmail4" class="form-label" style="font-family: 'Poppins',sans serif; font-weight:bold;">Nomor Surat Tugas</label>
      <input type="number" min="0" max="9999" value="{{old('no_srt_tgs')}}" class="form-control @error('no_srt_tgs') is-invalid @enderror" id="validationCustom01" name="no_srt_tgs" placeholder="Masukan Nomor">
      @error('no_srt_tgs')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-4">
      <label for="inputEmail4" class="form-label" style="font-family: 'Poppins',sans serif; font-weight:bold;">Upload ST</label>
      <input type="file" value="{{old('upload_st')}}" class="form-control @error('upload_st') is-invalid @enderror" id="validationCustom01" name="upload_st" placeholder=""> 
      @error('upload_st')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-4">
      <label for="inputPassword4" class="form-label" style="font-family: 'Poppins',sans serif; font-weight:bold;">Tanggal</label>
      <input type="date" class="form-control @error('tgl_srt_tgs') is-invalid @enderror" value="{{old('tgl_srt_tgs')}}"  name="tgl_srt_tgs" id="validationCustom02">
      @error('tgl_srt_tgs')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-12">
      <label for="checkbox">SLR:</label>
    </div>
    <div class="row align-items-start">

    <div class="col">
      @foreach($slr as $dat)
          <div class="col" style="margin-left: 40px;"><input type="checkbox" class="form-check-input" name="pegawai_[]" id="cek_{{$dat->id}}" value="{{$dat->id}}" {{ in_array($dat->id, old('pegawai_', [])) ? 'checked' : '' }} > <label for="cek_{{$dat->id}}" class="form-check-label">{{$dat->nama}}</label> </div>
          <div class="w-100"></div> 
      @endforeach
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
 
  
  <div class="col-11">
  <label for="inputAddress" class="form-label" style="font-family: 'Poppins',sans serif; font-weight:bold; margin-top: 10px; display: block;">NON SLR</label>
    <select id="inputAddress" class="form-select" id="validationCustom03" style="border: 1.9px groove ; border-radius: 4px; height: 40px; width: 440px; padding-left: 20px;" name="pegawai_[]">
      <option selected value="" disabled hidden> Masukan Pegawai</option>
      <option value="" class="text-muted" style="font-style: italic;">Tidak Jadi</option>
      @foreach($non as $p)
      <option value="{{ $p->id}}">{{ $p->nama}} </option>
      @endforeach
    </select>
    @error('nama')
      <div class="alert-danger" style="color: red;">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-1" style="margin-top:50px;">
    <button class="btn btn-success float-start" id="addnon" ><i class="fas fa-plus"></i></button>
  </div>
  <div class="col-12">
    <div class="" id="target" ></div>
  </div>
  <hr>
  <div class="col-12 text-center">
    <h6 style="font-family: 'Poppins',sans serif; font-weight:bold;">Tanggal Perjadin</h6>
  </div>
  <div class="col-6">
    <label for="inputPassword4" class="form-label" style="font-family: 'Poppins',sans serif; font-weight:bold;">Mulai</label>
    <input type="date" class="form-control" value="{{old('tgl_perjadin_mulai')}}"  name="tgl_perjadin_mulai" id="validationCustom02">
  </div>
  <div class="col-6">
    <label for="inputPassword4" class="form-label" style="font-family: 'Poppins',sans serif; font-weight:bold;">Selesai</label>
    <input type="date" class="form-control" value="{{old('tgl_perjadin_selesai')}}"  name="tgl_perjadin_selesai" id="validationCustom02">
  </div>
  <div class="col-6">
    <div class="form-group">
      <label for="" style="font-family: 'Poppins',sans serif; font-weight:bold; margin-top: 10px;">Kota Asal</label>
      <input type="text" class="form-control " name="kota_asal" value="Jakarta">
    </div>
  </div>
  <div class="col-6">
    <div class="form-group">
      <label for="" style="font-family: 'Poppins',sans serif; font-weight:bold; margin-top: 10px;">Kota Tujuan</label>
      <input type="text" class="form-control" placeholder="Masukan Kota" name="kota_tujuan" value="{{old('kota_tujuan')}}">
    </div>
  </div>
  <div class="col-5">
    
      <label for="" style="font-family: 'Poppins',sans serif; font-weight:bold;">Uraian Tugas</label>
      <input type="text" class="form-control" placeholder="Rincian Tugas" name="uraian_tugas" value="{{old('uraian_tugas')}}">
    
  </div>
  <div class="col-3">
    <label for="" style="font-family: 'Poppins',sans serif; font-weight:bold;">Nomor Nota Dinas</label>
    <input type="text" class="form-control" placeholder="Masukan Nodin" name="no_nodin" value="{{old('no_nodin')}}">
  </div>
  <div class="col-4">
    <label for="" style="font-family: 'Poppins',sans serif; font-weight:bold;">Nodin</label>
    <input type="file" class="form-control" placeholder="" name="upload_nd" value="{{old('upload_nd')}}">   
    @error('upload_nd')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-4">
    <label for="" style="font-family: 'Poppins',sans serif; font-weight:bold;">Surat Persetujuan</label>
    <input type="file" class="form-control" placeholder="Pilih File"  name="upload_sp" value="{{old('upload_sp')}}">
    @error('upload_sp')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
    @enderror
  </div>
 <!-- <div class="col-6">
    <label for="">No Sppd</label>
    <select name="no_sppd[]" class="form-select" id="">
      <option value="1" selected hidden disabled >Masukan SPPD</option>
      <option value="1" class="text-muted" style="font-style: italic;">Belum Ada</option>
       foreach($sppd as $s)
      <option value="$s->id">$s->no_sp2d</option>
      endforeach 
    </select>
  </div>
  <div class="col-6" style="margin-top: 44px;">
  <button class="btn btn-success float-start" id="sppdPlus" ><i class="fas fa-plus"></i></button>
  </div>-->

 
  <div class="col-12">
    <script src="/dist/sweetalert2.all.min.js"></script>
  </div>
  </div>
  <div class="row g-3 mt-1">
    <div class="col-12">
      <button type="submit" id="btn" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
      <hr>
      </form>
      <!-- <form action="{{route('sesi')}}" aria-hidden="true" method="post" style="margin-top: -58px; margin-left:77px;">
        @csrf
      <button class="btn btn-info" style="margin-top: 20px; margin-left: 20px;" >Input SPPD</button>
      </form> -->
    </div>
    </div>

    </div>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
  $(document).ready(function() {
    var count = 2;
    $("#addnon").click(function(event) {
      event.preventDefault();
      var html = `<select id="inputAddress" style='border: 1px solid grey; border-radius: 4px; height: 40px; width: 440px; padding-left: 20px;' class="form-select mt-1" id="validationCustom03" name="pegawai_[]">
                  <option selected value="" disabled hidden> Masukan Pegawai ${count}</option>
                  @foreach($non as $p)
                  <option value="{{ $p->id}}">{{ $p->nama}} </option>
                  @endforeach
                </select>`;
      $("#target").append(html);
      count++;
    });
    var i = 2;
    $("#sppdPlus").click(function(event) {
      event.preventDefault();
      var sppd = `<div class="col-6">
                  <label for="">No Sppd ${i}</label>
                  <select name="no_sppd[]" class="form-select" id="">
                    <option value="" selected hidden disabled>Masukan SPPD</option>
                    <option value="" style="font-style: italic;" class="text-muted">Batal</option>
                    @foreach($sppd as $s)
                      <option value="{{$s->id}}">{{$s->no_sp2d}}</option>
                    @endforeach
                  </select>
                </div>`;
      $("#rowId").append(sppd);
      i++;
    });
  });
</script>
@endsection