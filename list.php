<?php include('inc/header.php'); ?>
<main>
	<div class="custom-container">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="index.php">list</a></li>
				<li class="breadcrumb-item active" aria-current="page">MARS Candylicious Colored Lip Gloss for Women | Hydrating & High Shine 11-Toffee Twirl Glossy</li>
			</ol>
		</nav>

		<div class="list-container">
			<!-- LEFT FILTER COLUMN -->
			<aside class="filter-box shadow">

				<!-- Category -->
				<div class="filter-block">
					<h4>Category</h4>
					<ul class="category-menu" id="categoryList">
						<li>
							<div class="cat-item" onclick="toggleMenu(this)">
								Electronics <span class="arrow"><i class="bi bi-chevron-right"></i></span>
							</div>
							<ul class="sub-menu">
								<li>
									<div class="cat-item" onclick="toggleMenu(this)">
										Mobile Phones <span class="arrow"><i class="bi bi-chevron-right"></i></span>
									</div>

									<ul class="sub-menu">
										<li class="leaf"><a href="">Android Phones</a></li>
										<li class="leaf"><a href="">iPhones</a></li>
									</ul>
								</li>

								<li>
									<div class="cat-item" onclick="toggleMenu(this)">
										Laptops <span class="arrow"><i class="bi bi-chevron-right"></i></span>
									</div>

									<ul class="sub-menu">
										<li class="leaf"><a href="">Gaming Laptops</a></li>
										<li class="leaf"><a href="">Ultrabooks</a></li>
									</ul>
								</li>
							</ul>
						</li>

						<li>
							<div class="cat-item" onclick="toggleMenu(this)">
								Fashion <span class="arrow"><i class="bi bi-chevron-right"></i></span>
							</div>
							<ul class="sub-menu">
								<li class="leaf"><a href="">Men</a></li>
								<li class="leaf"><a href="">Women</a></li>
							</ul>
						</li>
					</ul>
					<button class="view-toggle border-0 text-dark bg-transparent" data-target="categoryList">View more</button>
				</div>

				<!-- Brand -->
				<div class="filter-block">
					<h4>Brand</h4>
					<ul class="brand-list nav flex-column" id="brandList">
						<li><label><input type="checkbox">Apple</label></li>
						<li><label><input type="checkbox">Samsung</label></li>
						<li><label><input type="checkbox">Xiaomi</label></li>
						<li><label><input type="checkbox">Realme</label></li>
						<li><label><input type="checkbox">OnePlus</label></li>
						<li><label><input type="checkbox">Oppo</label></li>
					</ul>
					<button class="view-toggle border-0 text-dark bg-transparent" data-target="brandList">View more</button>
				</div>

				<!-- Gender -->
				<div class="filter-block">
					<h4>Gender</h4>
					<ul class="gender-list nav flex-column" id="genderList">
						<li><label><input type="checkbox"> Women's</label></li>
						<li><label><input type="checkbox"> Men's</label></li>
						<li><label><input type="checkbox"> Kids</label></li>
						<li><label><input type="checkbox"> Unisex</label></li>
					</ul>
				</div>

				<!-- Shipped From -->
				<div class="filter-block">
					<h4>Shipped From</h4>
					<ul class="shipped-list nav flex-column" id="shippedList">
						<li><label><input type="checkbox"> Local</label></li>
						<li><label><input type="checkbox"> Overseas</label></li>
					</ul>
				</div>

				<!-- Price -->
				<div class="filter-block">
					<h4>Price Range</h4>
					<div class="price-range">
						<input type="number" placeholder="Min">
						<input type="number" placeholder="Max">
					</div>
				</div>

				<!-- Rating -->
				<div class="filter-block">
					<h4>Rating</h4>
					<ul class="rating-list nav flex-column" id="ratingList">
						<li><label><input type="radio" name="rating"> ★★★★★</label></li>
						<li><label><input type="radio" name="rating"> ★★★★ & above</label></li>
						<li><label><input type="radio" name="rating"> ★★★ & above</label></li>
					</ul>
				</div>

				<!-- Warranty Type -->
				<div class="filter-block">
					<h4>Warranty Type</h4>
					<ul class="warranty-list nav flex-column" id="warrantyList">
						<li><label><input type="checkbox"> Manufacturer</label></li>
						<li><label><input type="checkbox"> Seller</label></li>
						<li><label><input type="checkbox"> Brand </label></li>
						<li><label><input type="checkbox"> 100% Original product </label></li>
					</ul>
				</div>

				<!-- Delivery Option -->
				<div class="filter-block">
					<h4>Delivery Option</h4>
					<ul class="delivery-list nav flex-column" id="deliveryList">
						<li><label><input type="radio" name="delivery"> Yes</label></li>
						<li><label><input type="radio" name="delivery"> No</label></li>
					</ul>
				</div>

				<!-- Color Family -->
				<div class="filter-block">
					<h4>Color Family</h4>
					<ul class="color-list nav flex-column" id="colorList">
						<li><label><input type="checkbox">Black</label></li>
						<li><label><input type="checkbox">White</label></li>
						<li><label><input type="checkbox">Blue</label></li>
						<li><label><input type="checkbox">Red</label></li>
						<li><label><input type="checkbox">Green</label></li>
					</ul>
					<button class="view-toggle border-0 text-dark bg-transparent" data-target="colorList">View more</button>
				</div>

				<!-- Warranty Period -->
				<div class="filter-block">
					<h4>Warranty Period</h4>
					<ul class="period-list nav flex-column" id="periodList">
						<li><label><input type="checkbox"> No Warranty</label></li>
						<li><label><input type="checkbox"> 6 Months</label></li>
						<li><label><input type="checkbox"> 1 Year</label></li>
						<li><label><input type="checkbox"> 2 Years</label></li>
						<li><label><input type="checkbox"> Life Time Warranty</label></li>
					</ul>
				</div>
			</aside>

			<!-- RIGHT CONTENT COLUMN -->
			<section class="list-content pt-0">
				<!-- Top row -->
				<div class="top-bar">
					<h2 class="fw-bold">MARS Candylicious Colored Lip Gloss for Women</h2>
					<div class="sort-box">
						<span>Showing 1–20 results</span>
						<select>
							<option>Sort by: Relevance</option>
							<option>Price: Low to High</option>
							<option>Price: High to Low</option>
							<option>Newest</option>
						</select>
					</div>
				</div>

				<!-- Product list -->
				<div class="product-listing">
					<div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 product-list-wrap">
						<div class="col">
							<a href="detail.php" class="img-box mb-4 d-block">
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p1.avif">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p2.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p3.avif">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p4.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p5.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p7.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p1.avif">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p3.avif">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p4.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p5.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p7.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p3.avif">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p4.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p5.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p7.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p7.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p3.avif">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p4.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p4.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p7.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p7.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p3.avif">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p4.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p4.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p5.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p5.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p5.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p5.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p7.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p7.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p3.avif">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p4.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p4.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p7.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p7.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p3.avif">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p4.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p4.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p5.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p5.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p6.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p5.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p5.jpg">
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
								<figure class="ratio ratio-1x1 rounded-4 overflow-hidden mb-1">
									<img class="object-fit-cover rounded-4" src="dist/img/p7.jpg">
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
				</div>
			</section>
		</div>

	</div>
