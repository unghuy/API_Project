<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Product</title>
    <link rel="stylesheet" href="../css/addproduct.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    <form class="add_form" action="{{ route('product.store') }}" method="POST">
      {{ csrf_field() }}
      <h1><li class="fa fa-coffee"></li>Add Products</h1>
      <input type="text" name="cate_id" placeholder="CateID" required="">
      <input type="text" name="pro_name" placeholder="Product Name" required="">
      <input type="text" name="pro_image" placeholder="Product Image" required="">
      <input type="text" name="pro_price" placeholder="Product Price" required="">
      <input type="submit" name="" id="enter" value="Enter">
    </form>
  </body>
</html>
