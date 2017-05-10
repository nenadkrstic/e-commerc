@extends('layouts.app')

@section('content')
    <div id="top" class="col-md-4 pull-right">
        <h3>Registruj se</h3>
        <p>Dobrodošli u prodavnicu obuće cvrčak molimo vas popunite formu da bi ste nastavili.</p>
        <p>Ako ste se već registrovali molimo vas  <a href="{{url('login')}}">kliknite ovde</a></p>
    </div>

    <div id="registerPanel" class="container-fluid">
    <div id="validate" class="text-center"></div>
        <div class="row text-left">
            <div class="col-md-6 col-md-offset-1">



                        <form class="form-horizontal" onsubmit="return validateForm()"  role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Ime</label>

                                <div class="col-md-4">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" >

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
                                    <input id="lname" type="text" class="form-control" name="lname" value="{{ old('name') }}" required autofocus>

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
                                    <input id="addres" type="text" class="form-control" name="addres" value="{{ old('name') }}" required autofocus>

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
                                    <input id="city" type="text" class="form-control" name="city" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label">Telefon</label>

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
                                    <input id="mail" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                <label for="password-confirm" class="col-md-4 control-label">Ponovi Password</label>

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



@endsection
