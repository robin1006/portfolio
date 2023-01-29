<div class="page-title-area bg-image bg3 style-two jarallax">
	<div class="container">
		<?php $this->load->view('theme/message_view');?>
		<div class="page-title-content">
			<h2>Products Details</h2>
			<ul>
				<li><a href="<?php echo WEB_URL; ?>ecommers/index">Home</a></li>
				<li>Products Details</li>
			</ul>
		</div>
	</div>
</div>
<div class="products-details-area ptb-100">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5 col-md-12">
				<div class="products-details-image">
					<a href="<?=$result_ecomm['image'];?>" class="popup-image">
						<img src="<?=$result_ecomm['image'];?>" alt="image">
					</a>
				</div>
			</div>
			<div class="col-lg-7 col-md-12">
				<div class="products-details-desc">
					<h3><a href="#"><?=$result_ecomm['name'];?></a></h3>
					<div class="products-review">
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<a href="#" class="rating-count">(3 reviews)</a>
					</div>
					<div class="price">
						<!--<span class="old-price">$99.00</span>-->
						<span class="new-price"><?=$result_ecomm['price'];?></span>
					</div>
					<p><?=$result_ecomm['description'];?></p>
					<div class="products-meta">
						<span>SKU: <span class="sku"><?=$result_ecomm['size'];?></span></span>
						<span>Availability: <span class="in-stock">In Stock</span></span>
						<span>Categories: <a href="#"><?=$result_ecomm['category'];?></a></span>
						<span>Tag: <a href="#"><?=$result_ecomm['tag'];?></a></span>
					</div>
					<div class="products-add-to-cart">
						<div class="quantities">
							<span class="sub-title">Qty:</span>
							<div class="input-counter">
								<span class="minus-btn"><i class='fas fa-minus'></i></span>
								<input type="text" value="1">
								<span class="plus-btn"><i class='fas fa-plus'></i></span>
							</div>
						</div>
						<button type="submit" class="default-btn shop-color">Add to Cart <i class="fas fa-chevron-right"></i></button>
					</div>
					<ul class="social-share">
						<li><span>Share:</span></li>
						<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-12 col-md-12">
				<div class="products-details-tabs">
					<div class="single-tabs-box">
						<h2><span>Description</span></h2>
						<div class="inner-box">
							<h3>Overview</h3>
							<p><?=$result_ecomm['over_view'];?></p>
							<ul>
								<li><strong>Instant</strong> bestseller</li>
								<li>Translated into 18 languages</li>
								<li>#1 Most Recommended Book of the year.</li>
								<li>A neglected project, widely dismissed, its champion written off as unhinged.</li>
							</ul>
						</div>
					</div>
					<div class="single-tabs-box">
						<h2><span>Additional Information</span></h2>
						<div class="inner-box">
							<div class="table-responsive">
								<table class="table table-striped">
									<tbody>
									<tr>
										<td>Handle Height</td>
										<td><?=$result_ecomm['height'];?></td>
									</tr>
									<tr>
										<td>Width</td>
										<td><?=$result_ecomm['width'];?></td>
									</tr>
									<tr>
										<td>Wheels</td>
										<td><?=$result_ecomm['wheel'];?></td>
									</tr>
									<tr>
										<td>Dimensions</td>
										<td><?=$result_ecomm['dimensions'];?></td>
									</tr>
									<tr>
										<td>Material</td>
										<td><?=$result_ecomm['material'];?></td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="single-tabs-box">
						<h2><span>Reviews</span></h2>
						<div class="inner-box">
							<div class="products-review-comments">
								<?php foreach ($comment as $c){?>
								<div class="user-review">
									<img src="<?=$c['image']?>" alt="image">
									<div class="review-rating">
										<div class="review-stars">
											<i class='fas fa-star checked'></i>
											<i class='fas fa-star checked'></i>
											<i class='fas fa-star checked'></i>
											<i class='fas fa-star checked'></i>
											<i class='fas fa-star checked'></i>
										</div>
									</div>
									<span class="d-block sub-comment"><?=$c['name']?></span>
									<p><?=$c['desc']?></p>
								</div>
								<?php }?>
							</div>
							<div class="review-form-wrapper">
								<h3>Add a review</h3>
								<p class="comment-notes">Your email address will not be published. Required fields are marked <span>*</span></p>
								<form method="post" action="">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="rating">
												<input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
												<input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
												<input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
												<input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
												<input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" name="name" placeholder="Name *">
												<input type="hidden" name="id_product" value="<?=$id;?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<input type="email" class="form-control" name="email" placeholder="Email *">
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<textarea placeholder="Your review" class="form-control" cols="30" rows="6" name="desc"></textarea>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<p class="comment-form-cookies-consent">
												<input type="checkbox" id="test1">
												<label for="test1">Save my name, email, and website in this browser for the next time I comment.</label>
											</p>
										</div>
										<div class="col-lg-12 col-md-12">
											<button type="submit" name="submit" value="Submit">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
