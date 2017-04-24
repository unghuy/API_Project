<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Infomation Product</title>
    <link rel="stylesheet" href="../css/infoproduct.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    <div class="product_table">
      <table>
        <tr>
          <th class="head">STT</th>
          <th class="head1">Product Name</th>
          <th class="head1">Product Image</th>
          <th class="head1">Price</th>
          <th class="head2"></th>
          <th class="head2"></th>
        </tr>
        <?php $count = 0 ?>
        @foreach ($pro as $value)

          <tr>
            <td class="stt"><?php echo ++$count ?></td>
            <td>{{ $value->pro_name }}</td>
            <td class="img"><img src="images/{{ $value->pro_image }}" alt="IMAGE"></td>
            <td>{{ $value->pro_price }}</td>
            <td class="crud"><a href="#">Edit</a></td>
            <td class="crud"><a href="#">Delete</a></td>
          </tr>

        @endforeach
      </table>
    </div>
  </body>
</html>
