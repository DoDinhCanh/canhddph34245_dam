<section class="container my-5">
      <h2 class="text-center mb-4">Sản Phẩm Mới Nhất</h2>
      <div class="row g-4">
        <?php foreach($top4new as $pro): ?>
        <div class="col-6 col-md-3">
          <div class="card product-card h-100 text-center">
            <img
              src="<?= BASE_ASSETS_UPLOADS . $pro['image'] ?>"
              class="card-img-top"
              alt="Quần short kaki"
            />
            <div class="card-body">
              <p class="mb-1"><?= $pro['name']?></p>
              <span class="price"><?= $pro['price']?> ₫</span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>