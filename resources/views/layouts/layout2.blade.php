<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KCS</title>
  <link rel="stylesheet" href="/css/layout2.css">
  <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
  <div class="home">
    <div class="header">
      <div class="logo"><a href="/home"><img class="logo-img" src="/images/logo.png" alt="asdads"></a></div>
      <div class="user">
        </div>
        <ul class="navbar">
        <p class="username">Welcome {{auth()->user()->name}}</p>
        <li><a href="/home">Home</a></li>
        <li><a href="/products">Products</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li class="logout">
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="logt">
              Logout
            </button>
          </form>
        </li>
      </ul>
    </div>
      @yield('content')
    <div class="footer">
      Copyright &copy; 2022 - Team Kanto
    </div>
  </div>
</body>
</html>