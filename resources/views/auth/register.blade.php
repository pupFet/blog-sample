@extends('layouts.app')

@section('content')
<table class="register" align="center">
  <tr>
    <td>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>&nbsp;Register</h1></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                      <div>
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label"><h3>&nbsp;&nbsp;First Name</h3></label>

                            <div align="center"class="col-md-6">
                                <input id="firstname" style="width: 80%"type="text" class="form-control textCapital" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label"><h3>&nbsp;&nbsp;Last Name</h3></label>

                            <div align="center"class="col-md-6">
                                <input id="lastname" style="width: 80%"type="text" class="form-control textCapital" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label"><h3>&nbsp;&nbsp;Username</h3></label>

                            <div align="center"class="col-md-6">
                                <input id="username" style="width: 80%"type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><h3>&nbsp;&nbsp;E-Mail Address</h3></label>

                            <div align="center"class="col-md-6">
                                <input id="email" style="width: 80%" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"><h3>&nbsp;&nbsp;Password</h3></label>

                            <div align="center"class="col-md-6">
                                <input id="password" style="width: 80%" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label"><h3>&nbsp;&nbsp;Confirm Password</h3></label>

                            <div align="center"class="col-md-6">
                                <input id="password-confirm" style="width: 80%"type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <br></br>
                        <div align="center"style="height:50px"class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn1 btn-primary">
                                    <b>Register</b>  
                                </button>
                               
                               
                            </div>
                           
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
<tr> 
<td align="center">

 <!--Not finalized, NOTE:: Change href after registering it on a route.-->
 <a href="http://127.0.0.1:8000"><p class="cancelLink">Cancel</p></a>

</td>

</tr>

</table>


<br></br>
@endsection
