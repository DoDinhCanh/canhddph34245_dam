<section class="container my-5">
  <h2 class="text-center mb-4">Danh mục sản phẩm</h2>
  <div class="row g-4 justify-content-center">
    <?php foreach ($data['category'] as $cate): ?>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="category-item text-center">
          <img src="<?= BASE_ASSETS_UPLOADS . $cate['image'] ?>" 
               alt="<?= $cate['name'] ?>" 
               class="img-fluid" />
          <p><?= $cate['name'] ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
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
              <a href="<?= BASE_URL . '?action=detail-product&id=' . $pro["id"] ?>" class="text-dark text-decoration-none">
  <h5 class="mb-1"><?= $pro['name'] ?></h5>
</a>

              <span class="price"><?= $pro['price']?> ₫</span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>