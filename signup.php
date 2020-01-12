<?php require 'header.php'; ?>

<main>
    <div class="signup-page-wrapper">
        <h3>Sign-Up!</h3>
        <form class="form-signup-page" action="includes/signup.inc.php" method="post">
            <label for="user_name">Username:</label>
            <input type="text" name="usr_name" placeholder="Username">
            <label for="user_email">Email Address:</label>
            <input type="email" name="usr_email" placeholder="Email Address">
            <label for="user_password">Password:</label>
            <input type="password" name="usr_pwd" placeholder="Password">
            <label for="user_password_confirm">Confirm Password:</label>
            <input type="password" name="usr_pwd_repeat" placeholder="Confirm Password">
            <button type="submit" name="signup-submit">Sign Up!</button>
        </form>
    </div>
</main>

<?php require 'footer.php'; ?>
