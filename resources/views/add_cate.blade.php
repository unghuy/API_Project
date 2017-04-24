<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Categories</title>
    <link rel="stylesheet" href="../css/addproduct.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    <form class="add_form" action="{{ route('category.store') }}" method="POST">
      {{ csrf_field() }}
      <h1><li class="fa fa-coffee"></li>Add Categories</h1>
      <input type="text" name="cate_name" placeholder="Category Name" required="">
      <input type="text" name="parent_id" placeholder="Parent ID" required="">
      <input type="submit" name="" id="enter" value="Enter">
    </form>
  </body>
</html>
