<html>
    <head>
        <Title>Chuaks</Title>
        @extends('layouts.bootstrap')

       <style>
        @import url('https://fonts.googleapis.com/css2?family=Cabin&family=Caprasimo&family=Inconsolata:wght@600&family=Laila:wght@300&family=Lalezar&family=Noto+Sans:wght@500&family=Poppins&display=swap');
       *{
        margin: 0;
        padding: 0;
        outline: 0;
        border: 0;
        text-decoration: none;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
       }
       body{
        background: #dfe9f5;
       }
       nav{
        position: absolute;
        top: 0;
        bottom: 0;
        height: 100%;
        left: 0;
        background: white;
        width: 250px;
        overflow: hidden;
        box-shadow: 9px 20px 35px rgba(0, 0, 0, 0.1);
       }
       .logo{
        text-align: center;
        display: flex;
        transition: all 0.5s ease;
        margin: 30px 0 0 20px;
        width: 50px;
        height: 45px;
       }
       .logo-span{
        text-align: center;
        display: flex;
        margin-left: 100px;
        margin-top: -30px;
       }
      ul li a{
        position: relative;
        color: black;
        font-size: 15px;
        display: table;
        width: 300px;
        padding: 15px;
        
       }
       ul li a:hover{
        text-decoration: none;
       }
       .but{
        cursor: pointer;
        background: transparent;
        padding-left: 60px;
        width: 100px;
        height: 100px;
        font-family: 'Poppins', sans-serif;
       }
       .but:hover{
        background: #eee;
       }
       .but span{
        font-family: 'Poppins',sans-serif;
        font-weight: bold;
       }
       .but span:hover{
        color: blue;
       }
       button .but:active {
        outline: none;
        box-shadow: none;
        }
       .itam{
        margin-top: 45px;
       }

       .fas{
        position: relative;
        width: 70px;
        height: 40px;
        top: 54px;
        font-size: 20px;
        text-align: center;
       }
       .nav-item{
        font-weight: bold;
        font-size: 15px;
        position: relative;
        top: 2px;
        margin-left: 50px;
        padding-top: -10px;
       }
       a:hover{
        background: #eee;
       }
       .logout{
        position: absolute;
        bottom: 0;
       }
        .card-body{
            background-color: white;
            margin-left: 270px;
            margin-top: 40px;
        }
        table#data-table.table.datatable.no-footer{
            width: 1220px;
            margin-top: -10px;
            padding-left: 600px;
        }
        div.datatables_scrollheadinner{
            padding-left: 0px;
            background-color: yellow;
        }
        #data-table_filter.datatables_filter{
            margin-left: 450px;
            margin-top: -45px;
        }
        #data-table_length.datatables_length{
            margin-right: -640px;
            margin-top: -35px;
        }
        #data-table_info.datatables_info{
            font-size: 15px;
        }
        #data-table_info.datatables_info{
            font-family: 'Times New Roman', Times, serif;
        }
        .th.sorting{
            margin-left: 300px;
            padding-left: 123px;
        }
        .tbody{
            padding-left: 300px;
        }
        tr.odd{
            padding-left: 200px;
            margin-left: 20px;
            justify-content: space-between;
        }
    .invalid-bro{
        border-bottom: 2px solid #dc3545;
    }
    .btn{
        margin-top: -30px;
    }
    .btn2{
        margin-top: -3px;
    }
    .nav-item:current {
        background-color: #dfe9f5;
        color: blue;
    }
    .active {
        background: #dfe9f5;
        color: blue;
    }
    ul li{
        list-style: none;
        margin-left: -8px;
    }
       </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        @yield('head')

    </head>
    <body>
    <nav class="header fixed-top">
    <ul>
        <li>
        <img class="logo" src="/gambar/gatrik.png" alt="">
        <span class="logo-span">E-SLR</span>
        </li>
        <li>
            <a href="/surat-tugas" class="itam {{ request()->path() === 'surat-tugas' ? 'active' : '' }}">
                <i class="fas fa-home"></i>
                <span class="nav-item">Data ST</span>
            </a>
        </li>
        <li>
            <a href="/surat-tugas/add" class="{{ request()->path() === 'surat-tugas/add' ? 'active' : '' }}">
                <i class="fas fa-plus"></i>
                <span class="nav-item">Surat Tugas</span>
            </a>
        </li>
        <li>
            <a href="/sppd/add" class="{{ request()->path() === 'sppd/add' ? 'active' : '' }}">
            <i class="fas fa-file"></i>
                <span class="nav-item">SPPD</span>
            </a>
        </li>
        <li>
            <a href="/sppd/add" class="{{ request()->path() === 'sppd/add' ? 'active' : '' }}">
            <i class="fas fa-book"></i>
                <span class="nav-item">Laporan SPPD</span>
            </a>
        </li>
        <li>
            <a href="/sppd/add" class="{{ request()->path() === 'sppd/add' ? 'active' : '' }}">
            <i class="fas fa-briefcase"></i>
                <span class="nav-item">SPM</span>
            </a>
        </li>
        <li>
            <a href="/pegawai" class="{{ request()->path() === 'pegawai' ? 'active' : '' }}">
            <i class="fas fa-users"></i>
                <span class="nav-item" style="margin-left: 45px;">Pegawai</span>
            </a>
</li>
        <li>
            <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                <i class="fas fa-sign-out-alt"></i>
                <span style="margin-left: 45px; font-weight:bold">Logout</span>
            </a>
                
            <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                <!-- <button class="but" type="submit"></button> -->
                @csrf
            </form>
            
        </li>
    </ul>    
                
    </nav>
        <!-- pake extend aja biar cepet -->
        @yield('content')
    </body>
</html>

