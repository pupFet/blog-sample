@extends('layouts.app')

@section('content')
<table class="form"align="center">
  <tr>
    <td>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>&nbsp;Login</h1></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><h3>&nbsp;&nbsp;E-Mail Address</h3></label>

                            <div class="col-md-6" align="center">
                                <input id="email" type="email" class="form-control" name="email" size="50"value="{{ old('email') }}" required autofocus >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"><h3>&nbsp;&nbsp;Password</h3></label>

                            <div class="col-md-6"align="center">
                                <input id="password" type="password" class="form-control"size="50" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group"align="right">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        &nbsp;&nbsp;
                                    </label>
                                </div>
                            </div>
                        </div>
                        

                        <div align="center"class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <h2>Login</h2>
                                </button>

                                <a class="btn-link" href="{{ route('register') }}">
                                    <h4>Create a new account</h4>
                                    <a class="btn-link" href="{{ route('password.request') }}">
                                    <h4>Forgot Your Password?</h4>

                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</td>
</tr>
</table>
@endsection
