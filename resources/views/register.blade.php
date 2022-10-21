@extends('layouts.layout1')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSK</title>
  <link rel="stylesheet" href="/css/register.css">
</head>
<body>
  
  <div class="register-card">
    <header>
        <h2>Register</h2>
        <p class="buy-parts">Create an account to buy parts</p>
    </header>
    <form method="POST" action="/users" autocomplete="off">
      @csrf
      <div class>
        <label for="name">Name</label> <br>
        <input class="input" type="text" name="name" placeholder="username"/> <br><br>
        @error('name')
          <p class="error">{{$message}}</p>
        @enderror
      </div>
      <div>
        <label for="email">Email</label> <br>
        <input class="input" type="email" name="email" placeholder="juandelacruz@hotmail.com"/> <br><br>
        @error('email')
          <p class="error">{{$message}}</p>
        @enderror
      </div>
      <div>
        <label for="password"> Password </label> <br>
        <input class="input" type="password" name="password"/><br><br>
        @error('password')
          <p class="error">{{$message}}</p>
        @enderror
      </div>
      <div>
        <label for="password_confirmation"> Confirm Password </label> <br>
        <input class="input" type="password" name="password_confirmation"/> <br><br>
        @error('password_confirmation')
          <p class="error">{{$message}}</p>
        @enderror
      </div>
      <div class="btn">
        <button type="submit"> Sign up </button>
      </div>
      <div>
        <p>
          Already have an account?<a href="/login" class="login-r"> Login</a>
        </p>
      </div>
    </form>
  </div>
</body>
</html>
@endsection