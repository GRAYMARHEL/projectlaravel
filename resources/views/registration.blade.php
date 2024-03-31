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
  <div class="main">
    <p class="sign" align="center" >Register</p>
    <form class="form1" action="{{ route('sample.validate_registration') }}" method="POST">
				@csrf

                @if($errors->has('name'))
						<span class="text-danger">{{ $errors->first('name') }}</span>
					@endif
      <input class="un " name="name" type="text" align="center" placeholder="Name" >
      @if($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
      <input class="un " name="email" type="text" align="center" placeholder="Email">
      @if($errors->has('password'))
						<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif
      <input class="pass" name="password" type="password" align="center" placeholder="Password">
      <button class="submit" align="center" type="submit">Register</button>
      <p class="forgot1" align="center" ><a href="login">Already Have an Account?Login</p>
   
            
                
    </div>
     
</body>

</html>