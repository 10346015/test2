@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" oninput="check_name()" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                <div id="name_error" style="color:#FF0000"></div>
                                <script type="text/javascript" src="{{ URL::asset('js/SignUpName.js') }}"></script>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone number</label>

                            <div class="col-md-6">
                                <input id="phone" type="string" oninput="phone_number()" class="form-control" name="phone" value="{{ old('phone') }}" required>
                                <div id="phone_error" style="color:#FF0000"></div>
                                <script type="text/javascript" src="{{ URL::asset('js/SignUpPhone.js') }}"></script>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" oninput="check_password()" class="form-control" name="password" required>
                                <div id="password_error" style="color:#FF0000"></div>
                                <div id="password_confirm_error" style="color:#FF0000"></div>
                                <script type="text/javascript" src="{{ URL::asset('js/SignUpPassword.js') }}"></script>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" oninput="check_password_confirm()" class="form-control" name="password_confirmation" required>
                                <script type="text/javascript" src="{{ URL::asset('js/SignUpPasswordConfirm.js') }}"></script>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" oninput="check_email()" class="form-control" name="email" value="{{ old('email') }}" required>
                                <div id="email_error" style="color:#FF0000"></div>
                                <script type="text/javascript" src="{{ URL::asset('js/SignUpEmail.js') }}"></script>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input id="account_state_id" type="hidden" class="form-control" name="account_state_id" value="1" >



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
