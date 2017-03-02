<div class="second-nav" style="margin-bottom: 40px">
    <div class="container">
        <div class="row">
            <div class="member-blue">
                <div class="col-sm-8">&nbsp;</div>
                <div class="col-sm-4">
                    <span class="blue"><a href="#"><img src="{{ url('img/home/blue.png') }}" class="img-responsive sm-img" alt=""></a></span>
                    <span class="cast"><a href="#"><img src="{{ url('img/home/cast.png') }}" class="img-responsive sm-img" alt=""></a></span>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    @if(Auth::guest())
                        <img src="{{ url('img/home/login.jpg') }}" class="img-responsive sm-img" alt="emplo image">
                    @else
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <img src="{{ url('img/member/logout.jpg') }}" class="img-responsive sm-img" alt="emplo image">
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    @endif
                </div>
                <div class="col-sm-9">
                    <span class="fppl"><img src="{{ url('img/member/fppl.jpg') }}" style="max-height: 30px;" class="img-responsive sm-img"/></span>
                    <span class="fppl"><img src="{{ url('img/member/fppl2.jpg') }}" class="img-responsive sm-img" alt="emplo_image"></span>
                </div>
            </div>

        </div>
    </div>
    {{--<div class="pull-left">
        <span class="signup"><a href="--}}{{--{{ route('register') }}--}}{{--"><img src="{{ url('img/home/signup.png') }}" class="img-responsive sm-img" alt=""></a></span>
        <span class="login"><a href="--}}{{--{{ route('login') }}--}}{{--"><img src="{{ url('img/home/login.png') }}" class="img-responsive sm-img" alt=""></a></span>
    </div>
    <div class="pull-right">
        <span class="blue"><a href="#"><img src="{{ url('img/home/blue.png') }}" class="img-responsive sm-img" alt=""></a></span>
        <span class="cast"><a href="#"><img src="{{ url('img/home/cast.png') }}" class="img-responsive sm-img" alt=""></a></span>
    </div>--}}
</div>

<div class="clearfix"></div>