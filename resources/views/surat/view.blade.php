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
      .card-text{
        text-align: center;
        font-size: 18px;
      }

</style>
@endsection
@section('content')
<!-- <div class="container">
<div class="row">
  <div class="col">
<div class="card" style="width: 18rem;">
 
  
  <div class="card-header">
  <p style="font-family: 'Poppins' sans-serif;" class="card-text">Surat tugas</p>
  </div>
</div>
</div>
<div class="col">
<div class="card" style="width: 18rem;">
 
  
  <div class="card-header">
  <p style="font-family: 'Poppins' sans-serif;" class="card-text">Surat tugas</p>
  </div>
</div>
</div>
</div>
</div> -->
<div class="judul" style="margin-left: 600px; margin-top:50px;">
    @php
      preg_match('/^\d+/', $currentSt[0]->nmr_srt_tgs, $matches);
    @endphp
    <h3>VIEW SURAT TUGAS {{$matches[0]}}</h3>
    <hr style="margin-left: -500px;">
  </div>
<div class="container" style="margin-left: 350px; width:60%;">
  <div class="row">
    <div class="col-md-4">
      <div class="card mt-3" >
      @if(pathinfo($currentSt[0]->upload_st, PATHINFO_EXTENSION) == 'pdf')
      <embed src="{{ asset('/storage/uploads/st/' . $currentSt[0]->upload_st) }}" type="application/pdf" width="250px" height="400px" />
      @else
      <img src="{{ asset('/storage/uploads/st/' . $currentSt[0]->upload_st)}}" width="250px" height="400px" class="card-img-top" alt="Hilang / Tidak Ada">
      @endif
        <div class="card-header">
          <h5 class="card-title text-center">Surat Tugas</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mt-3">
      @if(pathinfo($currentSt[0]->upload_nd, PATHINFO_EXTENSION) == 'pdf')
      <embed src="{{ asset('/storage/uploads/st/' . $currentSt[0]->upload_nd) }}" type="application/pdf" width="250px" height="400px" />
      @else
      <img src="{{ asset('/storage/uploads/st/' . $currentSt[0]->upload_nd)}}" width="250px" height="400px" class="card-img-top" alt="Hilang / Tidak Ada">
      @endif
        <div class="card-header ">
          <h5 class="card-title text-center">Nota Dinas</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mt-3">
      @if(pathinfo($currentSt[0]->upload_sp, PATHINFO_EXTENSION) == 'pdf')
      <embed src="{{ asset('/storage/uploads/st/' . $currentSt[0]->upload_sp) }}" type="application/pdf" width="250px" height="400px" />
      @else
      <img src="{{ asset('/storage/uploads/st/' . $currentSt[0]->upload_sp)}}" width="250px" height="400px" class="card-img-top" alt="Hilang / Tidak Ada">
      @endif
        <div class="card-header">
          <h5 class="card-title text-center">Surat Persetujuan</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mt-3" >
      @if(pathinfo($currentSt[0]->upload_sppd, PATHINFO_EXTENSION) == 'pdf')
      <embed src="{{ asset('/storage/uploads/sppd/' . $currentSt[0]->upload_sppd) }}" type="application/pdf" width="250px" height="400px" />
      @else
      <img src="{{ asset('/storage/uploads/sppd/' . $currentSt[0]->upload_sppd)}}" width="250px" height="400px" class="card-img-top" alt="Hilang / Tidak Ada">
      @endif
        <div class="card-header">
          <h5 class="card-title text-center">SPPD</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mt-3">
      @if(pathinfo($currentSt[0]->bukti, PATHINFO_EXTENSION) == 'pdf')
      <embed src="{{ asset('/storage/uploads/laporan/' . $currentSt[0]->bukti) }}" type="application/pdf" width="250px" height="400px" />
      @else
      <img src="{{ asset('/storage/uploads/laporan/' . $currentSt[0]->bukti)}}" width="250px" height="400px" class="card-img-top" alt="Hilang / Tidak Ada">
      @endif
        <div class="card-header">
          <h5 class="card-title text-center">Laporan SPPD</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mt-3">
      @if(pathinfo($currentSt[0]->doc, PATHINFO_EXTENSION) == 'pdf')
      <embed src="{{ asset('/storage/uploads/spm/' . $currentSt[0]->doc) }}" type="application/pdf" width="250px" height="400px" />
      @else
      <img src="{{ asset('/storage/uploads/spm/' . $currentSt[0]->doc)}}" width="250px" height="400px" class="card-img-top" alt="Hilang / Tidak Ada">
      @endif
        <div class="card-header">
          <h5 class="card-title text-center">SPM</h5>
        </div>
      </div>
    </div>

    <!-- Tambahkan kartu lainnya sesuai kebutuhan -->
  </div>
</div>


@endsection