</main>

<?php include('inc/footer.php'); ?>

<script>
function toggleMenu(el) {
  const submenu = el.nextElementSibling;

  if (!submenu || !submenu.classList.contains('sub-menu')) return;

  const isOpen = submenu.classList.contains('open');

  // Close all siblings at the same level (accordion)
  const siblings = Array.from(el.parentElement.parentElement.children)
                      .map(li => li.querySelector(':scope > .sub-menu'))
                      .filter(sm => sm && sm !== submenu);

  siblings.forEach(sib => {
    sib.style.maxHeight = '0';
    sib.classList.remove('open');
    sib.previousElementSibling.classList.remove('open');
  });

  // Toggle current submenu
  if (isOpen) {
    submenu.style.maxHeight = '0';
    submenu.classList.remove('open');
    el.classList.remove('open');
  } else {
    submenu.classList.add('open');
    el.classList.add('open');
    submenu.style.maxHeight = submenu.scrollHeight + "px";
  }
}

</script>


<script>
const maxVisible = 5; // number of top-level categories visible
document.querySelectorAll('.view-toggle').forEach(btn => {
  const targetId = btn.dataset.target;
  const list = document.getElementById(targetId);
  const items = Array.from(list.children);
  let expanded = false;

  function updateView() {
    items.forEach((li, index) => {
      li.style.display = (!expanded && index >= maxVisible) ? 'none' : 'list-item';
    });
    btn.innerText = expanded ? 'View less' : 'View more';
  }

  updateView(); // initial

  btn.addEventListener('click', () => {
    expanded = !expanded;
    updateView();
  });
});


</script>
