@extends('templates.main')

@section('content')

    <div class="container">
        {{-- login nav and podcast stuff--}}
        @include('partials._top-nav-member')

        {{--<h1>{{ $profile->first_name }}</h1>--}}

        <div class="row">
            <div class="col-sm-8">
                {{--<img src="{{url('/storage/'.$profile->profile_pix)}}" alt="">
                <h1>{{ $profile->first_name }}</h1>--}}
                <div class="row">
                    <div class="col-sm-3">
                        <img src="{{ url('img/member/profile.png') }}" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="div col-sm-4"><img src="{{ url('img/home/brf.png') }}" class="img-responsive" alt="Emplo image"></div>
                            <div class="div col-sm-4"><img src="{{ url('img/home/bmf.png') }}" class="img-responsive" alt="Emplo image"></div>
                            <div class="div col-sm-4"><img src="{{ url('img/home/bsf.png') }}" class="img-responsive" alt="Emplo image"></div>
                        </div>

                        <div class="row">
                            <div class="div col-sm-4"><img src="{{ url('img/home/sme.png') }}" class="img-responsive" alt="Emplo image"></div>
                            <div class="div col-sm-4"><img src="{{ url('img/home/101.png') }}" class="img-responsive" alt="Emplo image"></div>
                            <div class="div col-sm-4"><img src="{{ url('img/home/happy.png') }}" class="img-responsive" alt="Emplo image"></div>
                        </div>

                        <div class="row">
                            <div class="div col-sm-4"><img src="{{ url('img/home/c2b.png') }}" class="img-responsive" alt="Emplo image"></div>
                            <div class="div col-sm-8"><img src="{{ url('img/home/job.png') }}" class="img-responsive" alt="Emplo image"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                &nbsp;
            </div>
        </div>

    </div>

@endsection



