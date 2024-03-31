<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
  <link rel="stylesheet" href="css/login.css">
</head>

<body>
@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>

@endif

  <div class="main">
    <p class="sign" align="center" >Sign in</p>
    <form class="form1" action="{{ route('sample.validate_login') }}" method="post">
					@csrf


          @if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
      <input class="un " name="email" type="text" align="center" placeholder="Email">
      @if($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
						@endif
      <input class="pass" name="password" type="password" align="center" placeholder="Password">
      <button class="submit" align="center" type="submit">Sign in</button>
      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
      <p class="forgot" align="center"><a href="registration">Dont Have an Account?Register</p>
            
                
    </div>
     
</body>

</html>