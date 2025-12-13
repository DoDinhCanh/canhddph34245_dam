<form method="POST" action="<?= BASE_URL_ADMIN . '&action=store-user' ?>">
  <div class="mb-3">
    <label>Tên đăng nhập</label>
    <input type="text" name="username" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Mật khẩu</label>
    <input type="password" name="password" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Quyền</label>
    <select name="role_id" class="form-select">
      <?php foreach ($data['role'] as $role): ?>
        <option value="<?= $role['id'] ?>"><?= $role['name'] ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Thêm mới</button>
</form>
