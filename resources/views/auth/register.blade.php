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
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name">Full Name</label>
                            <input id="name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="Your name here"  required autofocus>

                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name">Last Name</label>
                            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Your surname"  required autofocus>

                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone">Phone</label>
                            <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Mobile number" required>

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('bank_name') ? ' has-error' : '' }}">
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

                            @if ($errors->has('bank_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('bank_name') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('acct_name') ? ' has-error' : '' }}">
                            <label for="acct_name">Account Name</label>
                            <input type="text" name="acct_name" class="form-control" >

                            @if ($errors->has('acct_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('acct_name') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('acct_number') ? ' has-error' : '' }}">
                            <label for="acct_number">Account Number</label>
                            <input type="text" name="acct_number" class="form-control" placeholder="Your bank account">

                            @if ($errors->has('acct_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('acct_number') }}</strong>
                                </span>
                            @endif
                        </div>

                        {{--<div class="form-group{{ $errors->has('profile_fix') ? ' has-error' : '' }}">
                            <label for="profile_pix">Profile</label>
                            <input type="file" name="profile_pix" class="form-control" >

                            @if ($errors->has('profile_pix'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('profile_pix') }}</strong>
                                    </span>
                            @endif
                        </div>--}}

                        <div class="form-group{{ $errors->has('sme') ? ' has-error' : '' }}">
                            <label for="sme">Proposed SME</label>
                            <select name="sme" class="form-control">
                                <option value="sme1">Select Category</option>
                                <option value="Tissue Paper">Tissue Paper Production</option>
                                <option value="Sachet Water Factory">Sachet Water Factory</option>
                            </select>

                            @if ($errors->has('sme'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sme') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('other_sme') ? ' has-error' : '' }}">
                            <label for="other_sme">Other SME</label>
                            <input type="text" name="other_sme" class="form-control">

                            @if ($errors->has('other_sme'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('other_sme') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                        </div>
                    </form>

        </div>
    </div>
</div>
@endsection
