<?php include('inc/header.php'); ?>
<main>
	<div class="custom-container">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Health & Beauty</a></li>
				<li class="breadcrumb-item active" aria-current="page">MARS Candylicious Colored Lip Gloss for Women...</li>
			</ol>
		</nav>

		<section class="detail-wrapper position-relative pe-3">
			<div id="deliveryIcon" class="text-blue d-xl-none d-block">
				<i class="bi bi-bus-front-fill"></i> Delivery Information
			</div>

			<div class="d-flex gap-5 mb-5 w-100">
				<div class="d-flex flex-column flex-lg-row gap-5 mb-5 w-100">
					<div class="detail-image-container">
						<div class="swiper main-swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<a href="dist/img/p2.jpg" data-fancybox="gallery" data-caption="Caption #1">
										<img src="dist/img/p2.jpg" class="item-img" />
									</a>
								</div>
								<div class="swiper-slide">
									<a href="dist/img/p4.jpg" data-fancybox="gallery" data-caption="Caption #1">
										<img src="dist/img/p4.jpg" class="item-img" />
									</a>
								</div>
								<div class="swiper-slide">
									<a href="dist/img/p5.jpg" data-fancybox="gallery" data-caption="Caption #1">
										<img src="dist/img/p5.jpg" class="item-img" />
									</a>
								</div>
								<div class="swiper-slide">
									<a href="dist/img/p6.jpg" data-fancybox="gallery" data-caption="Caption #1">
										<img src="dist/img/p6.jpg" class="item-img" />
									</a>
								</div>
								<div class="swiper-slide">
									<a href="dist/img/p7.jpg" data-fancybox="gallery" data-caption="Caption #1">
										<img src="dist/img/p7.jpg" class="item-img" />
									</a>
								</div>
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>

						<div class="swiper thumb-swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide"><img src="dist/img/p2.jpg"></div>
								<div class="swiper-slide"><img src="dist/img/p4.jpg"></div>
								<div class="swiper-slide"><img src="dist/img/p5.jpg"></div>
								<div class="swiper-slide"><img src="dist/img/p6.jpg"></div>
								<div class="swiper-slide"><img src="dist/img/p7.jpg"></div>
							</div>
						</div>
					</div>

					<div class="detail-information-container">
						<h3 class="product-title text-dark">MARS Candylicious Colored Lip Gloss for Women | Hydrating & High Shine 11-Toffee Twirl Glossy</h3>
						<p class="rating">
							<span class="rating-stars text-warning">
								<i class="bi bi-star-fill"></i>
								<i class="bi bi-star-fill"></i>
								<i class="bi bi-star-half"></i>
								<i class="bi bi-star"></i>
								<i class="bi bi-star"></i>
							</span>
							<span class="text-muted">(1k)</span>
						</p>
						<p>
							<strong>Brand:</strong>
							<span>MarsMore Makeup from Mars</span>
						</p>
						<p>
							<strong>Model Number:</strong>
							<span>HB00001111</span>
						</p>
						<p class="d-flex align-items-baseline gap-2 product-price">
							<span class="discounted-price fs-2 fw-bold text-danger">¥80</span>
							<span class="fs-6 d-flex gap-1">
								<small class="original-price text-decoration-line-through text-muted">¥100</small>
								<small class="discount-percentage text-dark">-20%</small>
							</span>
						</p>

						<div class="sku-box">
							<div class="sku-row">
								<label>Color:</label>
								<div class="sku-options" id="colorOptions">
									<button type="button" class="sku-btn active">Black</button>
									<button type="button" class="sku-btn">White</button>
									<button type="button" class="sku-btn">Red</button>
								</div>
							</div>


							<div class="sku-row">
								<label>Size:</label>
								<div class="sku-options" id="sizeOptions">
									<button type="button" class="sku-btn active">S</button>
									<button type="button" class="sku-btn">M</button>
									<button type="button" class="sku-btn">L</button>
									<button type="button" class="sku-btn">XL</button>
								</div>
							</div>


							<div class="sku-row">
								<label>Quantity:</label>
								<div class="qty-box">
									<button type="button" class="qty-btn" onclick="changeQty(-1)">−</button>
									<input type="number" id="quantity" value="1" min="1">
									<button type="button" class="qty-btn" onclick="changeQty(1)">+</button>
								</div>
							</div>


							<div class="action-buttons">
								<button class="buy-now">Buy Now</button>
								<a href="cart.php" class="add-cart">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				<div class="others-information shadow d-none d-xl-block" id="deliveryWidget">
					<div class="delivery-box">

						<div class="delivery-header">
							<div class="mb-0 fs-6">Delivery & Services</div>
							<button class="change-btn" id="changeDeliveryBtn">Change</button>
						</div>


						<div class="delivery-info" id="deliveryView">
							<p><strong>Delivery to</strong> <span class="d-block text-muted">Kathmandu, Nepal</span></p>
							<hr>
							<p><strong>Standard Delivery</strong><span class="d-block text-muted">3–5 business days</span></p>
							<p><strong>Cash on Delivery</strong><span class="d-block text-muted">Available</span></p>
						</div>


						<div class="delivery-edit" id="deliveryEdit">
							<label>Change delivery location</label>
							<select>
								<option>Kathmandu</option>
								<option>Lalitpur</option>
								<option>Bhaktapur</option>
								<option>Pokhara</option>
							</select>
							<button class="save-btn" id="saveDeliveryBtn">Save</button>
						</div>

						<hr>


						<p class="mb-0"><strong>Return & Warranty</strong></p>
						<ul class="service-points">
							<li class="py-2"><span class="icon">🚚</span> Standard delivery (3–5 business days)</li>
							<li class="py-2"><span class="icon">💵</span> Cash on Delivery available</li>
							<li class="py-2"><span class="icon">🔁</span> 7-day return policy</li>
							<li class="py-2"><span class="icon">🛡️</span> Warranty on manufacturing defects</li>
						</ul>

						<hr>

						<div class="d-flex align-items-start justify-content-around">
							<div class="text-center">
								<p class="mb-0 text-muted"><small>Positive Seller Rating</small></p>
								<strong class="fw-bold fs-3">90%</strong>
							</div>
							<div class="d-flex" style="height: 70px;">
								<div class="vr"></div>
							</div>
							<div class="text-center">
								<p class="mb-0 text-muted"><small>Ship on Time</small></p>
								<strong class="fw-bold fs-3">100%</strong>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="more-information mb-5 mt-5">
				<div class="description-block mb-4 bg-light border rounded-3 p-3">
					<div class="fs-5 fw-bold mb-3">Product Description</div>
					<p>
						This product is made from high-quality materials and designed for everyday use.
						It offers durability, comfort, and modern style.
					</p>
				</div>

				<div class="specifications-block mb-4 bg-light border rounded-3 p-3">
					<div class="fs-5 fw-bold mb-3">Specifications</div>
					<table class="spec-table">
						<tr>
							<th>Material</th>
							<td>Cotton</td>
						</tr>
						<tr>
							<th>Color</th>
							<td>Black, White, Red</td>
						</tr>
						<tr>
							<th>Size</th>
							<td>S, M, L, XL</td>
						</tr>
						<tr>
							<th>Weight</th>
							<td>500g</td>
						</tr>
					</table>
				</div>

				<div class="reviews-block mb-4 bg-light border rounded-3 p-3">
					<div class="fs-5 fw-bold mb-3">Product Reviews</div>
					<div class="review-item">
						<strong>John Doe</strong>
						<p>Great quality and fast delivery!</p>
					</div>
					<div class="review-item">
						<strong>Anna Smith</strong>
						<p>Comfortable and worth the price.</p>
					</div>
				</div>

				<div class="ratings-block mb-4 bg-light border rounded-3 p-3">
					<div class="fs-5 fw-bold mb-3">Ratings & Reviews</div>
					<p>⭐⭐⭐⭐☆ (4.2 / 5)</p>
					<p>Based on 124 customer ratings</p>
				</div>

				<div class="questions-block mb-4 bg-light border rounded-3 p-3">
					<div class="fs-5 fw-bold mb-3">Questions about the Product</div>
					<div class="qa-item">
						<strong>Q:</strong> Is this product washable?<br>
						<strong>A:</strong> Yes, it is machine washable.
					</div>
					<div class="qa-item">
						<strong>Q:</strong> Does it support international shipping?<br>
						<strong>A:</strong> Yes, international shipping is available.
					</div>
				</div>
			</div>
		</section>

		<hr>

		<section class="sc-product-listing">
			<div class="fs-4 fw-bold mb-3 d-flex align-items-center">Supplier Popular Products</div>
			<div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 product-list-wrap">
				<div class="col">
					<a href="detail.php" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p1.avif">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥80</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥100</small>
									<small class="discount-percentage text-dark">-20%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(1k)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p2.jpg">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
								</span>
								<span class="text-muted">(2k)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p3.avif">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p4.jpg">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p5.jpg">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p6.jpg">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p7.jpg">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p1.avif">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p6.jpg">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p3.avif">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p4.jpg">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p5.jpg">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p6.jpg">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p7.jpg">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p6.jpg">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p3.avif">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p4.jpg">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="#" class="img-box mb-4 d-block">
						<figure class="ratio ratio-1x1 overflow-hidden mb-1">
							<img class="object-fit-cover" src="dist/img/p5.jpg">
						</figure>
						<div class="info-wrap">
							<p class="product-title text-dark line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
							<p class="d-flex align-items-baseline gap-2 product-price">
								<span class="discounted-price fs-4 fw-bold text-danger">¥60</span>
								<span class="fs-6 d-flex gap-1">
									<small class="original-price text-decoration-line-through text-muted">¥120</small>
									<small class="discount-percentage text-dark">-50%</small>
								</span>
							</p>
							<p class="rating">
								<span class="rating-stars text-warning">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-starl"></i>
									<i class="bi bi-star"></i>
								</span>
								<span class="text-muted">(50)</span>
							</p>
						</div>
					</a>
				</div>
			</div>
		</section>
	</div>
