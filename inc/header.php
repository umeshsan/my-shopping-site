<!DOCTYPE html>
<html lang="jp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My Shopping Site">
	<meta name="keywords" content="My Shopping Site">
	<title>My Shopping Site</title>

<!--Favicon-->
<link rel="icon" type="image/png" href="dist/img/site-icon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="dist/img/site-icon/favicon.svg" />
<link rel="shortcut icon" href="dist/img/site-icon/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="dist/img/site-icon/apple-touch-icon.png" />
<link rel="manifest" href="dist/img/site-icon/site.webmanifest" />

<!--Google Fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="dist/css/thirdparty/bootstrap-5.3.8/bootstrap.min.css">
<link rel="stylesheet" href="dist/css/thirdparty/bootstrap-icons-1.13.1/bootstrap-icons.min.css">
<link rel="stylesheet" href="dist/css/thirdparty/swiper-11.2.10/swiper-bundle.min.css">
<link rel="stylesheet" href="dist/css/thirdparty/aos-2.3.1/aos.min.css">
<link rel="stylesheet" href="dist/css/thirdparty/fancybox-6.1.7/fancybox.min.css">
<link rel="stylesheet" href="dist/css/theme.min.css">
<?php
$pageClass = basename($_SERVER['PHP_SELF'], '.php') ?: 'index';
?>
</head>

