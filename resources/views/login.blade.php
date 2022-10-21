@extends('layouts.layout1')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/css/login.css">
</head>
<body>
<div class="login-card">
  <header>
      <h2>Login</h2>
      <p class="buy-parts">Login to your account to buy parts</p>
  </header>
  <form method="POST" action="/users/authenticate" autocomplete="off">
    @csrf
    <div>
      <label for="email">Email</label> <br>
      <input class="input" type="email" name="email"/> <br><br>
      @error('email')
        <p class="error">{{$message}}</p>
      @enderror
    </div>
    <div>
      <label for="password"> Password </label> <br>
      <input class="input" type="password" name="password" /><br><br>
      @error('password')
        <p class="error">{{$message}}</p>
      @enderror
    </div>
    <div class="btn">
      <button type="submit"> Login </button>
    </div>
    <div>
      <p>
        Don't have an account?<a href="/register" class="register-l"> Register</a>
      </p>
    </div>
  </form>
</div>
</body>
</html>
@endsection