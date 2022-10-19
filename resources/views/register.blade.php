<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="/css/register.css">
</head>
<body>
<div class="register-card">
  <header>
      <h2>Register</h2>
      <p>Create an account to buy parts</p>
  </header>
  <form method="POST" action="/users" autocomplete="off">
    @csrf
    <div class>
      <label for="name">Name</label> <br>
      <input type="text" name="name"/> <br><br>
      @error('name')
        <p>{{$message}}</p>
      @enderror
    </div>
    <div>
      <label for="email">Email</label> <br>
      <input type="email" name="email"/> <br><br>
      @error('email')
        <p>{{$message}}</p>
      @enderror
    </div>
    <div>
      <label for="password"> Password </label> <br>
      <input type="password" name="password" /><br><br>
      @error('password')
        <p>{{$message}}</p>
      @enderror
    </div>
    <div>
      <label for="password_confirmation"> Confirm Password </label> <br>
      <input type="password" name="password_confirmation"/> <br><br>
      @error('password_confirmation')
        <p>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-6">
      <button type="submit"> Sign Up </button>
    </div>
    <div>
      <p>
        Already have an account?<a href="/login" class="text-laravel">Login</a>
      </p>
    </div>
  </form>
</div>
</body>
</html>