<header>
	<div class="header-site-nav">
		<ul class="nav justify-content-end">
			<li class="nav-item">
				<a class="nav-link" href="login.php"><i class="me-1 bi-person-fill"></i>ログイン</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="registration.php"><i class="me-1 bi-journal-check"></i>登録無料</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="me-1 bi-box-fill"></i>購入した商品</a>
			</li>
			<li class="nav-item">
				<a class="nav-link cart-fab" id="cartFab" href="#"><i class="me-1 bi-cart"></i><span id="cartCount">2</span>カート</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="me-1 bi-heart-fill"></i>お気に入り</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="me-1 bi-info-circle-fill"></i>Help & Support</a>
			</li>
		</ul>
	</div>

	<div class="header-bottom py-2 bg-white">
		<div class="custom-container">
			<div class="d-flex align-items-center gap-3">
				<h1 class="logo mb-3 mb-sm-0 pe-5 pe-sm-3">
					<a class="navbar-brand py-0 d-block" href="index.php">
						<img src="dist/img/logo.png" alt="My Shopping Site">
					</a>
				</h1>

				<div class="search-container flex-grow-1 position-relative">
					<form action="#" method="get">
						<select name="category">
							<option value="">All</option>
							<option value="articles">海外医薬品</option>
							<option value="products">サプリ・美容品</option>
							<option value="users">Web検索</option>
						</select>

						<input type="text" name="q" placeholder="Search here..." />

						<button class="btn btn-search" type="submit"><i class="me-1 bi-search"></i>Search</button>
					</form>
					<div class="popular-search-list d-flex gap-2 mt-2 position-absolute">
						<strong>人気検索ワード：</strong>
						<div class="d-flex flex-wrap lh-1">
							<a href="#">リジン</a>
							<a href="#">ルグゼバイブ</a>
							<a href="#">パースピレックス</a>
							<a href="#">プラセンタコラーゲン</a>
							<a href="#">シリマリン</a>
							<a href="#">マルチビタミン</a>
							<a href="#">ビオチン</a>
						</div>
					</div>
				</div>

				<div class="search-by-image position-relative z-3">
					<button class="btn dropdown-toggle" onclick="toggleDiv()">
						<i class="me-1 bi-camera-fill"></i><span>Search by Image</span>
					</button>
					<div id="toggleBox" class="toggle-box position-absolute end-0 shadow p-3 mt-3 rounded-3 bg-white" style="display: none;">
						<div class="image-search-context-wrapper image-search-context-wrapper-active">
							<div class="image-search-context-header-wrapper" data-spm-anchor-id="a21bo.jianhua/a.201856.i0.5af92a895qxQWf">
								<span class="title-text mb-1 d-block">Search by picture</span>
							</div>
							<div class="image-upload" id="imageUpload">
								<span class="image-upload-close">&times;</span>
								<div class="image-preview"></div>

								<div class="image-placeholder">
									<div class="image-icon">🖼️</div>
									<span>Click, paste (Ctrl+V), <br>or drag & drop an image</span>
								</div>

								<input type="file" accept="image/*" hidden>
								<button type="button" class="upload-btn">Upload picture</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar py-0 navbar-expand-lg header-navigation">
		<div class="custom-container">
			<div class="d-flex mx-auto align-items-center">
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav nav-pills nav-fill w-100">
						<li class="nav-item">
							<div class="dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									個人輸入医薬品
								</a>

								<ul class="dropdown-menu shadow">
									<li><a class="dropdown-item" href="#">育毛·ヘアケア</a></li>
									<li><a class="dropdown-item" href="#">男性·女性機能</a></li>
									<li><a class="dropdown-item" href="#">ダイエット·筋肉増強</a></li>
									<li><a class="dropdown-item" href="#">美容·スキンケア</a></li>
									<li><a class="dropdown-item" href="#">ジェネリック</a></li>
									<li><a class="dropdown-item" href="#">その他</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									今のイチオシ
								</a>

								<ul class="dropdown-menu shadow">
									<li><a class="dropdown-item" href="#">キャンペーン一覧</a></li>
									<li><a class="dropdown-item" href="#">特典付き商品</a></li>
									<li><a class="dropdown-item" href="#">訳あり特価</a></li>
									<li><a class="dropdown-item" href="#">新着商品</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									商品リスト
								</a>

								<ul class="dropdown-menu shadow">
									<li class="nav-item dropend">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											印象アップ
										</a>
										<ul class="dropdown-menu shadow">
											<li><a class="dropdown-item" href="#">エイジングケア</a></li>
											<li><a class="dropdown-item" href="#">においケア</a></li>
											<li><a class="dropdown-item" href="#">デンタルケア</a></li>
											<li><a class="dropdown-item" href="#">ボディケア・ムダ毛ケア</a></li>
											<li><a class="dropdown-item" href="#">まつ毛</a></li>
											<li><a class="dropdown-item" href="#">健康サプリ</a></li>
										</ul>
									</li>

									<li class="nav-item dropend">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											ダイエット
										</a>
										<ul class="dropdown-menu shadow">
											<li><a class="dropdown-item" href="#">朝からスッキリ</a></li>
											<li><a class="dropdown-item" href="#">ダイエット食品(栄養補助)</a></li>
											<li><a class="dropdown-item" href="#">ライン引き締め</a></li>
											<li><a class="dropdown-item" href="#">トレーニング</a></li>
											<li><a class="dropdown-item" href="#">プロテイン</a></li>
										</ul>
									</li>

									<li class="nav-item dropend">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											ヘアケア
										</a>
										<ul class="dropdown-menu shadow">
											<li><a class="dropdown-item" href="#">頭髪ケア</a></li>
											<li><a class="dropdown-item" href="#">シャンプー</a></li>
											<li><a class="dropdown-item" href="#">トリートメント</a></li>
											<li><a class="dropdown-item" href="#">ローション</a></li>
											<li><a class="dropdown-item" href="#">栄養補助サプリ</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">商品リスト</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">CSR活動</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">ご注文の流れ</a>
						</li>
					</ul>
				</div>

				<button class="d-lg-none hamburger-menu bg-transparent border-0 shadow-none ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDark">
					<span>&nbsp;</span>
					<span>&nbsp;</span>
					<span>&nbsp;</span>
				</button>
			</div>
		</div>
	</nav>

	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
		<div class="offcanvas-header">
			<a class="navbar-brand" href="index.php">
				<img height="60px" src="dist/img/logo.png" alt="My Shopping Site">
			</a>
			<button type="button" class="btn-close bg-transparent border-0 shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<ul class="navbar-nav">
				<li class="nav-item">
					<div class="dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							個人輸入医薬品
						</a>

						<ul class="dropdown-menu shadow">
							<li><a class="dropdown-item" href="#">育毛·ヘアケア</a></li>
							<li><a class="dropdown-item" href="#">男性·女性機能</a></li>
							<li><a class="dropdown-item" href="#">ダイエット·筋肉増強</a></li>
							<li><a class="dropdown-item" href="#">美容·スキンケア</a></li>
							<li><a class="dropdown-item" href="#">ジェネリック</a></li>
							<li><a class="dropdown-item" href="#">その他</a></li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<div class="dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							今のイチオシ
						</a>

						<ul class="dropdown-menu shadow">
							<li><a class="dropdown-item" href="#">キャンペーン一覧</a></li>
							<li><a class="dropdown-item" href="#">特典付き商品</a></li>
							<li><a class="dropdown-item" href="#">訳あり特価</a></li>
							<li><a class="dropdown-item" href="#">新着商品</a></li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<div class="dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							商品リスト
						</a>

						<ul class="dropdown-menu shadow">
							<li class="nav-item dropend">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									印象アップ
								</a>
								<ul class="dropdown-menu shadow">
									<li><a class="dropdown-item" href="#">エイジングケア</a></li>
									<li><a class="dropdown-item" href="#">においケア</a></li>
									<li><a class="dropdown-item" href="#">デンタルケア</a></li>
									<li><a class="dropdown-item" href="#">ボディケア・ムダ毛ケア</a></li>
									<li><a class="dropdown-item" href="#">まつ毛</a></li>
									<li><a class="dropdown-item" href="#">健康サプリ</a></li>
								</ul>
							</li>

							<li class="nav-item dropend">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									ダイエット
								</a>
								<ul class="dropdown-menu shadow">
									<li><a class="dropdown-item" href="#">朝からスッキリ</a></li>
									<li><a class="dropdown-item" href="#">ダイエット食品(栄養補助)</a></li>
									<li><a class="dropdown-item" href="#">ライン引き締め</a></li>
									<li><a class="dropdown-item" href="#">トレーニング</a></li>
									<li><a class="dropdown-item" href="#">プロテイン</a></li>
								</ul>
							</li>

							<li class="nav-item dropend">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									ヘアケア
								</a>
								<ul class="dropdown-menu shadow">
									<li><a class="dropdown-item" href="#">頭髪ケア</a></li>
									<li><a class="dropdown-item" href="#">シャンプー</a></li>
									<li><a class="dropdown-item" href="#">トリートメント</a></li>
									<li><a class="dropdown-item" href="#">ローション</a></li>
									<li><a class="dropdown-item" href="#">栄養補助サプリ</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">商品リスト</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">CSR活動</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">ご注文の流れ</a>
				</li>
			</ul>
		</div>
	</div>
