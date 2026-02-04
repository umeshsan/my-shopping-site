<?php include('inc/header.php'); ?>
<main>
	<div class="custom-container">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">カート</li>
			</ol>
		</nav>

		<section class="cart-wrapper">
			<div class="sc-heading mb-3">My Shopping Cart</div>

			<div class="cart-flex d-flex gap-5">
				<div class="cart-container shadow">
					<div class="cart-header" id="cartHeader">Your Cart (3 items)</div>

					<table class="cart-table">
						<thead>
							<tr>
								<th class="th-checkbox"><input type="checkbox" id="selectAll" onclick="toggleSelectAll(this)"></th>
								<th class="th-image">Product Image</th>
								<th class="th-desc">Product</th>
								<th class="th-price">Price</th>
								<th class="th-qty">Quantity</th>
								<th class="th-actions">Actions</th>
							</tr>
						</thead>
						<tbody id="cartItems">
							<tr class="cart-item">
								<td><input type="checkbox" class="item-checkbox"></td>
								<td data-label="Image">
									<a href="dist/img/p4.jpg" data-fancybox="gallery" data-caption="Caption #1">
										<img src="dist/img/p4.jpg" class="item-img" />
									</a>
								</td>
								<td data-label="Product">
									<p class="item-name line-clamp-1">Product 1</p>
									<p class="item-desc line-clamp-3">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
								</td>
								<td data-label="Price" class="item-price text-danger fs-5 fw-bold">¥ 1,200</td>

								<td data-label="Quantity">
									<div class="qty-controls">
										<button class="qty-btn" onclick="changeItemQty(this, -1)"><i class="bi bi-dash-lg text-dark"></i></button>
										<input type="number" value="1" min="1">
										<button class="qty-btn" onclick="changeItemQty(this, 1)"><i class="bi bi-plus-lg text-dark"></i></button>
									</div>
								</td>
								<td data-label="Actions" class="text-center"><button class="remove-btn" onclick="removeItem(this)"><i class="bi bi-trash text-danger"></i></button></td>
							</tr>

							<tr class="cart-item">
								<td><input type="checkbox" class="item-checkbox"></td>
								<td data-label="Image">
									<a href="dist/img/p7.jpg" data-fancybox="gallery" data-caption="Caption #1">
										<img src="dist/img/p7.jpg" class="item-img" />
									</a>
								</td>
								<td data-label="Product">
									<p class="item-name line-clamp-1">Product 2</p>
									<p class="item-desc line-clamp-3">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
								</td>
								<td data-label="Price" class="item-price text-danger fs-5 fw-bold">¥ 800</td>
								<td data-label="Quantity">
									<div class="qty-controls">
										<button class="qty-btn" onclick="changeItemQty(this, -1)"><i class="bi bi-dash-lg text-dark"></i></button>
										<input type="number" value="1" min="1">
										<button class="qty-btn" onclick="changeItemQty(this, 1)"><i class="bi bi-plus-lg text-dark"></i></button>
									</div>
								</td>
								<td data-label="Actions" class="text-center"><button class="remove-btn" onclick="removeItem(this)"><i class="bi bi-trash text-danger"></i></button></td>
							</tr>
						</tbody>
					</table>

					<div class="cart-footer">
						<div class="subtotal mb-3 fs-5 fw-bold">Subtotal: NPR <span id="cartSubtotal">2000</span></div>
						<div class="d-flex align-items-center gap-2">
							<a href="cart.php" class="btn view-cart-btn">View My Cart</a>
							<a href="checkout.php" class="btn checkout-btn">Go to Checkout</a>
						</div>
					</div>
				</div>

				<!-- Order Summary -->
				<div class="summary-container shadow">
					<h5 class="fw-bold">Order Summary</h5>
					<div class="summary-row">
						<span>Subtotal</span>
						<span id="summarySubtotal">¥2000</span>
					</div>
					<div class="summary-row">
						<span>Shipping Fee</span>
						<span id="shippingFee">¥100</span>
					</div>
					<div class="summary-row mt-4">
						<input type="text" placeholder="Voucher Code" id="voucherCode" class="voucher-input">
						<button class="voucher-btn" onclick="applyVoucher()">Apply</button>
					</div>
					<div class="summary-row" style="font-size: 18px; margin-top: 10px;">
						<strong>Total</strong>
						<strong id="summaryTotal">¥2100</strong>
					</div>
                    <div class="d-flex align-items-center justify-content-center">
    					<a href="checkout.php" class="checkout-btn text-center">Go to Checkout</a>
                    </div>
				</div>
			</div>
		</section>

	</div>
</main>

<?php include('inc/footer.php'); ?>

