<div class="login-bars">
    @if(Auth::check())
        <a class="btn btn-default log-bar" href="{{url('register')}}" role="button">Dobrodosli: <strong>{{Auth::user()->name}}</strong></a>
        <a class="btn btn-default log-bar" href="{{url('logout')}}" role="button">Odjavi se</a>
        @if(Auth::user()->status == 9)
            <a class="btn btn-default log-bar" href="{{url('adminPanel')}}" role="button">Admin panel</a>
            @endif

    @else

        <a class="btn btn-default log-bar" href="{{url('register')}}" role="button">Registruj se</a>
        <a class="btn btn-default log-bar" href="{{url('login')}}" role="button">Uloguj se</a>
    @endif
    <div class="cart box_1">
        <a href="checkout.blade.php">
            <h3>
                <div class="total">
                    <span class="simpleCart_total"></span>(<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div></h3>
        </a>
        <p><a href="javascript:;" class="simpleCart_empty">Korpa prazna</a></p>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="clearfix"></div>
</div>