</main>


<?php include('inc/footer.php'); ?>

<script>
	const thumbSwiper = new Swiper('.thumb-swiper', {
		spaceBetween: 10,
		slidesPerView: 4,
		freeMode: true,
		watchSlidesProgress: true,
	});

	const mainSwiper = new Swiper('.main-swiper', {
		spaceBetween: 10,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		thumbs: {
			swiper: thumbSwiper,
		},
	});
</script>

<script>
	const tabButtons = document.querySelectorAll('.tab-btn');
	const tabContents = document.querySelectorAll('.tab-content');

	tabButtons.forEach(btn => {
		btn.addEventListener('click', () => {
			const target = btn.dataset.tab;

			tabButtons.forEach(b => b.classList.remove('active'));
			tabContents.forEach(c => c.classList.remove('active'));

			btn.classList.add('active');
			document.getElementById(target).classList.add('active');
		});
	});
</script>

<script>
	const changeBtn = document.getElementById('changeDeliveryBtn');
	const saveBtn = document.getElementById('saveDeliveryBtn');
	const viewBox = document.getElementById('deliveryView');
	const editBox = document.getElementById('deliveryEdit');

	changeBtn.addEventListener('click', () => {
		viewBox.style.display = 'none';
		editBox.style.display = 'block';
	});

	saveBtn.addEventListener('click', () => {
		editBox.style.display = 'none';
		viewBox.style.display = 'block';
	});
</script>

<script>
	const deliveryIcon = document.getElementById('deliveryIcon');
	const deliveryWidget = document.getElementById('deliveryWidget');

// Toggle chat window
	deliveryIcon.addEventListener('click', (e) => { e.stopPropagation(); deliveryWidget.classList.toggle('active'); });
	deliveryWidget.addEventListener('click', (e) => e.stopPropagation());
	document.addEventListener('click', () => deliveryWidget.classList.remove('active'));
</script>
