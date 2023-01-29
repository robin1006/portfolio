<div class="shop-banner-area">
	<div class="container">
		<div class="shop-banner-content">
			<h3><a href="<?php echo WEB_URL; ?>ecommers/index">Home -Products Grid</a></h3>
		</div>
	</div>
</div>
<?php $this->load->view('e-theme/message_view');?>
<div class="products-area pt-100 pb-70">
	<div class="container">
		<div class="section-title style-three">
			<h2><span>New Collection Products</span></h2>
		</div>
		<div class="row justify-content-center showmore-box">
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
			<div class="pagination-area text-center">
				<span class="page-numbers current" aria-current="page">1</span>
				<a href="#" class="page-numbers">2</a>
				<a href="#" class="page-numbers">3</a>
				<a href="#" class="page-numbers">4</a>
				<a href="#" class="next page-numbers"><i class="fas fa-chevron-right"></i></a>
			</div>
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
