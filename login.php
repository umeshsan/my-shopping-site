<?php include('inc/header.php'); ?>
<style>
	header, footer, .sticky-menu {
		display: none;
	}
</style>
<main>
	<div class="login-container shadow">
		<div class="login-lt-column">
			<div class="text-center">
				<h6 class="mb-3">携帯電話でQRコードをスキャンして<br>ログインしてください</h6>
				<img src="dist/img/qr-code.jpg" alt="QR Code">
			</div>
			<p>How do I log in by scanning a QR code?</p>
		</div>

		<div class="login-rt-column">
			<div class="login-toggle">
				<button id="passwordBtn" class="active">Password Login</button>
				<button id="smsBtn">SMS Login</button>
			</div>

			<form class="login-form" id="loginForm">
				<input type="text" id="emailPhone" placeholder="Account name / email / phone number">
				<input type="text" id="verificationCode" placeholder="Please enter the verification code" style="display: none;">
				<input type="password" id="password" placeholder="Password">
				<button type="submit">Log In</button>
			</form>

			<div class="login-links">
				<a href="forgot-password.php">Forgot your account?</a>
				<a href="registration.php">Free Registration</a>
			</div>

			<div class="agreement">
				<input type="checkbox" id="agreement">
				<label for="agreement">
					I have read and agree to the following agreements:
					<a href="#">Shopping Platform Service Agreement</a>,
					<a href="#">Privacy Policy</a>,
					<a href="#">Legal Statement</a>, and
					<a href="#">Client Service Agreement</a>
				</label>
			</div>
		</div>
	</div>
</main>
<!--index-page-->

<?php include('inc/footer.php'); ?>

<script>
	const passwordBtn = document.getElementById('passwordBtn');
	const smsBtn = document.getElementById('smsBtn');
	const passwordInput = document.getElementById('password');
	const emailPhoneInput = document.getElementById('emailPhone');
	const verificationCodeInput = document.getElementById('verificationCode'); // new input

	passwordBtn.addEventListener('click', () => {
		passwordBtn.classList.add('active');
		smsBtn.classList.remove('active');

		passwordInput.style.display = 'block'; // show password
		verificationCodeInput.style.display = 'none'; // hide verification code

		emailPhoneInput.placeholder = 'Account name / email / phone number';
	});

	smsBtn.addEventListener('click', () => {
		smsBtn.classList.add('active');
		passwordBtn.classList.remove('active');

		passwordInput.style.display = 'none'; // hide password
		verificationCodeInput.style.display = 'block'; // show verification code

		emailPhoneInput.placeholder = 'Phone number';
	});
</script>


