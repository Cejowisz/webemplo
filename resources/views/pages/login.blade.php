@extends('templates.main')

@section('content')

    <div class="container">
        {{-- login nav and podcast stuff--}}
        @include('partials._top-nav')

        <div class="row sub">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="sub-form rf">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('login')}}">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" name="username" class="form-control" placeholder="Your name here" >
                        </div>

                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <label class="label label-primary verif">hxie </label>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="verification">Verification Code</label>
                                <input type="text" name="verification" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-success">login</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection



