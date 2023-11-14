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


</style>
@endsection
@section('content')
<div class="container">
  <div class="judul">
    <h3 style="margin-left: 500px; margin-top:50px;">LAPORAN SPPD</h3>
    <hr style="width: 1125px; margin-left: 110px;">
  </div>
    <div class="navbar-label">
    </div>

    <!--Form input-->
    <form class="" method="post" id="" action="/laporan" enctype="multipart/form-data" style="margin-left: 260px; margin-top: 70px;">
    <div class="row g-3" id="rowId">
      <div class="col-6" style="margin-top: 20px;">
        <label for="inputPassword4" class="form-label">Surat Tugas</label>
        <select name="surat_tugas" required class="form-select" id="dropdown">
          <option value="" class=''>Pilih Surat Tugas</option>
          @foreach($st as $sas)
          <option value="{{$sas->nmr_srt_tgs}}">{{$sas->nmr_srt_tgs}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-6" style="margin-top: 20px;">
        <label for="inputPassword4" class="form-label">SPPD</label>
        <select name="sppd_id" required class="form-select" id="dropdown">
          <option value="" class=''>Pilih SPPD</option>
          @foreach($sppd as $sppd)
          <option value="{{$sppd->id}}">{{$sppd->no_sp2d}}</option>
          @endforeach
        </select>
      </div>

      <div class="row g-3" style="margin-top: 20px; margin-left:10px;" id="radio-container">

      </div>
     
      <br><br>
      <div class="col-12">
        <h6 style="font-family: 'Poppins',sans serif; font-weight:bold; margin-top:50px; margin-right:700px;">Kendaraan Pergi</h6>
      </div>
       
    @csrf
  
  <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label">Maskapai / Kendaraan</label>
    <input type="text" class="form-control" placeholder="Masukan Kendaraan" value="{{ old('maskapai_pergi')}}" name="maskapai_pergi" id="validationCustom02">
  </div>
  <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label">Kode Booking Pergi</label>
    <input type="text" class="form-control pesawat" placeholder="Khusus Pesawat"  value="{{ old('kode_booking_pergi')}}" name="kode_booking_pergi" id="validationCustom02">
  </div>
  
  <div class="col-3"  style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label">No Tiket Pergi</label>
    <input type="text" class="form-control" placeholder="Khusus Pesawat" value="{{ old('no_tiket_pergi')}}" name="no_tiket_pergi" id="validationCustom02">
  </div>
  <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label">Harga Pergi</label>
    <input type="text" class="form-control" placeholder="Masukan Maskapai" value="{{ old('harga_pergi')}}" name="harga_pergi" id="validationCustom02">
  </div>
  <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label">Taksi Asal</label>
    <input type="text" class="form-control" placeholder="Masukan Harga" value="{{ old('harga_pergi')}}" name="taksi_asal_pergi" id="validationCustom02">
  </div> <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label">Taksi Tujuan</label>
    <input type="text" class="form-control" placeholder="Masukan Harga" value="{{ old('harga_pergi')}}" name="taksi_tujuan_pergi" id="validationCustom02">
  </div>
  <div class="col-3" style="margin-top: 20px;">
  <label for="">Tanggal Pergi</label>
      <input type="date" class="form-control" name="tgl_pergi" value="{{ old('tgl_pulang')}}">
  </div>
  <!--kendaraan pulang-->
  <div class="col-12" style="margin-right: 400px;">
    <h6 style="font-family: 'Poppins',sans serif; font-weight:bold; margin-top:50px; margin-right:600px;" >Kendaraan Pulang</h6>
  </div>
  <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label" style="font-family: 'Poppins',sans serif;">Maskapai / Kendaraan</label>
    <input type="text" class="form-control" placeholder="Masukkan Kendaraan" value="{{old('tgl_perjadin_mulai')}}"  name="maskapai_pulang" required id="validationCustom02">
  </div>
  <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label" style="font-family: 'Poppins',sans serif; ">Kode Booking Pulang</label>
    <input type="text" class="form-control" placeholder="Khusus Pesawat" value="{{old('tgl_perjadin_selesai')}}"  name="kode_booking_pulang" id="validationCustom02">
  </div>
  <div class="col-3" style="margin-top: 9px;">
    <div class="form-group">
      <label for="" style="font-family: 'Poppins',sans serif;margin-top: 10px;">No Tiket Pulang</label>
      <input type="text" class="form-control " placeholder="Khusus Pesawat" name="no_tiket_pulang">
    </div>
  </div>
  <div class="col-3" style="margin-top: 9px;">
    <div class="form-group">
      <label for="" style="font-family: 'Poppins',sans serif; margin-top: 10px;">Harga Pulang</label>
      <input type="text" class="form-control" placeholder="Masukan Kota" required name="harga_pulang" value="{{old('kota_tujuan')}}">
    </div>
  </div>
  <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label">Taksi Asal</label>
    <input type="text" class="form-control" placeholder="Masukan Harga" value="{{ old('harga_pergi')}}" name="taksi_asal_pulang" id="validationCustom02">
  </div> <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label">Taksi Tujuan</label>
    <input type="text" class="form-control" placeholder="Masukan Harga" value="{{ old('harga_pergi')}}" name="taksi_tujuan_pulang" id="validationCustom02">
  </div>

  <div class="col-3" style="margin-top: 20px;">
    
      <label for="" style="font-family: 'Poppins',sans serif; ">Tanggal Pulang</label>
      <input type="date" class="form-control" placeholder="Rincian Tugas" name="tgl_pulang" value="{{old('uraian_tugas')}}">
    
  </div>
<!--hotel-->
  <div class="col-12 text-center">
    <h6 style="font-family: 'Poppins',sans serif; font-weight:bold; margin-top:80px; margin-right:800px;">Hotel</h6>
  </div>
  <div class="col-6" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label" style="font-family: 'Poppins',sans serif;">Nama Hotel</label>
    <input type="text" class="form-control" placeholder="Masukkan Hotel" value="{{old('tgl_perjadin_mulai')}}"  name="nama_hotel" id="validationCustom02">
  </div>
  <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label" style="font-family: 'Poppins',sans serif; ">Nomor Kamar</label>
    <input type="text" class="form-control" placeholder="Masukan Nomor" value="{{old('tgl_perjadin_selesai')}}"  name="no_kamar" id="validationCustom02">
  </div>
  <div class="col-3" style="margin-top: 9px;">
      <label for="" style="font-family: 'Poppins',sans serif;margin-top: 10px;">Jumlah Hari</label>
      <input type="text" class="form-control " placeholder="Masukan Jumlah" name="jumlah_hari_hotel">
  </div>
  <div class="col-3" style="margin-top: 9px;">
      <label for="" style="font-family: 'Poppins',sans serif; margin-top: 10px;">Tanggal Masuk Hotel</label>
      <input type="date" class="form-control" placeholder="" name="tgl_masuk_hotel">
  </div>
  <div class="col-3" style="margin-top: 9px; margin-left:-13px;">
      <label for="" style="font-family: 'Poppins',sans serif; margin-top: 10px;">Tanggal Keluar Hotel</label>
      <input type="date" class="form-control" placeholder="" name="tgl_keluar_hotel" value="{{old('kota_tujuan')}}">
  </div>
  <div class="col-3" style="margin-top: 9px; margin-left:-13px;">
      <label for="" style="font-family: 'Poppins',sans serif; margin-top: 10px;">Tarif</label>
      <input type="text" class="form-control" placeholder="Masukan Tarif" name="tarif" value="{{old('kota_tujuan')}}">
  </div>
  <div class="col-3" style="margin-top: 9px; margin-left:-13px;">
      <label for="" style="font-family: 'Poppins',sans serif; margin-top: 10px;">Total</label>
      <input type="text" class="form-control" placeholder="Masukan Total" name="total" value="{{old('kota_tujuan')}}">
  </div>
  <div class="col-12">
      <label for="inputEmail4" class="form-label" style="font-family: 'Poppins',sans serif;">Upload Bukti </label>
      <input type="file" value="{{old('upload_st')}}" class="form-control @error('upload_st') is-invalid @enderror" style="height: auto;" id="validationCustom01" name="upload_bukti" placeholder="" multiple> 
      <figcaption class="blockquote-footer" style="margin-top: 2px;" >Bukti Pembayaran / Tiket Kendaraan, Taksi, Hotel Kedalam Satu PDF</figcaption>
      @error('upload_st')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-12" style="margin-bottom: 20px;">
    <button class="btn btn-primary float-end" type="submit" style="margin-top: 5px;">Submit</button>
    </div>
</form>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
      $(document).ready(() => {
        const dropdown = $("#dropdown");
        const radio = $("#radio-container");
        radio.hide();
        dropdown.on('change', () => {
          const valueDropDown = dropdown.val();
          if(valueDropDown === ''){
            radio.hide();
          }
          else{
            radio.show()
          }
          $.ajax({
            url: '/data-st',
            method: 'GET',
            data: {
              value: valueDropDown
            },
            dataType: 'json',
            success: (result) => {
              radio.empty();
              for(var i = 0; i < result.length; i++){
                var item = result[i];
                radio.append(`
                  <div class="col-6">
                    <input type="radio" class="form-check-input" required id="pegawai_${i}" name="st_id" value="${item.id}">
                    <label for="pegawai_${i}" class="form-check-label">${item.pegawai.nama}</label>
                  </div>
                `)
              }
            }
          })
        });
      });
    </script>
@endsection