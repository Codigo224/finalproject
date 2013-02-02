<?php include '../view/header.php'; ?>
<link rel="stylesheet" href="../main.css" />
<div id="main">
    <div id="sidebar">
        <h1>Categories</h1>
        <ul class="nav">
            <!-- display links for all categories -->
            <?php foreach($categories as $category) : ?>
            <li>
                <a href="?category_id=<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div id="content">
        <h1><?php echo $name; ?></h1>
        <div id="left_column">
            <p>
            <?php 
            $image_filename = '../images/' . $product['productCode'] . '_m.png';
            
            ?>
                <img src="<?php echo $image_filename; ?>"
                    alt="<?php echo $image_alt; ?>" />
            </p>
            
        </div>
		
        <div id="right_column">
            <p><b>List Price:</b> <?php echo $list_price_formatted; ?></p>
           
            <p><b>Pete's Price:</b> <?php echo $unit_price_formatted; ?></p>
            <?php 
            if ($discount_percent == 0) {
            	echo "";
            } else {
            	echo "<p><b>You Save</b>: $discount_amount_formatted ($discount_percent_formatted)</p>";
            }
            
            ?>
            <form action="<?php echo '../cart' ?>" method="post">
                <input type="hidden" name="action" value="add" />
                <input type="hidden" name="product_id"
                       value="<?php echo $product_id; ?>" />
                <b>Quantity:</b>
                <input id="quantity" type="text" name="quantity" value="1" size="2" />
                <br /><br />
                <input type="submit" value="Add to Cart" />
            </form>
            <br />
            <h2>Description:</h2>
            <p><?php echo $product['description']; ?></p>
        </div>
    </div>
</div>
<?php include '../view/footer.php'; ?>