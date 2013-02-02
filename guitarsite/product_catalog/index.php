<?php
require('../model/database.php');
require('../model/product_db.php');
require('../model/category_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_products';
}

if ($action == 'list_products') {
    $category_id = $_GET['category_id'];
    if (empty($category_id)) {
        $category_id = 1;
    }

    $categories = get_categories();
    $category_name = get_category_name($category_id);
    $products = get_products_by_category($category_id);

    include('product_list.php');
} else if ($action == 'view_product') {
    $categories = get_categories();

    $product_id = $_GET['product_id'];
    $product = get_product($product_id);

    // Get product data
    $code = $product['productCode'];
    $name = $product['productName'];
    $list_price = $product['listPrice'];
    $discount_percent = $product['discountPercent'];
    $discount_amount = $list_price * ($discount_percent / 100);
    $description = $product['description'];
    
    $list_price_formatted = '$'.$list_price;

    $discount_percent_formatted = number_format($discount_percent, 0).'%';

    // Calculate discounts
    $unit_price = $list_price - $discount_amount;

    // Format the calculations
    $discount_amount_formatted = '$'.number_format($discount_amount, 2);
    $unit_price_formatted = '$'.number_format($unit_price, 2);

    // Get image URL and alternate text
    $image_filename = '../images/' . $code . '.png';
    $image_alt = 'Image: ' . $code . '.png';

    include('product_view.php');
}
?>
<link rel="stylesheet" href="guitarstore.css" />