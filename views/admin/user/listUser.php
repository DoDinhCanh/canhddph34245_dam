<div class="tab-content active" id="products">
  <div class="d-flex flex-column mb-3">
  <h2 class="fw-bold mt-3 text-center">Quản lý Người Dùng</h2>
  <a href="<?= BASE_URL_ADMIN . '&action=add-user' ?>" class="btn btn-primary mt-2">+ Thêm người dùng</a>
</div>
  <div class="card shadow rounded p-4 mb-4">
    <div class="table-responsive">
      <table class="table table-bordered text-center align-middle">
        <thead class="table-light fw-bold">
          <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data as $user): ?>
          <tr>
            <td><?= $user["id"] ?></td>
            <td><?= $user["username"] ?></td>
            <td><?= $user["email"] ?></td><td><?= $user["password"] ?></td>
            <td><?= $user["role_name"] ?></td>
            <td>
              <div class="d-flex gap-2 justify-content-center">
                <button class="btn btn-primary btn-sm">Xem</button>
                <a href="<?= BASE_URL_ADMIN . '&action=delete-user&id=' . $user["id"] ?>"
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