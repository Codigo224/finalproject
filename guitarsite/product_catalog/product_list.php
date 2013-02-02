<body>
    <header> 
		<a name="top" href="guitarsite.html"><img class="mainlogo"src="images/guitar-logo.png"></a>
		<span class="address">3347 Hollywood Blvd | Burbank, CA | 91502 <br />(right next to the dumpster)</span>
		<div class="tagline">
		<p style="color:#1e0772">The finest</p><p style="color:white;margin-left:94px">musical instruments</p><p style="color:gray;padding-left:45px;">this side of <span style="color:#e64100">Burbank,CA</span></p>
		</div>
		<nav>
			<a href="../final-project/guitarsite.html"><li id="about"> About Us</li></a> 				
			<a href="index.php"><li id="stuff"> Our Stuff </li></a>
			<a href="../final-project/news.html"><li id="news"> News </li></a>
			<a href="../final-project/contact.html"><li id="contact"> Contact </li></a>
		</nav>
	</header>
	<div class="horiz-line"></div>
	<div class="bodywrap">
		<h1 id="lookaround">Come Look Around!</h1>
		
		
	<ul id="stuff2">
	<?php foreach($categories as $category) ?>
		<a href="?category_id=1"><li id="guitars"><span>Guitars</span></li></a>
		<a href="?category_id=2"><li id="basses"><span>Basses</span></li></a>
		<a href="?category_id=3"><li id="drums"><span>Drums</span></li></a>
	</ul>
		
	  
  
    
    <div id="products">
    <?php foreach ($products as $product) : 
    $image_filename = '../images/' . $product['productCode'] . '_s.png';
    $discount_percent = $product['discountPercent'];
    $list_price = $product['listPrice'];
    
    $discount_amount = $list_price * ($discount_percent / 100);
    $unit_price = $list_price - $discount_amount;
    
    $discount_percent_formatted = number_format($discount_percent, 0).'%';
    $discount_amount_formatted = '$'.number_format($discount_amount, 2);
    $list_price_formatted = '$'.number_format($list_price, 2);
    $unit_price_formatted = '$'.number_format($unit_price, 2);
    ?>
    
    	<p>
    		<img src="<?php echo $image_filename; ?>" /><br />
    		<a href=?action=view_product&product_id=<?php echo $product['productID'];?>>
    		<?php echo $product['productName'];?></a><br />
    		<?php 
    			if ($discount_percent == 0) {
    				echo "";
    			} else {
    				echo "<b>List Price:</b> $list_price_formatted<br />";
    			}
    
    		?>
    <?php 
    	if ($discount_percent == 0) {
    		echo "<br /><br /><b>Price:</b> $unit_price_formatted";
    	} else {
    		echo "<b>Pete's Price</b>: $unit_price_formatted<br />";
    	}
    
    ?>
    <?php  
    	if ($discount_percent == 0) {
    		echo "";
    	} else {
    		echo "<b>You save:</b> $discount_amount_formatted ($discount_percent_formatted)";
    	}
    
    ?>
 	<br />
 	<?php endforeach; ?>
    </p>
    </div>
    

		
	<!--  <div id="main">
	    <div id="sidebar">
	        <h1>Categories</h1>
	        <ul class="nav">
	            display links for all categories
	            <?php foreach($categories as $category) : ?>
	            <li>
	                <a href="?category_id=<?php echo $category['categoryID']; ?>">
	                    <?php echo $category['categoryName']; ?>
	                </a>
	            </li>
	            <?php endforeach; ?>
	        </ul>
	    </div>-->
    
    
    
    </div>
    

	
	
	
	
	
	<div class="horiz-line"></div>
	<footer>
		<a class="backtotop" href="#top"><img src="./images/backtotop.gif"></a>
		<div class="socialnav"></div>
		<div class="bottominfo"</div>
		<img href='images/musicnote'>
	</footer>
  </body>
  
	
    


