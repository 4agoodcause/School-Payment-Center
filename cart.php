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
          <div class="cart-col"><a href=""><svg class="icon-close"><use xlink:href="#icon-close" /></svg></a></div>
          <div class="cart-col">Product Title Goes Here</div>
          <div class="cart-col">
            <div class="student-name">John Paul Jones</div>
            <div class="student-info">
              <div class="student-id">12345678</div>
              <div class="student-school">Upper Moreland High School</div>
            </div>
          </div>
          <div class="cart-col">2</div>
          <div class="cart-col">$60.00</div>
          <div class="cart-col">$120.00</div>
        </div>
        <div class="cart-row">
          <div class="cart-col"><a href=""><svg class="icon-close"><use xlink:href="#icon-close" /></svg></a></div>
          <div class="cart-col">Product Title Goes Here</div>
          <div class="cart-col">George Anderson</div>
          <div class="cart-col">3</div>
          <div class="cart-col">$20.00</div>
          <div class="cart-col">$60.00</div>
        </div>
        <div class="cart-row">
          <div class="cart-col"><a href=""><svg class="icon-close"><use xlink:href="#icon-close" /></svg></a></div>
          <div class="cart-col">Product Title Goes Here</div>
          <div class="cart-col">Susan Smith</div>
          <div class="cart-col">1</div>
          <div class="cart-col">$25.00</div>
          <div class="cart-col">$25.00</div>
        </div>
      </div>

      <div class="cart-total">Total:  $360.00</div>

      <div class="cart-actions">
        <a href="checkout.php" class="btn">Proceed to Checkout</a>
        <a href="./" class="btn btn-lt-purple">Continue Shopping</a>
      </div>

    </section>

  </div>

  <?php include './views/footer.php'; ?>