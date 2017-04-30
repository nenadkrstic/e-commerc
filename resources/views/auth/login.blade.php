@extends('layouts.app')

@section('content')

    <div class="head-bread">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">HOME</a></li>
                <li class="active">LOGIN</li>
            </ol>
        </div>
    </div>
    <!--signup-->
    <!-- login-page -->
    <div class="login">
        <div class="container">
            <div class="login-grids">
                <div class="col-md-6 log">
                    <h3>Login</h3>
                    <div class="strip"></div>
                    <p>Dobrodošli na našu elektronsku prodavnicu.</p>
                    <p>Ukoliko nemate kreiran profil, možete  <a href="{{url('register')}}">uraditi ovde</a></p>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <h5>Mail adresa:</h5>
                        <input type="text" name="email" value="">
                        <h5>Password:</h5>
                        <input type="password" name="password" value=""><br>
                        <input type="submit" value="Login">

                    </form>
                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                        Forgot Your Password?
                    </a>
                </div>
                <div class="col-md-6 login-right">
                    <h3>registracija</h3>
                    <div class="strip"></div>
                    <p>Kreirajući vaš profil na našoj web aplikaciji, moćičete da kupujete online</p>
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                    <a href="register.blade.php" class="button">Kreiraj profil</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>



    <!-- //login-page -->
    <!--signup-->
@endsection
