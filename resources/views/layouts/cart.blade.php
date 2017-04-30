<div class="login-bars">
    @if(Auth::check())
        <a class="btn btn-default log-bar" href="{{url('register')}}" role="button">Dobrodosli: <strong>{{Auth::user()->name}}</strong></a>
        <a class="btn btn-default log-bar" href="{{url('logout')}}" role="button">Odjavi se</a>
        <a class="btn btn-default log-bar" href="{{url('emptyCart')}}" role="button">Isprazni korpu</a>
        @if(Auth::user()->status == 9)
            <a class="btn btn-default log-bar" href="{{url('adminPanel')}}" role="button">Admin panel</a>
            @endif

    @else

        <a class="btn btn-default log-bar" href="{{url('register')}}" role="button">Registruj se</a>
        <a class="btn btn-default log-bar" href="{{url('login')}}" role="button">Uloguj se</a>
    @endif
    @if(Cart::count()>0)
        <p><a href="{{url('cartContent')}}" class="simpleCart_empty">Sadrzaj Korpe</a></p>
        <p>Broj artikla <span class="badge">{{Cart::count()}}</span></p>

        <p>Ukupno  <span class="badge">{{Cart::subtotal()}}</span></p>



            <div class="cart box_1">





        @endif







        <div class="clearfix"> </div>
    </div>
</div>
<div class="clearfix"></div>
</div>