</header>

<div class="sticky-menu shadow">
	<a href="#" id="chatFab"><i class="bi bi-chat-dots" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"></i></a>
	<a href="#"><i class="bi bi-wechat" data-bs-toggle="tooltip" data-bs-placement="top" title="WeChat"></i></a>
	<a href="#"><i class="bi bi-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="Whapsapp"></i></a>
	<a href="#"><i class="bi bi-cart" data-bs-toggle="tooltip" data-bs-placement="top" title="Cart"></i></a>
	<a href="#"><i class="bi bi-heart" data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist"></i></a>
	<a href="#"><i class="bi bi-card-checklist" data-bs-toggle="tooltip" data-bs-placement="top" title="Feedback"></i></a>
</div>

<div class="topTop shadow-sm">
	<i class="bi bi-arrow-bar-up" data-bs-toggle="tooltip" data-bs-placement="top" title="Go to Top "></i>
</div>

<!-- Chatbot Window -->
<div class="chat-widget" id="chatWidget">
	<div class="chat-header">Chat Support</div>

	<div class="chat-body" id="chatBody">
		<p><strong>Bot:</strong> Hi 👋 How can I help you?</p>
	</div>

	<div class="chat-input">
		<input type="text" id="chatInput" placeholder="Type your message...">
		<button id="sendBtn">Send</button>
	</div>
</div>

