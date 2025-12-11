<div class="tab-content active" id="products">
  <div class="d-flex flex-column mb-3">
  <h2 class="fw-bold mt-3 text-center">Quản lý Danh Mục</h2>
  <a href="<?= BASE_URL_ADMIN . '&action=add-category' ?>" class="btn btn-primary mt-2">+ Thêm danh mục</a>
</div>
  <div class="card shadow rounded p-4 mb-4">
    <div class="table-responsive">
      <table class="table table-bordered text-center align-middle">
        <thead class="table-light fw-bold">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data as $category): ?>
          <tr>
            <td><?= $category["id"] ?></td>
            <td><?= $category["name"] ?></td>
            <td>
              <img src="<?= BASE_ASSETS_UPLOADS . $category['image'] ?>" class="product-img" alt="Quần" />
            </td>
            <td>
              <div class="d-flex gap-2 justify-content-center">
                <a href="<?= BASE_URL_ADMIN . '&action=edit-category&id=' . $category["id"] ?>" class="btn btn-success btn-sm">Sửa</a>
                <a href="<?= BASE_URL_ADMIN . '&action=delete-category&id=' . $category["id"] ?>"
                onclick="return confirm('Ban chac chua ?');" class="btn btn-danger btn-sm">Xóa</a>
              </div>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>