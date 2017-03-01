@extends('templates.main')

@section('content')

    <div class="container">
        {{-- login nav and podcast stuff--}}
        @include('partials._top-nav')

        <div class="row career">
            <div class="col-sm-6">
                <div class="career-left">
                    <img src="{{ url('img/page/career.png') }}" class="img-responsive" alt="">
                    <p>
                        Webemplo  strongly provide every employee a fair and inspiring workspace - where everyone’s idea and perspective are valued.
                        That offers diverse opportunities for our employees to excel.<br/><br/>
                        Get ready to explore these wonderful opportunities that await you with a career at Webemplo.<br/><br/>

                        If you are interested in working with us, please fill the form below and we will get back to you.

                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="career-right">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="career-form rf">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('career')}}" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" name="fname" class="form-control" placeholder="Your name here" >
                                </div>

                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Your Email here" required>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="08012345678">
                                </div>

                                <div class="form-group">
                                    <label for="sme">Proposed SME</label>
                                    <select name="sme" class="form-control">
                                        <option value="">Select Category</option>
                                        <option value="">Tissue Paper Production</option>
                                        <option value="">Sachet Water Factory</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="other_sme">Other SME</label>
                                    <input type="text" name="other_sme" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label for="profile_pix">Upload your CV</label>
                                    <input type="file" name="cv" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label for="profile_pix">Upload your Passport</label>
                                    <input type="file" name="passport" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit &amp; Share</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection



