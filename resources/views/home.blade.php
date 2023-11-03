@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cabin&family=Caprasimo&family=Inconsolata:wght@600&family=Laila:wght@300&family=Lalezar&family=Noto+Sans:wght@500&family=Poppins:wght@100;500&display=swap');
    *{
        margin: 0;
        padding: 0;
    }
    .view{
        margin-top: -23px;
        width: 100%;
        height: 100vh;
        background-image: url(/gambar/view.jpg);
        background-position: center;
        background-size: cover;
        transition: all 3s ease-in-out;
        animation: page 2s;
    }
    @keyframes page{
        0%{
            opacity: 0;
        }
        50%{
            opacity: .2;
        }
        100%{
            opacity: 2;
        }
    }
    .container{
        display: flex;
        align-items: right;
        flex: 1;
        padding-top: 40px;
        padding-left: 340px;
    }
    nav ul li{
        margin-left: 10px;
        padding-top: 20px;
        padding-left: 50px;
        list-style: none;
        display: inline-block;
    }
    nav ul li a{
        font-family: 'Poppins';
      text-decoration: none;
      color: black;
      transition: all .3s ease-in-out;
    }
    ul li a:hover{
      box-shadow: 0px 1px 0px 0px black;
    }
    .row{
        padding-top: 120px;
        padding-left: 120px;
        margin-top: 50px;
        margin-left: 20px;
    }
    .col h1{
        font-size: 55px;
        color: white;
        font-family: 'Poppins', sans-serif;
    }
    .col p{
        color: white;
        font-size: 18px;
        font-family: 'Poppins', sans-serif;
        letter-spacing: 2px;
    }
    .btn{
        background-color: yellow;
        transition: all .3s ease-in-out;
    }
    .btn:hover{
        background-color: darkgrey;
    }
    .btn a{
        text-decoration: none;
        color: black;
        font-family: 'Poppins',sans-serif;
    }
    .but{
        border: none;
        background-color: transparent;
        color: black;
        font-family: 'Poppins';
        transition: all .3s ease-in-out;
    }
    .but:hover{
        box-shadow: 0px 1px 0px 0px black;
    }

    
</style>
<body>
    <div class="view">
        <div class="container">
        <!--<div class="logo">Rekapitulasi Perjalanan Dinas</div>-->
       
        </div>
        <div class="row">
        <div class="col">
            <h1>Hallo Sobat Gatrik</h1>
            <p>Bagaimana perjalanan dinasnya?<br>Isi surat tugas dulu yuk</p>
            <button class="btn"><a href="/surat-tugas/add">SURAT TUGAS</a></button>
        </div>
    </div>
    </div>

   

<!--<div class="logout">
    <form action="/logout" method="post">
    @csrf
    <button type="submit">Logout</button>
    </form>
</div>-->

</body>

</html>

@endsection
