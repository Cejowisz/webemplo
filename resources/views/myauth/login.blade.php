@extends('templates.main')

@section('content')

    <div class="container">
    {{-- login nav and podcast stuff--}}
        @include('partials._top-nav')


        <div class="row">
            <div class="col-sm-6 col-offset-3">
                <form action="{{ route('handlelogin') }}" class="form-horizontal" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""></label>
                        <input type="text" name="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for=""></label>
                        <input type="text" name="" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit"  class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

    </div>


@endsection