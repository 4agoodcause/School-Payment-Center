<?php include './views/header.php'; ?>

  <div class="main">

    <?php include './views/nav.php'; ?>

    <section class="content">

      <div class="page-header">
        <h2 class="page-title">Your Shopping Cart</h2>
      </div>

      <div class="cart-table">
        <div class="cart-row">
          <div class="cart-col"></div>
          <div class="cart-col">Item</div>
          <div class="cart-col">Student</div>
          <div class="cart-col">Quantity</div>
          <div class="cart-col">Price</div>
          <div class="cart-col">Total</div>
        </div>
        <div class="cart-row">
          <div class="cart-col"><svg class="icon-close"><use xlink:href="#icon-close" /></svg></div>
          <div class="cart-col">Product Title Goes Here</div>
          <div class="cart-col">John Paul Jones</div>
          <div class="cart-col">2</div>
          <div class="cart-col">$60.00</div>
          <div class="cart-col">$120.00</div>
        </div>
        <div class="cart-row">
          <div class="cart-col"><svg class="icon-close"><use xlink:href="#icon-close" /></svg></div>
          <div class="cart-col">Product Title Goes Here</div>
          <div class="cart-col">George Anderson</div>
          <div class="cart-col">3</div>
          <div class="cart-col">$20.00</div>
          <div class="cart-col">$60.00</div>
        </div>
        <div class="cart-row">
          <div class="cart-col"><svg class="icon-close"><use xlink:href="#icon-close" /></svg></div>
          <div class="cart-col">Product Title Goes Here</div>
          <div class="cart-col">Susan Smith</div>
          <div class="cart-col">1</div>
          <div class="cart-col">$25.00</div>
          <div class="cart-col">$25.00</div>
        </div>
      </div>

      <div class="cart-total">Total:  $360.00</div>

      <div class="cart-actions">
        <input type="submit" value="Proceed to Checkout" class="btn">
        <input type="submit" value="Continue Shopping" class="btn btn-lt-purple">
      </div>

    </section>

  </div>

  <?php include './views/footer.php'; ?>