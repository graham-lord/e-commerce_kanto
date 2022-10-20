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
      <form action="/addProduct" method="post" enctype="multipart/form-data">
        <div>
          <label for="name">Product Name</label><br>
          <input class="input" type="text" name="name"><br><br>
        </div>
        <div>
          <label for="description">Description</label><br>
          <input class="input" type="textbox" name="name"><br><br>
        </div>
        <div>
          <label for="product_image">Choose product image</label><br>
          <input type="file" name="product_image">
        </div>
      </form>
    </div>
  </body>
  </html>
@endsection