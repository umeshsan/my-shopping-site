<?php include('inc/header.php'); ?>
<main>
	<div class="custom-container">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">お気に入り</li>
			</ol>
		</nav>

		<section class="cart-wrapper">
			<div class="sc-heading mb-3">My Favorites</div>

			<div id="favoriteList" class="favarite-listing">
				<div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 product-list-wrap">
					<div class="col">
						<div class="img-box mb-4 d-block">
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
								<p class="stock">In Stock</p>
								<div class="d-flex align-items-center justify-content-between gap-2 mt-3">
									<a href="cart.php" class="view-cart-btn flex-fill">Add to Cart</a>
									<button class="remove flex-fill" onclick="removeFavorite(this)"><i class="bi bi-trash"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="img-box mb-4 d-block">
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
								<p class="stock">In Stock</p>
								<div class="d-flex align-items-center justify-content-between gap-2 mt-3">
									<a href="cart.php" class="view-cart-btn flex-fill">Add to Cart</a>
									<button class="remove flex-fill" onclick="removeFavorite(this)"><i class="bi bi-trash"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="img-box mb-4 d-block">
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
								<p class="stock">In Stock</p>
								<div class="d-flex align-items-center justify-content-between gap-2 mt-3">
									<a href="cart.php" class="view-cart-btn flex-fill">Add to Cart</a>
									<button class="remove flex-fill" onclick="removeFavorite(this)"><i class="bi bi-trash"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="img-box mb-4 d-block">
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
								<p class="stock">In Stock</p>
								<div class="d-flex align-items-center justify-content-between gap-2 mt-3">
									<a href="cart.php" class="view-cart-btn flex-fill">Add to Cart</a>
									<button class="remove flex-fill" onclick="removeFavorite(this)"><i class="bi bi-trash"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="img-box mb-4 d-block">
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
								<p class="stock">In Stock</p>
								<div class="d-flex align-items-center justify-content-between gap-2 mt-3">
									<a href="cart.php" class="view-cart-btn flex-fill">Add to Cart</a>
									<button class="remove flex-fill" onclick="removeFavorite(this)"><i class="bi bi-trash"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="img-box mb-4 d-block">
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
								<p class="stock">In Stock</p>
								<div class="d-flex align-items-center justify-content-between gap-2 mt-3">
									<a href="cart.php" class="view-cart-btn flex-fill">Add to Cart</a>
									<button class="remove flex-fill" onclick="removeFavorite(this)"><i class="bi bi-trash"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="img-box mb-4 d-block">
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
								<p class="stock">In Stock</p>
								<div class="d-flex align-items-center justify-content-between gap-2 mt-3">
									<a href="cart.php" class="view-cart-btn flex-fill">Add to Cart</a>
									<button class="remove flex-fill" onclick="removeFavorite(this)"><i class="bi bi-trash"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="img-box mb-4 d-block">
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
								<p class="stock">In Stock</p>
								<div class="d-flex align-items-center justify-content-between gap-2 mt-3">
									<a href="cart.php" class="view-cart-btn flex-fill">Add to Cart</a>
									<button class="remove flex-fill" onclick="removeFavorite(this)"><i class="bi bi-trash"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="empty" id="emptyState" style="display:none;">
				<h3>No favorites yet</h3>
				<p>Add products to your favorites to see them here.</p>
			</div>
		</section>

	</div>
</main>

<?php include('inc/footer.php'); ?>

<script>
	function removeFavorite(btn){
  // Find the closest parent .col (the product wrapper)
		const productCol = btn.closest('.col');
		if(productCol){
    // Optional: smooth slide-up animation
			productCol.style.transition = "all 0.3s ease";
			productCol.style.opacity = "0";
			productCol.style.height = "0";
			productCol.style.margin = "0";
			productCol.style.padding = "0";

    // Remove after animation
			setTimeout(() => {
				productCol.remove();
				checkEmpty();
			}, 200);
		}
	}

// Check if list is empty
	function checkEmpty(){
		const favoriteList = document.getElementById('favoriteList');
		if(favoriteList.querySelectorAll('.col').length === 0){
			favoriteList.innerHTML = `
      <div class="empty text-center py-5">
        <h3 class="text-primary">No favorites yet</h3>
        <p>Add products to your favorites to see them here.</p>
			</div>`;
		}
	}

</script>
