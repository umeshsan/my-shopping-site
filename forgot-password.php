<?php include('inc/header.php'); ?>
<style>
	header, footer, .sticky-menu {
		display: none;
	}
</style>
<main>
    <div class="forgot-password-container shadow">
        <h3 class="mb-3 text-center">Forgot Password</h3>
        <p class="text-center text-muted">Enter your account name / email / phone number to reset your password.</p>

        <form class="forgot-form">
          <input type="text" placeholder="Account name / email / phone number" required>
          <input type="text" placeholder="Verification code" required>
          <button type="submit">Send Reset Link</button>
      </form>

      <div class="links">
          <a href="login.php">Back to Login</a> |
          <a href="registration.php">Free Registration</a>
      </div>
  </div>
</main>
<!--index-page-->

<?php include('inc/footer.php'); ?>



