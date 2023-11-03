
<style>
    body{
        margin: 0;
        padding: 0;
        background-color: 	#AFEEEE;
        font-family: Arial, Helvetica, sans-serif;
    }
    .container{
        position: absolute;
        top: 6.5%;
        left: 33.5%;
    }
    .card-body{
        background-color: white;
        width: 400px;
        height: 520px;
        border-radius: 4px;
        padding-top: 50px;
        padding-left: 30px;
    }
    .placeholder{
        background-color: #DCDCDC	;
        height: 45px;
        width: 370px;
        border-radius: 3px;
        border: none;
        padding-left: 30px;
    }
    h3{
        font-family: Arial, Helvetica, sans-serif;
        font-weight: lighter;
        font-size: 15px;
        color:  darkgray;
        margin-top: 4px;
    }
    #email{
        border: none;
    }
    .btn{
        background-color: 	#FFFF00;
        margin-top: 30px;
        width: 370px;
        height: 45px;
        border: none;
        padding-right: 20px;
        margin-top: -4px;
        cursor: pointer;
    }
    h5{
        font-weight: lighter;
        color:  darkgray;
        margin-top: 70px;
        margin-left: 70px;
    }
    .logo{
        margin: 0 auto 2rem auto;
        margin-left: 25px;
    }
    .logo img{
        width: 90px;
        height: auto;
        padding-left: 30%;
    }
    .headtxt{
        margin-bottom: 1rem;
        margin-left: -34px;
        font-size: 18px;
    }
    
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekapitulasi Perjalanan Dinas</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="logo">
                        <img src="/gambar/gatrik.png" alt="">
                    </div>
                    <div class="headtxt">
                        <center><h4>Rekapitulasi Perjalanan Dinas<br>Direktorat Jenderal Ketenagalistrikan<br>Kementerian ESDM</h4></center>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            

                            <div class="col-md-6 row">
                                <input id="email" type="email" placeholder="Masukan Username" class="placeholder @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                               <h3>Username</h3>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password" class="placeholder form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <h3>Password</h3>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn">
                                    {{ __('Masuk') }}
                                </button>

                                @if (Route::has('password.request'))
                                   
                                @endif
                                <div class="cpr">
                                    <h5>Hak Cipta © 2023 PKL Mafia Hongkong</h5>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
</script>
</body>
</html>
