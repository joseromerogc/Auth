<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auth</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('css/auth1.css')}}">
  <!-- toast CSS -->
    <link href="{{asset('plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="{{asset('js/auth1.js')}}"></script>
</head>
<body>

<div class="container">
  
  <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading panel-heading-custom">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="{{ url('/login') }}" method="post" role="form" style="display: block;" >
								{{ csrf_field() }}
									
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon">@</div>
											<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
										</div>
									</div>
										
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"> <i class="fa fa-key" aria-hidden="true"></i> </div>
											<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
										</div>
									</div>	

									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="{{ url('/register') }}" method="post" role="form" style="display: none;" >
								{{ csrf_field() }}
									<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
										<input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" value="{{ old('name') }}" required>

									</div>

									<div class="form-group">
										<input type="email" name="email" id="remail" tabindex="1" class="form-control" placeholder="Email Address" value="{{ old('email') }}">
										<strong class="help-block alert alert-danger" id="e1" 
										style="display: none;">
										 <i class='fa fa-exclamation-circle'></i>ERROR: 
											<span id="erroremail">
	                                    	</span>
                                    	</strong>
									</div>

									<div class="form-group">
										<input type="password" name="password" id="rpassword" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="password_confirmation" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
										<strong class="help-block alert alert-danger" id="e2" 
										style="display: none;">
										 <i class='fa fa-exclamation-circle'></i>ERROR: 
											<span id="errorpass">
	                                    	</span>
                                    	</strong>
                                    </span>
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		
		 $('#register-form').submit(function(e){
		 
		 var email = $('#remail').val();
		 var pass = $('#rpassword').val();
		 var conf = $('#confirm-password').val();
  //Manage error of email
  
  url="{{url('/')}}"+"/user/email/"+email;
  	$.get(url, function (d) {
             data = d;

             if(!jQuery.isEmptyObject(data)){
             	$('#e1').show();
             	$('#erroremail').html("email exist");
             	e.preventDefault(e);
             }
             else{
             	$('#e1').hide();
             }
 		});

  	//Manage error of password
  	if(pass!=conf){
  		$('#e2').show();
             	$('#errorpass').html("Password dont Match");
             	e.preventDefault(e);
             }
  	else{
  		$('#e2').hide();
  	}
  	//e.preventDefault(e);
  	
    });
	
	@foreach ($errors->all() as $error)
	$.toast({
		text: "<h4><i class='fa fa-times-circle fa-2x'></i> {{$error}}</h4>",
		position : 'top-center',
		hideAfter : false,
		bgColor : '#cc0000', 
		textColor: 'white'
		}
	);	
		});
	@endforeach
	
</script>

<script src="{{asset('plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>

</body>
</html>
