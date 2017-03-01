@extends('templates.main')

@section('content')

    <div class="container">
        {{-- login nav and podcast stuff--}}
        @include('partials._top-nav')

        <div class="row about">
            <div class="col-sm-6">
                <div class="about-img">
                    <img src="{{ url('img/page/about.png') }}" class="img-responsive" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="about-overview">
                    <h1 class="lead">Overview</h1>
                    <p>
                        Webemplo is the brand name of Self Employment Financing Initiative of one of the and fastest
                        growing non governmental business couching club in the world.<br/><br/>
                        Webemplo simple means Web Employer. It is an initiative that develop a virtual employer -
                        the ‘web’(as an enriching SME hub) to:
                        <ul>
                            <li>first, educate aspiring entrepreneur and;</li>
                            <li>second, incrementally finance them to</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>

    </div>

@endsection



