<div class="shop-banner-area">
	<div class="container">
		<div class="shop-banner-content">
			<span class="sub-title">Welcome</span>
			<h1>Season Clearance</h1>
			<h4>Sale Upto 30%</h4>
			<a href="<?php echo WEB_URL; ?>ecommers/productGrid" class="default-btn shop-color">Shop Now <i class="fas fa-chevron-right"></i></a>
		</div>
	</div>
</div>
<?php $this->load->view('e-theme/message_view');?>
<div class="categories-area pt-100 pb-70">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="single-categories-box">
					<img src="<?php echo WEB_PATH; ?>assets/img/logo/categories-img3.jpg" alt="image">
					<h3>Woman Collection</h3>
					<a href="<?php echo WEB_URL; ?>ecommers/productGrid" class="link-btn"></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="single-categories-box">
					<img src="<?php echo WEB_PATH; ?>assets/img/logo/categories-img2.jpg" alt="image">
					<h3>Accessories Collection</h3>
					<a href="<?php echo WEB_URL; ?>ecommers/productGrid" class="link-btn"></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="single-categories-box">
					<img src="<?php echo WEB_PATH; ?>assets/img/logo/categories-img1.jpg" alt="image">
					<h3>Man Collection</h3>
					<a href="<?php echo WEB_URL; ?>ecommers/productGrid" class="link-btn"></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="products-area pb-70">
	<div class="container">
		<div class="section-title style-three">
			<h2><span>Best Selling Products</span></h2>
		</div>
		<div class="row justify-content-center">
			<?php foreach ($result as $val){?>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
				<div class="single-products-box">
					<div class="image">
						<a href="<?php echo WEB_URL; ?>ecommers/productDetails/<?=encrypt_url($val['id_new']);?>" class="d-block"><img src="<?=$val['image']?>" alt="image"></a>
						<ul class="buttons-list">
							<li>
								<form method="POST" action="addCart" enctype="multipart/form-data">
									<input type="hidden"  name="quantity" value="1">
									<input type="hidden" name="image" value="<?=$val['image'];?>">
									<input type="hidden" name="id_new_product" value="<?=$val['id_new'];?>">
									<input type="hidden" name="price" value="<?=$val['price'];?>">
									<input type="hidden" name="name" value="<?=$val['name'];?>">
									<button name="submit" value="submit" title="Add to Cart"><i class="fas fa-shopping-cart"></i></button>
								</form>
							</li>
							<li>
								<a href="#">
									<i class="far fa-heart"></i>
									<span class="tooltip-label">Add to Wishlist</span>
								</a>
							</li>
							<li>
									<a data-bs-toggle="modal"  class="model-data" data-id_qr="<?= $val['id_new'] ?>">
									<i class="fas fa-search"></i>
									<span class="tooltip-label">Quick View</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="content">
						<h3><a href="<?php echo WEB_URL; ?>ecommers/productDetails/<?=encrypt_url($val['id_new']);?>"><?=$val['name']?></a></h3>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
						<div class="price">
							<span class="new-price">&#8377;<?=$val['price']?></span>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</div>

<div class="trending-style-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="trending-style-image">
					<img src="<?=$result_ecomm['image']?>" alt="image">
					<img src="<?=$result_ecomm['image']?>" alt="image">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="trending-style-content">
					<h2><?=$result_ecomm['name']?></h2>
					<h3><?=$result_ecomm['heading']?></h3>
					<p><?=$result_ecomm['desc_one']?></p>
					<p><?=$result_ecomm['desc_two']?></p>
					<p><?=$result_ecomm['desc_three']?></p>
					<a href="products-grid.html" class="default-btn shop-color">Shop Collection <i class="fas fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="products-area pt-100 pb-70">
	<div class="container">
		<div class="section-title style-three">
			<h2><span>New Collection Products</span></h2>
		</div>
		<div class="row justify-content-center">
			<?php foreach ($result_new_prd as $val){?>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
				<div class="single-products-box">
					<div class="image">
						<a href="<?php echo WEB_URL; ?>ecommers/productDetails/<?=encrypt_url($val['id_new']);?>" class="d-block"><img src="<?=$val['image']?>" alt="image"></a>
						<ul class="buttons-list">
							<li>
								<form method="POST" action="addCart" enctype="multipart/form-data">
									<input type="hidden"  name="quantity" value="1">
									<input type="hidden" name="image" value="<?=$val['image'];?>">
									<input type="hidden" name="id_new_product" value="<?=$val['id_new'];?>">
									<input type="hidden" name="price" value="<?=$val['price'];?>">
									<input type="hidden" name="name" value="<?=$val['name'];?>">
									<button name="submit" value="submit" title="Add to Cart"><i class="fas fa-shopping-cart"></i></button>
								</form>
								<!--
								<a href="<?php /*echo WEB_URL; */?>ecommers/cartDetails">
									<i class="fas fa-shopping-cart"></i>
									<span class="tooltip-label">Add to Cart</span>
								</a>-->
							</li>
							<li>
								<a href="#">
									<i class="far fa-heart"></i>
									<span class="tooltip-label">Add to Wishlist</span>
								</a>
							</li>
							<li>
								<a data-bs-toggle="modal"  class="model-data" data-id_qr="<?= $val['id_new'] ?>">
									<i class="fas fa-search"></i>
									<span class="tooltip-label">Quick View</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="content">
						<h3><a href="<?php echo WEB_URL; ?>ecommers/productDetails/<?=encrypt_url($val['id_new']);?>"><?=$val['name']?></a></h3>
						<div class="rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<div class="price">
							<span class="new-price">&#8377;<?=$val['price']?></span>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</div>

<div class="blog-area pt-100 pb-70">
	<div class="container">
		<div class="section-title style-three">
			<h2><span>Our Latest News</span></h2>
		</div>
		<div class="row justify-content-center">
			<?php foreach ($news as $n){?>
			<div class="col-lg-4 col-md-6">
				<div class="single-post-item without-box-shadow">
					<div class="post-image">
						<a href="#" class="d-block">
							<img src="<?=$n['image']?>" alt="image">
						</a>
					</div>
					<div class="post-content">
						<ul class="meta">
							<li><i class="far fa-calendar-alt"></i> <?php echo getDateFDYHI($n['created_on']); ?></li>
							<li><i class="far fa-user-circle"></i> <a href="#"><?=$n['added_by']?></a></li>
						</ul>
						<h3><a href="#"><?=$n['heading']?></a></h3>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</div>
<div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			<div class="col-12 col-md-9 main-div p-4 event-add">

			</div>
		</div>
	</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
		$(document).on('click','.model-data',function(){
			var id = $(this).attr('data-id_qr');
			if(id > 0){
				$('#productsQuickView').modal('show');
				$.ajax({
					url:'<?=WEB_URL?>ecommers/viewDetails',
					type:'post',
					data: {'id':id },
					success : function(res) {
						$('#productsQuickView').find('.event-add').html(res);
					}
				});
			}
		});
</script>
