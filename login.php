<?php include './views/header.php'; ?>

  <div class="main">

    <?php include './views/nav.php'; ?>

    <section class="content">

      <div class="page-header">
        <h2 class="page-title">Your Account</h2>
      </div>

      <form class="account-login">
        <h3>Sign In</h3>
        <div class="form-item">
          <label>Email</label>
          <input type="email">
        </div>
        <h3>Do you have a payment center password?</h3>
        <div class="form-item form-radio">
          <input type="radio" name="password" id="No" value="No">
          <label for="No">No, I am a new customer</label>
        </div>
        <div class="form-item form-radio">
          <input type="radio" name="password" id="Yes" value="Yes">
          <label for="Yes">Yes, I have a password</label>
          <input type="password">
        </div>
        <div class="form-item">
          <input type="submit" value="Sign In">
        </div>
      </form>

    </section>

  </div>

  <?php include './views/footer.php'; ?>