@extends('templates.main')

@section('content')

    <div class="container">
        {{-- login nav and podcast stuff--}}
        @include('partials._top-nav')

        <div class="row sub">
            <div class="sub-brief">
                <ul>
                    <h4>How to Subscribe</h4>
                    <li>Fill the Sign up form below</li>
                    <li>Make a payment of #12,000 subscription fee</li>
                    <li>Follow a confirmation link sent to your email to complete your signup</li>
                </ul>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="col-sm-6 col-sm-offset-3">
                <div class="sub-form rf">
                    <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name">Full Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="Your name here" >

                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Your last name here" >

                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Your Email here" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" class="form-control" placeholder="08012345678">
                        </div>

                        <div class="form-group">
                            <label for="bank">Bank name</label>
                            <select type="text" name="bank_name" class="form-control" id="bank">
                                <option value="">Select Bank</option>
                                <option value="access">Access Bank</option>
                                <option value="citibank">Citibank</option>
                                <option value="diamond">Diamond Bank</option>
                                <option value="ecobank">Ecobank</option>
                                <option value="fidelity">Fidelity Bank</option>
                                <option value="fcmb">First City Monument Bank (FCMB)</option>
                                <option value="fsdh">FSDH Merchant Bank</option>
                                <option value="gtb">Guarantee Trust Bank (GTB)</option>
                                <option value="heritage">Heritage Bank</option>
                                <option value="Keystone">Keystone Bank</option>
                                <option value="rand">Rand Merchant Bank</option>
                                <option value="skye">Skye Bank</option>
                                <option value="stanbic">Stanbic IBTC Bank</option>
                                <option value="standard">Standard Chartered Bank</option>
                                <option value="sterling">Sterling Bank</option>
                                <option value="suntrust">Suntrust Bank</option>
                                <option value="union">Union Bank</option>
                                <option value="uba">United Bank for Africa (UBA)</option>
                                <option value="unity">Unity Bank</option>
                                <option value="wema">Wema Bank</option>
                                <option value="zenith">Zenith Bank</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="acct_name">Account Name</label>
                            <input type="text" name="acct_name" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="acct_number">Account Number</label>
                            <input type="text" name="acct_number" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="profile_pix">Profile Pix</label>
                            <input type="file" name="profile_pix" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="sme">Proposed SME</label>
                            <select name="sme" class="form-control">
                                <option value="sme1">Select Category</option>
                                <option value="sme2">Tissue Paper Production</option>
                                <option value="sme3">Sachet Water Factory</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="other_sme">Other SME</label>
                            <input type="text" name="other_sme" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="other_sme" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm password</label>
                            <input type="password" name="password_confirmation" class="form-control" >
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit &amp; Share</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection



