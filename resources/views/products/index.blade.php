<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <ul>
        <?php foreach($products as $product): ?>
		    <li><?php echo $product['productName'] ,
            "<br>color - ", $product['color'],
            "<br>price - " , $product['price']?></li>
		<?php endforeach ?>
    </ul>
</body>
</html>