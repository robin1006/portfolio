<div class="row align-items-center">
	<div class="col-lg-6 col-md-6">
		<div class="products-image">
			<img src="<?=$result_ecomm['image']?>" alt="image">
		</div>
	</div>
	<div class="col-lg-6 col-md-6">
		<div class="products-content">
			<h3><a href="<?php echo WEB_URL; ?>ecommers/productDetails/<?=encrypt_url($result_ecomm['id_new']);?>"><?=$result_ecomm['name']?></a></h3>
			<form method="POST" action="addCart" enctype="multipart/form-data">
			<div class="price">
				<!--<span class="old-price">&#8377;<?/*=$result_ecomm['price']*/?></span>-->
				<span class="new-price">&#8377;<?=$result_ecomm['price']?></span>
			</div>
			<p><?=$result_ecomm['description'];?></p>
			<div class="products-add-to-cart">
				<div class="quantities">
					<span class="sub-title">Qty:</span>
					<div class="input-counter">
						<input type="number"  name="quantity" value="1">
					</div>
				</div>
				<input type="hidden" name="image" value="<?=$result_ecomm['image'];?>">
				<input type="hidden" name="id_new_product" value="<?=$result_ecomm['id_new'];?>">
				<input type="hidden" name="price" value="<?=$result_ecomm['price'];?>">
				<input type="hidden" name="name" value="<?=$result_ecomm['name'];?>">
				<input type="submit" value="Add to Cart " name="submit" id="trial_submit" class="default-btn shop-color">
			</div>
			</form>
			<ul class="social-share">
				<li><span>Share:</span></li>
				<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
			</ul>
		</div>
	</div>
</div>
