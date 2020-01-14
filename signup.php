<?php require 'header.php'; ?>

<main>
    <div class="signup-page-wrapper">
        <h3>Sign-Up!</h3>
        <?php
            // add code here

            if (isset($_GET['error'])) {
              if ($_GET['error'] == 'emptyfields') {
                // code...
                echo '<p class="signuperror">Fill in all fields!</p>';
              }
              elseif ($_GET['error'] == 'invalidmailuid') {
                // code...
                echo '<p class="signuperror">Invalid username and email</p>';
              }
              elseif ($_GET['error'] == 'invaliduid') {
                // code...
                echo '<p class="signuperror">Invalid username</p>';
              }
              elseif ($_GET['error'] == 'invalidmail') {
                // code...
                echo '<p class="signuperror">Invalid email</p>';
              }
              elseif ($_GET['error'] == 'passwordcheck') {
                // code...
                echo '<p class="signuperror">Your passwords do not match!</p>';
              }
              elseif ($_GET['error'] == 'usertaken') {
                // code...
                echo '<p class="signuperror">Username has been already taken!</p>';
              }
            }
         ?>
        <form class="form-signup-page" action="includes/signup.inc.php" method="post">
            <label for="user_name">Username:</label><br>
            <input type="text" name="usr_name" placeholder="Username"><br>
            <label for="user_email">Email Address:</label><br>
            <input type="email" name="usr_email" placeholder="Email Address"><br>
            <label for="user_password">Password:</label><br>
            <input type="password" name="usr_pwd" placeholder="Password"><br>
            <label for="user_password_confirm">Confirm Password:</label><br>
            <input type="password" name="usr_pwd_repeat" placeholder="Confirm Password"><br>
            <button type="submit" name="signup-submit">Sign Up!</button><br>
        </form>
    </div>
</main>

<?php require 'footer.php'; ?>
