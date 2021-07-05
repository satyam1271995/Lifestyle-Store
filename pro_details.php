<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/links.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Products | Satyam Lifestyle Store</title>
        
    </head>

    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container" id="content">
            <?php

	$query = " SELECT * FROM items order by id ASC ";

	$result = mysqli_query($con, $query);

	$num = mysqli_num_rows($result);

	if($num > 0){
		while($product = mysqli_fetch_array($result)){
			?>
            
            
            <div class="card">
                <div class="">
                    <div class="wrapper row">
                        <div class="preview col-md-6">
                            <div class="preview-pic tab-content">
                                <img src="img/<?php echo $product['image'];  ?>" alt="">
                                <ul class="preview-thumbnail nav nav-tabs">
                                    <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="img/<?php echo $product['image'];  ?>" alt=""></a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="details col-md-6">
                         <h3 class="product-title">men's shoes fashion</h3>
                         <div class="stars">
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			</div>
                         <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
			
                        <p>Price: &#8377; <?php echo $product['price'];  ?> </p>
                         <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                         
                         <h5 class="sizes">sizes:
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="size" value="s">
                        <label for="male">S</label>&nbsp;
                        <input type="radio" name="size" value="m">
                         <label for="male">M</label>&nbsp;
                         <input type="radio" name="size" value="l">
                         <label for="male">L</label>&nbsp;
                         <input type="radio" name="size" value="xl">
                         <label for="male">XL</label>
		         </h5>
            
                        <h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
                                                <h5 class="size">QUANTITY:
                                                    <div class="def-number-input number-input safari_only mb-0">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                    class="minus"></button>
                  <input class="quantity" min="0" name="quantity" value="1" type="number">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                    class="plus"></button>
                </div>
                                                </h5>
                                <?php
                            
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart !=0) {
                                    //echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                         
                                <a href="cart-add.php?id=<?php echo $product['id']; ?>" class="add-to-cart btn btn-default" name="add" value="add"><span class = "glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                                
                                <?php
                                }
                            
                            ?>
                        
                        
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <hr>

            
            <hr>
            <?php		
		}
	}
	?>
        </div>
                

        <?php include("includes/footer.php"); ?>
    </body>

</html>