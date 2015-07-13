<?php include './views/header.php'; ?>

  <div class="main">

    <?php include './views/nav.php'; ?>

    <section class="content">

      <div class="page-header">
        <h2 class="page-title">Checkout</h2>
      </div>

      <div class="form-header">
        <h3>Step 1 of 4 - Provide your billing information</h3>
        <p>Please complete the form below to begin the checkout process. All transactions conducted on this web site are encrypted using a secure server certified weekly to pass the FBI/SANS Internet Security Test. If you have problems submitting your order please contact Cara A. Michaels at cmichaels@cheltenham.org or 215-886-9076.</p>
      </div>

      <form method="post" action="checkout-2.php">
        <div class="form-block">
          <h4>Billing Information</h4>
          <p>Please complete this section with information as it appears on your debit or credit card statement.</p>
          <p>We will safeguard your privacy. We do not share or sell donor-related information to other organizations, groups or individuals.</p>
          <div class="form-item form-select">
            <label>Title</label>
            <select>
              <option>Mr.</option>
              <option>Mrs.</option>
              <option>Ms.</option>
            </select>
          </div>
          <div class="form-item">
            <label>Name</label>
            <input type="text">
          </div>
          <div class="form-item">
            <label>Organization</label>
            <input type="text">
          </div>
          <div class="form-item">
            <label>Address</label>
            <input type="text">
          </div>
          <div class="form-item">
            <label>City</label>
            <input type="text">
          </div>
          <div class="form-item">
            <label>State</label>
            <input type="text">
          </div>
          <div class="form-item">
            <label>Zip</label>
            <input type="text">
          </div>
          <div class="form-item">
            <label>Email</label>
            <input type="email">
          </div>
          <div class="form-item">
            <label>Phone</label>
            <input type="text">
          </div>
        </div>
        <div class="form-block">
          <h4>Create an Account Password</h4>
          <p>To gain access to your online order history and to speed yourself through future online orders please provide a password below for your online account.</p>
          <div class="form-item">
            <label>Password</label>
            <input type="password">
          </div>
          <div class="form-item">
            <label>Confirm Password</label>
            <input type="password">
          </div>
        </div>
        <div class="form-block">
          <h4>Payment Option</h4>
          <p>Please choose whether you would like to pay for this order via debit/credit card or electronic check (recommended). E-check orders are recommended as the most cost-effective transaction type for Cheltenham School District.</p>
          <div class="form-item form-select">
            <label>Pay by</label>
            <select>
              <option>Credit/Debit Card</option>
              <option>Electronic Check</option>
            </select>
          </div>
        </div>
        <div class="form-item">
          <input type="submit" value="Continue">
        </div>
      </form>


    </section>

  </div>

  <?php include './views/footer.php'; ?>