<!-- Cart Sidebar -->
<div class="cart-sidebar shadow" id="cartSidebar">
	<!-- Header -->
	<div class="cart-header">
		<h5 class="mb-0" id="cartHeader">Your cart (2 items)</h5>
		<button class="close-btn" id="closeCart">×</button>
	</div>

	<!-- Body -->
	<div class="cart-items" id="cartItems">
		<!-- Cart Item Example -->
		<div class="cart-item">
			<img src="dist/img/p4.jpg" alt="Product Image" class="item-img">
			<div class="item-details">
				<p class="item-name line-clamp-1">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
				<p class="item-price d-flex align-items-baseline gap-2">
					<span class="discounted-price fs-2 fw-bold text-danger">$80</span>
					<span class="fs-6 d-flex gap-1">
						<small class="original-price text-decoration-line-through text-muted">$100</small>
						<small class="discount-percentage text-dark">-20%</small>
					</span>
				</p>
				<p class="item-desc line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
				<div class="item-actions">
					<button class="qty-btn" onclick="changeItemQty(this, -1)"><i class="bi bi-dash-lg text-dark"></i></button>
					<input type="number" value="1" min="1">
					<button class="qty-btn" onclick="changeItemQty(this, 1)"><i class="bi bi-plus-lg text-dark"></i></button>
					<button class="remove-btn" onclick="removeItem(this)"><i class="bi bi-trash text-danger"></i></button>
				</div>
			</div>
		</div>

		<div class="cart-item">
			<img src="dist/img/p7.jpg" alt="Product Image" class="item-img">
			<div class="item-details">
				<p class="item-name line-clamp-1">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
				<p class="item-price d-flex align-items-baseline gap-2">
					<span class="discounted-price fs-2 fw-bold text-danger">$90</span>
					<span class="fs-6 d-flex gap-1">
						<small class="original-price text-decoration-line-through text-muted">$100</small>
						<small class="discount-percentage text-dark">-10%</small>
					</span>
				</p>
				<p class="item-desc  line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
				<div class="item-actions">
					<button class="qty-btn" onclick="changeItemQty(this, -1)"><i class="bi bi-dash-lg text-dark"></i></button>
					<input type="number" value="1" min="1">
					<button class="qty-btn" onclick="changeItemQty(this, 1)"><i class="bi bi-plus-lg text-dark"></i></button>
					<button class="remove-btn" onclick="removeItem(this)"><i class="bi bi-trash text-danger"></i></button>
				</div>
			</div>
		</div>

		<div class="cart-item">
			<img src="dist/img/p6.jpg" alt="Product Image" class="item-img">
			<div class="item-details">
				<p class="item-name line-clamp-1">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
				<p class="item-price d-flex align-items-baseline gap-2">
					<span class="discounted-price fs-2 fw-bold text-danger">$90</span>
					<span class="fs-6 d-flex gap-1">
						<small class="original-price text-decoration-line-through text-muted">$100</small>
						<small class="discount-percentage text-dark">-10%</small>
					</span>
				</p>
				<p class="item-desc  line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
				<div class="item-actions">
					<button class="qty-btn" onclick="changeItemQty(this, -1)"><i class="bi bi-dash-lg text-dark"></i></button>
					<input type="number" value="1" min="1">
					<button class="qty-btn" onclick="changeItemQty(this, 1)"><i class="bi bi-plus-lg text-dark"></i></button>
					<button class="remove-btn" onclick="removeItem(this)"><i class="bi bi-trash text-danger"></i></button>
				</div>
			</div>
		</div>

		<div class="cart-item">
			<img src="dist/img/p2.jpg" alt="Product Image" class="item-img">
			<div class="item-details">
				<p class="item-name line-clamp-1">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
				<p class="item-price d-flex align-items-baseline gap-2">
					<span class="discounted-price fs-2 fw-bold text-danger">$90</span>
					<span class="fs-6 d-flex gap-1">
						<small class="original-price text-decoration-line-through text-muted">$100</small>
						<small class="discount-percentage text-dark">-10%</small>
					</span>
				</p>
				<p class="item-desc  line-clamp-2">3部万ムス演捜チムキフ能選さつび合項クネイフ質待わかん掲過コケホヨ座負ごぜおわ乗独ド法件ねぱんず誌渡ょぎはさ乗覇松院ごゆよに。</p>
				<div class="item-actions">
					<button class="qty-btn" onclick="changeItemQty(this, -1)"><i class="bi bi-dash-lg text-dark"></i></button>
					<input type="number" value="1" min="1">
					<button class="qty-btn" onclick="changeItemQty(this, 1)"><i class="bi bi-plus-lg text-dark"></i></button>
					<button class="remove-btn" onclick="removeItem(this)"><i class="bi bi-trash text-danger"></i></button>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="cart-footer">
		<p>Subtotal: $ <span id="cartSubtotal">2000</span></p>
		<button class="view-cart-btn">View My Cart</button>
		<button class="checkout-btn">Go to Checkout</button>
	</div>
</div>

<body class="<?= $pageClass ?>">
	<div class="smooth-wrapper">
		<div class="smooth-content">
