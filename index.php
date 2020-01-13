<?php require 'header.php'; ?>
<main>
  <div class="wrapper-main">
      <section>
          <div class="log-status">
              <?php
                if (isset($_SESSION['userId'])) {
                  // code...
                  echo "<p>You are logged in.</p>";
                }
                else {
                  // code...
                  echo "<p>You have logged out.</p>";
                }
              ?>
          </div>
      </section>
    </div>
</main>

<?php require 'footer.php'; ?>
