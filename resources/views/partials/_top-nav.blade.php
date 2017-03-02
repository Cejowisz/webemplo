<div class="second-nav">
    <div class="pull-left">

        @if(Auth::user())
            <span class="login">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <img src="{{ url('img/member/logout.jpg') }}" class="img-responsive sm-img" alt="emplo image">
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </span>
        @else
            <span class="signup"><a href="{{ route('register') }}"><img src="{{ url('img/home/signup.png') }}" class="img-responsive sm-img" alt=""></a></span>
            <span class="login"><a href="{{ route('login') }}"><img src="{{ url('img/home/login.png') }}" class="img-responsive sm-img" alt=""></a></span>
        @endif
    </div>
    <div class="pull-right">
        <span class="blue"><a href="#"><img src="{{ url('img/home/blue.png') }}" class="img-responsive sm-img" alt=""></a></span>
        <span class="cast"><a href="#"><img src="{{ url('img/home/cast.png') }}" class="img-responsive sm-img" alt=""></a></span>
    </div>
</div>

<div class="clearfix"></div>