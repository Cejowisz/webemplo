@extends('templates.main')

@section('content')

    <div class="container">
     {{-- login nav and podcast stuff--}}
        @include('partials._top-nav')

        <div class="intro">
            <div class="row">
                <div class="col-sm-7 pull-right">
                    <div class="big-banner">
                        <a href="#"><img src="{{ url('img/home/banner.png') }}" class="img-responsive" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-8">
                            <a href="#"><img src="{{ url('img/home/job.png') }}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#"><img src="{{ url('img/home/sme.png') }}" class="img-responsive" alt=""></a>
                        </div>
                    </div>

                    <div class="row md">
                        <div class="col-sm-4">
                            <a href="#"><img src="{{ url('img/home/brf.png') }}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#"><img src="{{ url('img/home/bmf.png') }}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#"><img src="{{ url('img/home/bsf.png') }}" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec-intro">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="#"><img src="{{ url('img/home/down-mobile.png') }}" class="img-responsive" alt=""></a>
                            </div>
                            <div class="col-sm-8">
                                <a href="#"><img src="{{ url('img/home/starter.png') }}" class="img-responsive" alt=""></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-sm-3">
                                <a href="#"><img src="{{ url('img/home/c2b.png') }}" class="img-responsive" alt=""></a>
                            </div>
                            <div class="col-sm-3">
                                <a href="#"><img src="{{ url('img/home/happy.png') }}" class="img-responsive" alt=""></a>
                            </div>
                            <div class="col-sm-3">
                                <a href="#"><img src="{{ url('img/home/101.png') }}" class="img-responsive" alt=""></a>
                            </div>
                            <div class="col-sm-3">
                                <a href="#"><img src="{{ url('img/home/sme-starter.png') }}" class="img-responsive" alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection



