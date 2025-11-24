<div class="tab-content active" id="products">
  <div class="d-flex flex-column mb-3">
  <h2 class="fw-bold mt-3 text-center">Quản lý sản phẩm</h2>
  <a href="admin-form.html" class="btn btn-primary mt-2">+ Thêm sản phẩm</a>
</div>
  <div class="card shadow rounded p-4 mb-4">
    <div class="table-responsive">
      <table class="table table-bordered text-center align-middle">
        <thead class="table-light fw-bold">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
            <th>Category</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data as $pro): ?>
          <tr>
            <td><?= $pro["id"] ?></td>
            <td><?= $pro["name"] ?></td>
            <td><?= $pro["price"] ?></td>
            <td><?= $pro["description"] ?></td>
            <td>
              <img src="<?= BASE_ASSETS_UPLOADS . $pro['image'] ?>" class="product-img" alt="Quần" />
            </td>
            <td>Quần Sooc</td>
            <td>
              <div class="d-flex gap-2 justify-content-center">
                <button class="btn btn-success btn-sm">Sửa</button>
                <button class="btn btn-danger btn-sm">Xóa</button>
              </div>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>