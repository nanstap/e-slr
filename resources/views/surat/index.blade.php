@extends('surat.layouts')
@section('content')
<div class="card-body">
                <table id="data-table" class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">No ST</th>
                    <th scope="col">Tgl ST</th>
                    <th scope="col">Nama</th>
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
            <a href="{{ route('exportSurat')}}" class="btn btn-primary" style="margin-top: 3px;">Export</a>
            </div>
   @extends('layouts.bootstrapjs') 
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
            $('#data-table').DataTable({
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
            {
             data: null,
            render: function ( data, type, row ) {
                return '<a class="btn2 btn-warning btn-sm" href="/surat-tugas/edit/' + row.id + '"><i class="fa fa-pen"></i></a><a class="btn2 btn-danger btn-sm" href="/surat-tugas/delete/' + row.id + '"><i class="fas fa-trash"></i></a>'
            }
            }
        ],
        createdRow: function(row, data){
            var dataValue = data.no_sp2d;

            if(dataValue === 0){
                $('td:eq(1)', row).addClass('invalid-bro');
            }
        }
        
        });

     });
    </script>
    @endsection