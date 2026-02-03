<?php include('inc/header.php'); ?>
<style>
    header, footer, .sticky-menu {
        display: none;
    }
</style>
<main>
    <div class="registration-container shadow">
        <h3 class="text-center mb-3">Create an Account</h3>

        <form class="register-form">
            <input type="text" placeholder="Username" required>
            <input type="email" placeholder="Email Address" required>
            <input type="text" placeholder="Phone Number" required>
            <input type="text" placeholder="Verification code" required>
            <input type="password" placeholder="Password" required>
            <input type="password" placeholder="Confirm Password" required>

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

            <button type="submit">Register</button>
        </form>

        <div class="links">
            <a href="login.php">Back to Login</a>
        </div>
    </div>
</main>
<!--index-page-->

<?php include('inc/footer.php'); ?>



