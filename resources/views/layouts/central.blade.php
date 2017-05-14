<div class="feel-fall">
    <div class="container">
        <div class="pull-left fal-box">
            <div class=" fall-left">
                <h3>Fall</h3>
                <img src="images/f-l.png" alt="/" class="img-responsive fl-img-wid">
                <p>Inspiration and innovation<br> for every athlete in the world</p>
                <span class="fel-fal-bar"></span>
            </div>
        </div>
        <div class="pull-right fel-box">
            <div class="feel-right">
                <h3>Feel</h3>
                <img src="images/f-r.png" alt="/" class="img-responsive fl-img-wid">
                <p>Inspiration and innovation<br> for every athlete in the world</p>
                <span class="fel-fal-bar2"></span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


<div class="container">
@if(isset($art))
    @foreach($art as $a)


        <div class="col-md-4 text-center">

                <!-- normal -->
                <div class="ih-item square effect3 bottom_to_top">
                    <div class="bottom-2-top">

                        <div class="img"><img src="uploads/article-{{$a->id}}/img1.jpg" alt="/" class="img-responsive gri-wid"></div>

                        <div class="info">
                            <div class="pull-left styl-hdn">
                             <a href="{{url('singleArticle')}}/{{$a->id}}"><h6>Prikazi vise</h6></a>
                            </div>

                            <div class="pull-right styl-price">
                                <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">{{$a->price}} din</span></a></p>
                            </div>

                            <div class="clearfix"></div>
                        </div></div>

                </div>


        </div>
@endforeach
    @endif

</div>
<div class="container text-center">
    {{$art->links()}}
</div>


