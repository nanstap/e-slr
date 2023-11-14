<div class="container">
  <div class="judul">
    <h3 style="margin-left: 500px; margin-top:50px;">LAPORAN SPPD</h3>
    <hr style="width: 1125px; margin-left: 110px;">
  </div>
    <div class="navbar-label">
    </div>

    <!--Form input-->
    <form class="" method="post" id="" action="/sppd/add" style="margin-left: 260px; margin-top: 70px;">
        <label for="" style="font-weight: bold;">Kendaraan Pergi</label>
      <div class="row g-3" id="rowId">
       
    @csrf
  
  <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label">Kendaraan Pergi</label>
    <input type="text" class="form-control" placeholder="Masukan Kendaraan" value="{{ old('maskapai_pergi[]')}}" name="maskapai_pergi[]" id="validationCustom02">
  </div>
  <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label">Kode Booking Pergi</label>
    <input type="text" class="form-control pesawat" placeholder="Khusus Pesawat"  value="{{ old('kode_booking_pergi[]')}}" name="kode_booking_pergi[]" id="validationCustom02">
  </div>
  
  <div class="col-3"  style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label">No Tiket Pergi</label>
    <input type="text" class="form-control" placeholder="Khusus Pesawat" value="{{ old('no_tiket_pergi[]')}}" name="no_tiket_pergi[]" id="validationCustom02">
  </div>
  <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label">Harga Pergi</label>
    <input type="text" class="form-control" placeholder="Masukan Maskapai" value="{{ old('harga_pergi[]')}}" name="harga_pergi[]" id="validationCustom02">
  </div>
  <div class="col-4">
      <label for="inputEmail4" class="form-label" style="font-family: 'Poppins',sans serif;">Upload Bukti</label>
      <input type="file" value="{{old('upload_st')}}" class="form-control @error('upload_st') is-invalid @enderror" style="height:40px;" id="validationCustom01" name="upload_st" placeholder=""> 
      @error('upload_st')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
  <div class="col-3">
  <label for="">Tanggal Pergi</label>
      <input type="date" class="form-control" name="tgl_pulang[]" value="{{ old('tgl_pulang[]')}}">
  </div>
  <!--kendaraan pulang-->
  <div class="col-12 text-center">
    <h6 style="font-family: 'Poppins',sans serif; font-weight:bold; margin-top:80px; margin-right:700px;">Kendaraan Pulang</h6>
  </div>
  <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label" style="font-family: 'Poppins',sans serif;">Kendaraan</label>
    <input type="text" class="form-control" placeholder="Masukkan Kendaraan" value="{{old('tgl_perjadin_mulai')}}"  name="tgl_perjadin_mulai" id="validationCustom02">
  </div>
  <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label" style="font-family: 'Poppins',sans serif; ">Kode Booking Pulang</label>
    <input type="text" class="form-control" placeholder="Khusus Pesawat" value="{{old('tgl_perjadin_selesai')}}"  name="tgl_perjadin_selesai" id="validationCustom02">
  </div>
  <div class="col-3" style="margin-top: 9px;">
    <div class="form-group">
      <label for="" style="font-family: 'Poppins',sans serif;margin-top: 10px;">No Tiket Pulang</label>
      <input type="text" class="form-control " placeholder="Khusus Pesawat" name="kota_asal">
    </div>
  </div>
  <div class="col-3" style="margin-top: 9px;">
    <div class="form-group">
      <label for="" style="font-family: 'Poppins',sans serif; margin-top: 10px;">Harga Pulang</label>
      <input type="text" class="form-control" placeholder="Masukan Kota" name="kota_tujuan" value="{{old('kota_tujuan')}}">
    </div>
  </div>
  <div class="col-4">
      <label for="inputEmail4" class="form-label" style="font-family: 'Poppins',sans serif;">Upload Bukti</label>
      <input type="file" value="{{old('upload_st')}}" class="form-control @error('upload_st') is-invalid @enderror" style="height:40px;" id="validationCustom01" name="upload_st" placeholder=""> 
      @error('upload_st')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
  <div class="col-3">
    
      <label for="" style="font-family: 'Poppins',sans serif; ">Tanggal Pulang</label>
      <input type="date" class="form-control" placeholder="Rincian Tugas" name="uraian_tugas" value="{{old('uraian_tugas')}}">
    
  </div>
<!--hotel-->
  <div class="col-12 text-center">
    <h6 style="font-family: 'Poppins',sans serif; font-weight:bold; margin-top:80px; margin-right:800px;">Hotel</h6>
  </div>
  <div class="col-6" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label" style="font-family: 'Poppins',sans serif;">Nama Hotel</label>
    <input type="text" class="form-control" placeholder="Masukkan Hotel" value="{{old('tgl_perjadin_mulai')}}"  name="tgl_perjadin_mulai" id="validationCustom02">
  </div>
  <div class="col-3" style="margin-top: 20px;">
    <label for="inputPassword4" class="form-label" style="font-family: 'Poppins',sans serif; ">Nomor Kamar</label>
    <input type="text" class="form-control" placeholder="Masukan Nomor" value="{{old('tgl_perjadin_selesai')}}"  name="tgl_perjadin_selesai" id="validationCustom02">
  </div>
  <div class="col-3" style="margin-top: 9px;">
    <div class="form-group">
      <label for="" style="font-family: 'Poppins',sans serif;margin-top: 10px;">Jumlah Hari</label>
      <input type="text" class="form-control " placeholder="Masukan Jumlah" name="kota_asal">
    </div>
  </div>
  <div class="col-3" style="margin-top: 9px;">
    <div class="form-group">
      <label for="" style="font-family: 'Poppins',sans serif; margin-top: 10px;">Tanggal Masuk Hotel</label>
      <input type="date" class="form-control" placeholder="" name="kota_tujuan" value="{{old('kota_tujuan')}}">
    </div>
  </div>
  <div class="col-3" style="margin-top: 9px;">
    <div class="form-group">
      <label for="" style="font-family: 'Poppins',sans serif; margin-top: 10px;">Tanggal Keluar Hotel</label>
      <input type="date" class="form-control" placeholder="" name="kota_tujuan" value="{{old('kota_tujuan')}}">
    </div>
  </div>
  <div class="col-3" style="margin-top: 9px;">
    <div class="form-group">
      <label for="" style="font-family: 'Poppins',sans serif; margin-top: 10px;">Tarif</label>
      <input type="text" class="form-control" placeholder="Masukan Tarif" name="kota_tujuan" value="{{old('kota_tujuan')}}">
    </div>
  </div>
  <div class="col-3" style="margin-top: 9px;">
    <div class="form-group">
      <label for="" style="font-family: 'Poppins',sans serif; margin-top: 10px;">Total</label>
      <input type="text" class="form-control" placeholder="Masukan Total" name="kota_tujuan" value="{{old('kota_tujuan')}}">
    </div>
  </div>
  <div class="col-4">
      <label for="inputEmail4" class="form-label" style="font-family: 'Poppins',sans serif;">Upload Bukti</label>
      <input type="file" value="{{old('upload_st')}}" class="form-control @error('upload_st') is-invalid @enderror" style="height:40px;" id="validationCustom01" name="upload_st" placeholder=""> 
      @error('upload_st')
        <div class="alert-danger" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
  
</form>
    </div>