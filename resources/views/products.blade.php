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
          All Products
        </div>
        <div class="add">
          <a href="/productForm">Add Product</a>
        </div>
      </div>
      <div class="product-flex">
        <div class="product">
          <img src="/images/cpu.png" alt="a very fast processor">
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