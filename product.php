<?php include './views/header.php'; ?>

  <div class="main">

    <?php include './views/nav.php'; ?>

    <section class="content single-product">

      <h2 class="product-title">Product Title Goes Here</h2>

      <div class="product-body">
        <div class="product-image">
          <img src="assets/images/product-thumb-fpo.png">
        </div>
        <div class="product-description">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget libero elementum, bibendum mi at, suscipit sapien. Maecenas libero est, porta in dictum sit amet, dictum a lacus. Proin porttitor tincidunt ultricies. Ut euismod maximus felis, nec tempus nisi pharetra et. Ut dapibus mollis egestas. Proin interdum diam mi, quis sagittis massa cursus eget. Maecenas mollis velit eu tincidunt malesuada.</p>
        </div>
        <p class="product-price">$60.00</p>
        <form>
          <div class="form-item form-quantity">
            <label>Quantity</label>
            <input type="text">
          </div>
          <div class="form-item">
            <label>Line 1 <span class="form-helper">(16 Characters)</span></label>
            <textarea></textarea>
          </div>
          <div class="form-item">
            <label>Line 2 <span class="form-helper">(16 Characters)</span></label>
            <textarea></textarea>
          </div>
          <div class="form-item">
            <label>Line 3 <span class="form-helper">(16 Characters)</span></label>
            <textarea></textarea>
          </div>
          <div class="form-item">
            <input type="button" value="Add to Cart">
        </form>
      </div>

    </section>

  </div>

  <?php include './views/footer.php'; ?>