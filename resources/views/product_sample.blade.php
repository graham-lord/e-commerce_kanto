@extends('layouts.layout2')
@section('content')
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <link rel="stylesheet" href="/css/product_sample.css">
  </head>
  <body>
  <div class="sample-card">
    <div class="image">
      <img src="/images/cpu.png" alt="cpu">
    </div>
    <div class="details">
      <p>Home/Product</p>
      <h2>Intel Core i9</h2>
      <div class="price">$10.00</div>
      <div class="cart">
        <select name="counter" id="counter" class="counter">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
        <button class="addc">Add to Cart</button>
      </div>
      <h4>Product Details</h4>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque tenetur perspiciatis tempore deserunt, exercitationem voluptatum quas quod consequatur iste mollitia.</p>
    </div>
  </div>
  </body>
  </html>
@endsection