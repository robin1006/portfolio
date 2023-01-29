<div class="shop-banner-area">
	<div class="container">
		<div class="shop-banner-content">
			<h3><a href="<?php echo WEB_URL; ?>ecommers/index">Home -Cart</a><Home</h3>
		</div>
	</div>
</div>
<?php $this->load->view('e-theme/message_view');?>
<div class="cart-area ptb-100">
	<div class="container">
		<?php $this->load->view('e-theme/message_view');?>
		<form>
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-desc table-responsive">
						<table class="table">
							<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Name</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
							</thead>
							<tbody>
							<?php
							if(!empty($cart_data)){
								$total = 0;
							foreach ($cart_data as $v){
								$total = $total+$v['price'];?>
							<tr>
								<td class="product-thumbnail">
									<a href="<?php echo WEB_URL; ?>ecommers/productDetails/<?=encrypt_url($v['id_new_product']);?>">
										<img src="<?=$v['image']?>" alt="item">
									</a>
								</td>
								<td class="product-name">
									<a href="<?php echo WEB_URL; ?>ecommers/productDetails/<?=encrypt_url($v['id_new_product']);?>"><?=$v['name']?></a>
								</td>
								<td class="product-price">
									<span class="unit-amount"><?=$v['price']?></span>
									<input type="hidden" name="id_new_product" value="<?=$v['id_new_product'];?>" id="id_new_product">
								</td>
								<td class="product-quantity">
									<div class="input-counter">
										<span class="minus-btn"><i class="fas fa-minus"></i></span>
										<input type="text" value="<?=$v['quantity']?>" id="quantity" name="quantity">
										<span class="plus-btn"><i class="fas fa-plus"></i></span>
									</div>
								</td>
								<td class="product-subtotal">
									<span class="subtotal-amount"><?=$v['quantity']*$v['price'];?></span>
									<a href="cart.html" class="remove"><i class='bx bx-x'></i></a>
								</td>
							</tr>
							<?php }
							}?>
							</tbody>
						</table>
					</div>
					<div class="cart-buttons-desc">
						<div class="row align-items-center">
							<div class="col-lg-8 col-sm-8 col-md-8">
								<div class="shopping-coupon-code">
									<input type="text" class="form-control" placeholder="Coupon code" name="coupon-code" id="coupon-code">
									<button type="submit">Apply Coupon</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="cart-totals-desc">
						<h3>Cart Totals</h3>
						<ul>
							<li>Subtotal <span>&#8377;<?=$total?></span></li>
							<li>Tax <span>&#8377;0.00</span></li>
							<li>Total <span>&#8377;<?=$total?></span></li>
							<li>Payable Total <span>&#8377;<?=$total?></span></li>
						</ul>
						<a href="checkout.html" class="default-btn">Proceed to Checkout <i class="fas fa-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<script>
	$(document).on('click','.fa-plus',function(){
		var qty = $('#quantity').val();
		var id_product = $('#id_new_product').val();
		if(qty > 0){
			$.ajax({
				url:'<?=WEB_URL?>ecommers/updateremoveCart',
				type:'post',
				data: {'qty':qty ,'id_product':id_product},
				success: function (res) {
					$('#qrSurvey').modal('hide');
					if(res == 1) {
						location.reload();
					}else{
						location.reload();
					}
				}
			});
		}
	});
</script>

<script>
	$(document).on('click','.fa-minus',function(){
		var qty = $('#quantity').val();
		var id_product = $('#id_new_product').val();
		if(qty > 0){
			$.ajax({
				url:'<?=WEB_URL?>ecommers/updateremoveCart',
				type:'post',
				data: {'qty':qty ,'id_product':id_product},
				success: function (res) {
					$('#qrSurvey').modal('hide');
					if(res == 1) {
						location.reload();
					}else{
						location.reload();
					}
				}
			});
		}
	});
</script>
