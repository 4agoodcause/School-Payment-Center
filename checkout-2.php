<?php include './views/header.php'; ?>

  <div class="main">

    <?php include './views/nav.php'; ?>

    <section class="content">

      <div class="page-header">
        <h2 class="page-title">Checkout</h2>
      </div>

      <div class="form-header">
        <h3>Step 2 of 4 - Provide your payment information</h3>
        <p>Please complete the form below to provide your payment details.</p>
      </div>

      <form method="post" action="">
        <div class="form-block">
          <h4>Payment Information</h4>
          <p>All transactions conducted on this web site are encrypted using a secure server certified weekly to pass the FBI/SANS Internet Security Test.</p>
          <div class="form-item">
            <label>Bank Account Number</label>
            <input type="text">
            <div class="form-helper"><a href="" class="modal-trigger">How to find this</a></div>
          </div>
          <div class="form-item">
            <label>Bank Routing Number</label>
            <input type="text">
            <div class="form-helper"><a href="" class="modal-trigger">How to find this</a></div>
          </div>
          <div class="form-item">
            <label>Name on Bank Account</label>
            <input type="text">
          </div>
          <div class="form-item">
            <label>Bank Name</label>
            <input type="text">
          </div>
        </div>
        <div class="form-item">
          <input type="submit" value="Review Order">
        </div>
      </form>

    </section>

  </div>

  <div id="modal" class="modal">
    <div class="modal-overlay"></div>
    <div class="modal-wrapper">
      <a href="" class="close-modal"><svg class="icon-close" viewBox="0 0 24 24"><use xlink:href="#icon-close"></use></svg></a>
      <h3 class="modal-title">Paying by Bank Transfer / Electronic Check</h3>
      <p><img src="assets/images/echeck.jpg"></p>
      <p><strong>1. Routing Number:</strong> The first 9 numbers from the left at the bottom of your check are your Bank Routing Number. This number is always 9 digits.</p>
      <p><strong>2. Account Number:</strong> The numbers that are neither the bank routing number nor the check number - are your account number.</p>
    </div>
  </div>

  <?php include './views/footer.php'; ?>