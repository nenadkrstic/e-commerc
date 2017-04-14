@extends('layouts.app')

@section('content')

    <!-- reg-form -->
    <div class="reg-form">
        <div class="container">
            <div class="reg">
                <h3>Registruj se</h3>
                <p>Dobrodošli u prodavnicu obuće cvrčak molimo vas popunite formu da bi ste nastavili.</p>
                <p>Ako ste se već registrovali molimo vas  <a href="{{url('login')}}">kliknite ovde</a></p>
                <form role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <ul>
                        <li class="text-info">Ime </li>
                        <li><input type="text" name="name" value=""></li>
                    </ul>
                    <ul>
                        <li class="text-info">Prezime </li>
                        <li><input type="text" name="lname"  value=""></li>
                    </ul>
                    <ul>
                        <li class="text-info ">Adresa</li>
                        <li><input type="text" name="addres" value="" class="col-mg-1"></li>
                    </ul>

                    <ul>
                        <li class="text-info">Grad </li>
                        <li><input type="password" name="city" value=""></li>
                    </ul>
                    <ul>
                        <li class="text-info">Broj telefona</li>
                        <li><input type="text" name="phone" value=""></li>
                    </ul>
                    <ul>
                        <li class="text-info">Šifra</li>
                        <li><input type="password" name="password" value=""></li>
                    </ul>
                    <ul>
                        <li class="text-info">Ponovi šifru</li>
                        <li><input type="text" name="password_confirmation" value=""></li>
                    </ul>
                    <input type="submit" value="Register Now">
                    <p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p>
                </form>
            </div>
        </div>
    </div>

@endsection
