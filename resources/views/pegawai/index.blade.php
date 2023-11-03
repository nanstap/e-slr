
        <Title>Chuaks</Title>
        @extends('layouts.bootstrap')
        @extends('surat.layouts')

        @section('head')
       <style>
        @import url('https://fonts.googleapis.com/css2?family=Cabin&family=Caprasimo&family=Inconsolata:wght@600&family=Laila:wght@300&family=Lalezar&family=Noto+Sans:wght@500&family=Poppins&display=swap');
        #data-table_length.datatables_length{
            margin-left: -10px;
            margin-top: -60px;
        }
        .card-body{
            margin-left: 240px;
            margin-top: -20px;
            width: 500px;
        }
        table#data-table.table.datatable.no-footer{
            width: 1289px;
            margin-top: 20px;
        }
        #data-table_filter.datatables_filter{
            margin-left: 620px;
            margin-top: 20px;
        }
        #data-table_length.datatables_length{
            margin-right: 450px;
            margin-top: -10px;
        }
        #data-table_info.datatables_info{
            font-size: 15px;
        }
        li#data-table_previous.paginate_button.previous.disabled a{
            color: salmon;
            transition: all .2s ;
            padding: 10px;
            font-family: 'Poppins';
        }
        li#data-table_previous.paginate_button.previous.disabled a:hover{
            color: black;
            text-decoration: none;
        }
        li#data-table_next.paginate_button.next a{
            color: salmon;
            margin-left: -10px;
            font-family: 'Poppins';
            text-decoration: none;
            transition: all .2s;
        }
        li#data-table_next.paginate_button.next a:hover{
            color: black;
            text-decoration: none;
        }
        li.paginate_button.active a{
            padding-left: 10px;
            margin-left: -50px;

        }
        li.paginate_button.active a:hover{
            text-decoration: none;
            color: black;
            transition: all .1s;
        }
        li.paginate_button a{
            padding-left: 10px;
            
        }
        li.paginate_button a:hover{
            text-decoration: none;
            color: black;
            transition: all .1s;
        }
        #data-table_info.datatables_info{
            font-family: 'Times New Roman', Times, serif;
            width: 170px;
            margin-top: -5px;
        }
       </style>
       @endsection
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        @section('content')
        <div class="judul" style="margin-left: 650px; margin-top: 70px;">
    <h3 style="letter-spacing: 3px;">TABEL PEGAWAI</h3>
  </div>
                <div class="card-body">
                <table id="data-table" class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIP/NIK</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Golongan</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                
                <!-- <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody> -->
                
            </table>
            <a href="{{ route('addPegawai')}}" style="margin-top: 25px;" class="btn btn-success">Tambah</a>
            <!-- <a href="{{ route('exportSurat')}}" class="btn btn-primary">Export</a> -->
        </div>
        <!-- form untuk menghapus pegawai -->
        <!-- <form action="" method="POST" id="delete" hidden style="display: none;">
            
        </form> -->
   @extends('layouts.bootstrapjs') 
   @if( session('delete'))
        <script>
            Swal.fire({
            title: 'Hapus',
            text: "{{session('delete')}}",
            icon: 'info',
            confirmButtonText: 'OK'});
        </script>

    @endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


    

    <script>
    $(document).ready(function() {
        $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            paging: false,
            ajax:"{{url('getdata')}}",
            columns: [
        {
           render: function (data, type, row, meta) {
             return meta.row + meta.settings._iDisplayStart + 1;
           },
        },
        {
           data: 'nama'
        },
        {
           data: 'nip'
        },
        {
           data: 'jabatan'
        },
        {
            data: 'gol'
        },
        {
            data: 'unit'
        },
        {
           data: 'status'
        },
        {
        //    data: null,
        render: function ( data, type, row ) {
            return `<a href="/pegawai/delete/` + row.id + `" style="margin-top: 12px; margin-left: 3px;" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>`
            //<button style="margin-top: 12px;" class="btn btn-warning btn-sm "><i class="fas fa-pen"></i></button><button style="margin-top: 12px; margin-left: 3px;" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
        }
        }
      ],
    });
  });
    </script>
@endsection