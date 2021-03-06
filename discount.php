<?php
    require_once('./db.php');

    $productId = $_POST['product_id'];
    $couponId = $_POST['coupon_id'];

    $product = getOne("SELECT * FROM products WHERE id = :product_id", [
        ':product_id' => $productId
    ], $conn);

    $coupon = getOne("SELECT * FROM coupons WHERE id = :coupon_id", [
        ':coupon_id' => $couponId
    ], $conn);

    $description = $product['description'];
    $price = $product['price'];
    $discount = $coupon['discount_percent'];

    //discount calculations
    $discountAmt = $price * ($discount / 100);
    $discountPrice = $price - $discountAmt;
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Calculated Price</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="card">
                <h1 class="card-header">Product Discount</h1>
                <div class="card-body">
                    <ul class="row">
                        <li class="col-sm-6">Description: <?= $description ?></li>
                        <li class="col-sm-6">List Price: <?= "$".number_format($price, 2)?></li>
                        <li class="col-sm-6">Coupon: <?= $coupon['code'] ?><?= $coupon['description'] ?></li>
                        <li class="col-sm-6">Discount Percent: <?= $discount."%"?></li>
                        <li class="col-sm-6">Discount Amount: <?= "$".number_format($discountAmt, 2)?></li>
                        <li class="col-sm-6">Discounted Price: <?= "$".number_format($discountPrice,2)?></li>
                    </ul>
                </div>
            </div>  
        </div>
    </body>
</html>