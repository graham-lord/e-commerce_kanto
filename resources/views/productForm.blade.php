@extends('layouts.layout2')
@section('content')
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <link rel="stylesheet" href="/css/productForm.css">
  </head>
  <body>
    <div class="productForm-card">
      <header>
        <h2>Add your own product</h2>
      </header>
      <form action="/addProduct" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div>
          <label for="name">Product Name</label><br>
          <input class="input" type="text" name="name"><br><br>
        </div>
        <div>
          <label for="price">Price</label><br>
          <input class="input" type="text" name="price"><br><br>
        </div>
        <div>
          <label for="description">Description</label><br>
          <input class="input" type="textbox" name="description"><br><br>
        </div>
        <div>
          <label for="product_image">Choose product image</label><br>
          <input type="file" name="product_image">
        </div>
        <br>
        <div>
          <button type="submit">Add product</button>
        </div>
      </form>
    </div>
  </body>
  </html>
@endsection