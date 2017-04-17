@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Ime</label>

                                <div class="col-md-4">
                                    <input id="ime" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Prezime</label>

                                <div class="col-md-4">
                                    <input id="prezime" type="text" class="form-control" name="lname" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('lname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('addres') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Adresa</label>

                                <div class="col-md-6">
                                    <input id="prezime" type="text" class="form-control" name="addres" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('addres'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('addres') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Grad</label>

                                <div class="col-md-2">
                                    <input id="prezime" type="text" class="form-control" name="city" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Telefon</label>

                                <div class="col-md-6">
                                    <input id="grad" type="text" class="form-control" name="phone" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-5">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-5">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- reg-form -->
    <!-- <div class="reg-form">
        <div class="container">
            <div class="reg">
                <h3>Registruj se</h3>
                <p>Dobrodošli u prodavnicu obuće cvrčak molimo vas popunite formu da bi ste nastavili.</p>
                <p>Ako ste se već registrovali molimo vas  <a href="{{url('login')}}">kliknite ovde</a></p>


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

            </div>
        </div>
    </div>-->

@endsection
