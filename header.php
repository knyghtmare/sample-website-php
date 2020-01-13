<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

      <header>
          <div class="navbar-container">
              <div class="navbar-items-left">
                  <div class="navbar-item-left">
                    <ul>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="#">Portfolio</a></li>
                      <li><a href="#">About Me</a></li>
                      <li><a href="#">Contact</a></li>
                    </ul>
                  </div>
              </div>
              <div class="navbar-items-right">
                  <div class="navbar-item-right">
                      <form class="login-wrapper" action="includes/login.inc.php" method="post">
                          <label for="user_name_email">Username/Email:</label>
                          <input type="text" name="mailID" placeholder="username or email">
                          <label for="user_password">Password:</label>
                          <input type="password" name="pwd" placeholder="password">
                          <button type="submit" name="login-submit">Log-in</button>
                      </form>
                  </div>
                  <div class="navbar-item-right">
                      <a href="signup.php">Sign Up</a>
                  </div>
                  <div class="navbar-item-right">
                    <form class="login-wrapper" action="includes/logout.php" method="post">
                        <button type="submit" name="logout-submit">Log-Out</button>
                    </form>
                  </div>
              </div>
              <hr>
          </div>
          <div class='title'>
              <h1>My sample Website</h1>
              <hr>
          </div>
      </header>
