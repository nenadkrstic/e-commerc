

@include('layouts.head')
<nav class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">

                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="{{url('createArticle')}}">Ubaci artikal</a></li>
                    <li><a href="{{url('openOrders')}}">Ovorene porudzbenice</a></li>
                    <li><a href="{{url('closedOrdersView')}}">Zatvorene porudzbenice</a></li>
                    <li><a href="{{url('searchArticles')}}">Pretraži artikle</a></li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
</nav>
</div><div id="particles" ><section class="intro">
    </section>

@yield('content')

</div>