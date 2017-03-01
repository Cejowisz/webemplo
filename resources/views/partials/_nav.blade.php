

<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{ url('img/home/WebEMPLO fund logo.png') }}" style="max-width: 170px;" class="img-responsive" alt="Webemplo Logo">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="flex-center position-ref full-height">
                <div class="web-navbar">
                    <ul class="nav navbar-nav pull-right web-navbar-right">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/career') }}">Career</a></li>
                        <li><a href="{{ url('/media') }}">Media</a></li>
                    </ul>
                </div>
                {{--@if (Route::has('login'))
                    <div class="top-right links">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">member</a>
                        @else
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('/register') }}">About Us</a>
                            <a href="{{ url('/career') }}">Career</a>
                            <a href="{{ url('/media') }}">Media</a>
                        @endif
                    </div>
                @endif--}}
            </div>
        </div><!--/.navbar-collapse -->
    </div>
</nav>