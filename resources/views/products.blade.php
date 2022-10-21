@extends('layouts.layout2')

@section('content')
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <link rel="stylesheet" href="/css/products.css">
  </head>
  <body>
    <div class="product-card">
      <div class="category">
        <div class="all">
        <select name="products" id="products">
          <option value="all">All Products</option>
          <option value="cpu">CPU</option>
          <option value="gpu">Graphics Card</option>
          <option value="ram">RAM</option>
        </select>
        </div>
        <div class="add">
          <a href="/productForm">Sell Product</a>
        </div>
      </div>
      <div class="product-flex">
        <div class="product">
          <a href="/products/sample"><img src="/images/cpu.png" alt="a very fast processor"></a>
        </div>
        <div class="product">
          <img src="/images/cpu.png" alt="a very fast processor">
        </div>
        <div class="product">
          <img src="/images/cpu.png" alt="a very fast processor">
        </div>
        <div class="product">
          <img src="/images/gpu.png" alt="a very fast processor">
        </div>
        <div class="product">
          <img src="/images/gpu.png" alt="a very fast processor">
        </div>
        <div class="product">
          <img src="/images/gpu.png" alt="a very fast processor">
        </div>
        <div class="product">
          <img src="/images/ram.png" alt="a very fast processor">
        </div>
        <div class="product">
          <img src="/images/ram.png" alt="a very fast processor">
        </div>
        <div class="product">
          <img src="/images/ram.png" alt="a very fast processor">
        </div>
        <div class="product">
          <img src="/images/keyboard.png" alt="a very fast processor">
        </div>
        <div class="product">
          <img src="/images/keyboard.png" alt="a very fast processor">
        </div>
        <div class="product">
          <img src="/images/keyboard.png" alt="a very fast processor">
        </div>
        @foreach($products as $product)
        <div class="important">
          <img src="{{ asset('uploads/products/' . $product->product_image) }}" />
        </div>
        @endforeach
      </div>
    </div>
  </body>
  </html>
@endsection