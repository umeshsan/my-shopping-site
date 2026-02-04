<?php include('inc/header.php'); ?>
<main>
	<div class="custom-container">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">CheckOut</li>
			</ol>
		</nav>

		<section class="checkout-wrapper">
			<div class="sc-heading mb-3">Checkout</div>
			<div class="checkout-container d-flex gap-5">

				<!-- Billing & Shipping Form -->
				<div class="form-section shadow">
					<div class="mb-5">
						<h4 class="fw-bold mb-3">Billing Details</h4>
						<div class="row">
							<div class="col-lg-6">
								<div class="mb-3">
									<input type="text" class="form-control" placeholder="Full Name" required>
								</div>
							</div>
						</div>

						<div class="mb-3">
							<input type="email" class="form-control" placeholder="Email Address" required>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="mb-3">
									<input type="tel" class="form-control" placeholder="Phone Number" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mb-3">
									<input type="text" class="form-control" placeholder="Company (optional)">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="mb-3">
									<input type="text" class="form-control" placeholder="Address Line 1" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mb-3">
									<input type="text" class="form-control" placeholder="Address Line 2">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="mb-3">
									<input type="text" class="form-control" placeholder="City" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mb-3">
									<input type="text" class="form-control" placeholder="State / Province" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="mb-3">
									<input type="text" class="form-control" placeholder="Postal Code" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mb-3">
									<input type="text" class="form-control" placeholder="Country" required>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="mb-5 my-5">
						<h4 class="fw-bold mb-3">Shipping Details</h4>
						<label><input type="checkbox" id="differentAddress"> Ship to a different address?</label>
						<div id="shippingFields" style="display:none; margin-top:10px;">
							<div class="row">
								<div class="col-lg-6">
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="Full Name" required>
									</div>
								</div>
							</div>

							<div class="mb-3">
								<input type="email" class="form-control" placeholder="Email Address" required>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="mb-3">
										<input type="tel" class="form-control" placeholder="Phone Number" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="Company (optional)">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="Address Line 1" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="Address Line 2">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="City" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="State / Province" required>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="Postal Code" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="Country" required>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="mb-5 my-5">
						<h4 class="fw-bold mb-3">Payment Method</h4>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="payment" id="inlineRadio1" value="option1" checked>
							<label class="form-check-label" for="inlineRadio1">Credit / Debit Card</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="payment" id="inlineRadio2" value="option2">
							<label class="form-check-label" for="inlineRadio2">Cash on Delivery</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="payment" id="inlineRadio3" value="option3">
							<label class="form-check-label" for="inlineRadio3">PayPal</label>
						</div>

						<div id="cardFields" style="margin-top:10px;">
							<div class="mb-3">
								<input class="form-control" type="text" placeholder="Card Number">
							</div>
							<div class="mb-3">
								<input class="form-control" type="text" placeholder="Expiry MM/YY">
							</div>
							<div class="mb-3">
								<input class="form-control" type="text" placeholder="CVV"></div>
							</div>
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">I have read and agree to the Terms & Privacy Policy</label>
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
							<a href="" class="checkout-btn text-center">Place Order</a>
						</div>
					</div>
				</div>
			</section>

		</div>
	</main>

	<?php include('inc/footer.php'); ?>

