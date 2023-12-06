@extends('surat.layouts')
@section('content')
<style>
    .checkbox-wrapper-18{
        margin-top: -100px;
        margin-left: 70px;
    }
  .checkbox-wrapper-18 .round {
    position: relative;
  }

  .checkbox-wrapper-18 .round label {
    background-color: #fff;
    border: 3px solid gray;
    border-radius: 50%;
    cursor: pointer;
    height: 28px;
    width: 28px;
    display: block;
  }

  .checkbox-wrapper-18 .round label:after {
    border: 2px solid #fff;
    border-top: none;
    border-right: none;
    content: "";
    height: 6px;
    left: 8px;
    opacity: 0;
    position: absolute;
    top: 9px;
    transform: rotate(-45deg);
    width: 12px;
  }

  .checkbox-wrapper-18 .round input[type="checkbox"] {
    visibility: hidden;
    display: none;
    opacity: 0;
  }

  .checkbox-wrapper-18 .round input[type="checkbox"]:checked + label {
    background-color: #66bb6a;
    border-color: #66bb6a;
  }

  .checkbox-wrapper-18 .round input[type="checkbox"]:checked + label:after {
    opacity: 1;
  }
</style>
<div class="card-body">
                <table id="data-table" class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">No ST</th>
                    <th scope="col">Tgl ST</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Stat</th>
                    <!-- <th scope="col">Unit</th>
                    <th scope="col">Mulai Perjadin</th>
                    <th scope="col">Selesai Perjadin</th>
                    <th scope="col">Kota Asal</th>
                    <th scope="col">Kota Tujuan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nodin</th>
                    <th scope="col">Spm</th>
                    <th scope="col">Sppd</th>
                    <th scope="col">Tgl Sppd</th>
                    <th scope="col">Tgl Pergi</th>
                    <th scope="col">Maskapai Pergi</th>
                    <th scope="col">Kode Booking Pergi</th>
                    <th scope="col">No Tiket Pergi</th>
                    <th scope="col">Harga Pergi</th>
                    <th scope="col">Tgl Pulang</th>
                    <th scope="col">Maskapai Pulang</th>
                    <th scope="col">Kode Booking Pulang</th>
                    <th scope="col">No Tiket Pulang</th>
                    <th scope="col">Harga Pulang</th>
                    <th scope="col">Masuk Hotel</th>
                    <th scope="col">Keluar Hotel</th>
                    <th scope="col">Jumlah Hari</th>
                    <th scope="col">Nama Hotel</th>
                    <th scope="col">No Kamar</th>
                    <th scope="col">Tarif</th>
                    <th scope="col">Total</th> -->
                    <th scope="col">Act</th>
                    </tr>
                </thead>
                
                
                
                
            </table>
            @extends('layouts.bootstrapjs') 
            <div class="row">
                <div class="col-4">
                    <a href="{{ route('exportSurat')}}" class="btn btn-primary" style="margin-top: 3px;">Export</a>
                </div>
                <div class="col-2 text-center"></div>
                <div class="col-md-6 form-check"  style="margin-left:360px; padding-left:540px;">
                <div class="checkbox-wrapper-18">
                    <div class="round">
                        <input type="checkbox" id="spm">
                        <label for="spm" class="form-check-label" ></label>
                    </div>
                    
                </div>
                    <!-- <input type="checkbox" class="form-check-input" id="spm"><label for="spm" class="form-check-label">SPM</label>-->
                </div>
                
                </div>
            </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


    <script src="/dist/sweetalert2.all.min.js"></script>

    @if( session('done'))
        <script>
            Swal.fire({
            title: 'Berhasil',
            text: "{{session('done')}}",
            icon: 'success',
            confirmButtonText: 'OK'});
        </script>

    @endif

    @if( session('delete'))
        <script>
            Swal.fire({
            title: 'Hapus',
            text: "{{session('delete')}}",
            icon: 'info',
            confirmButtonText: 'OK'});
        </script>

    @endif

    <script>
        

        $(document).ready(function() {
            var dable = $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                paging: false,
                responsive: true,
                colReorder: true,
                scrollX: false,
                scrollY: 373,
                searching: true, // Menampilkan fitur pencarian
                lengthMenu: [15, 25, 50, 100], // Menampilkan opsi jumlah baris per halaman
                pageLength: 10, // Jumlah baris per halaman default

                ajax:"{{url('surat-tugas/get')}}",
                columns: [
            {
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
            },
            {
            data: 'nmr_srt_tgs'
            },
            {
            data: 'tgl_srt_tgs'
            },
            {
            data: 'pegawai_name'
            },
            {
                data: 'status',
                render: function(data, type, row){
                    var dataArray = JSON.parse(data);
                    var ada = false; 
                    for (var i = 0; i < dataArray.length; i++) {
                        var currentObject = dataArray[i];
                        
                        // Mengakses 'st_id' dari setiap objek dan melakukan pengecekan
                        if (currentObject.st_id !== null) {
                            ada = true
                            return '<i class="fas fa-check-circle" style="color: #007cdb;"></i>';
                        }
                        else {
                            return '<i class="fas fa-exclamation-circle" style="color: #ff0000;"></i>';
                        }
                    }
                    // if(ada == false)
                }
            },
            // {
            // data: 'unit'
            // },
            // {
            // data: 'tgl_perjadin_mulai'
            // },
            // {
            //     data: 'tgl_perjadin_selesai'
            // },
            // {
            //     data: 'kota_asal'
            // },
            // {
            //     data: 'kota_tujuan'
            // },
            // {
            //     data: 'pegawai_status'
            // },
            // {
            //     data: 'nodin'
            // },
            // {
            //     data: 'no_spm'
            // },
            // {
            //     data: 'no_sp2d'
            // },
            // {
            //     data: 'tgl_sp2d'
            // },
            // {
            //     data: 'tgl_pergi'
            // },
            // {
            //     data: 'maskapai_pergi'
            // },
            // {
            //     data: 'kode_booking_pergi'
            // },
            // {
            //     data: 'no_tiket_pergi'
            // },
            // {
            //     data: 'harga_pergi'
            // },
            // {
            //     data: 'tgl_pulang'
            // },
            // {
            //     data: 'maskapai_pulang'
            // },
            // {
            //     data: 'kode_booking_pulang'
            // },
            // {
            //     data: 'no_tiket_pulang'
            // },
            // {
            //     data: 'harga_pulang'
            // },
            // {
            //     data: 'tgl_masuk_hotel'
            // },
            // {
            //     data: 'tgl_keluar_hotel'
            // },
            // {
            //     data: 'jumlah_hari_hotel'
            // },
            // {
            //     data: 'nama_hotel'
            // },
            // {
            //     data: 'no_kamar'
            // },
            // {
            //     data: 'tarif'
            // },
            // {
            //     data: 'total'
            // },
            // {
            //     data: 'id',
            //     render: function (data, type, row){
            //         $.ajax({
            //             url: "/get-laporan",
            //             type: "GET",
            //             dataType: "json",

            //             success: (result) => {
            //                 console.log(data);
            //                 for(let i = 0; i < result.length; i++){
            //                     if(result[i].st_id == data){
            //                         return "<p>Aktif</p>";
            //                     }
            //                 }
            //             }
            //         });
            //     }
            // },
            {
             data: null,
            render: function ( data, type, row ) {
                return '<a class="btn2 btn-warning btn-sm" href="/surat-tugas/edit/' + row.id + '"><i class="fa fa-pen"></i></a><a class="btn2 btn-info btn-sm" href="/surat-tugas/view/' + row.id + '"><i class="fa fa-eye" aria-hidden="true"></i></a><a class="btn2 btn-danger btn-sm" href="/surat-tugas/delete/' + row.id + '"><i class="fas fa-trash"></i></a>'
            }
            }
        ],
        createdRow: function(row, data){
            var dataValue = data.spm_id;
            // $.ajax({
            //     method: 'GET',
            //     url: '/getspm',
            //     dataType: 'json',

            //     success: (result) => {
            //         for(let i = 0; i < result.length; i++ ){
            //             if(result[i].id != data.spm_id){
            //                 $('td:eq(1)', row).addClass('invalid-bro');
            //             }
                        
            //         }
            //     }
            // });
            if(dataValue === null){
                $('td:eq(1)', row).addClass('invalid-bro');
            }
        }
    });

    $("#spm").on('change', function() {
        var isChecked = $(this).is(':checked');

        dable.rows().every(function() {
            var row = this.node();
            if (!$(row).find('.invalid-bro').length > 0) {
                if (isChecked) {
                    $(row).hide(); // Menampilkan baris yang memiliki class 'invalid-bro'
                } else {
                    $(row).show(); // Menyembunyikan baris yang tidak memiliki class 'invalid-bro'
                }
            }
        });
    });

    
});
    </script>
    @endsection