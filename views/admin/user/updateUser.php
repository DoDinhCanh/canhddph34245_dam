<form method="POST" action="<?= BASE_URL_ADMIN . '&action=update-user' ?>">
  <input type="hidden" name="id" value="<?= $data['user']['id'] ?>">

  <div class="mb-3">
    <label>Tên đăng nhập</label>
    <input type="text" name="username" class="form-control" 
           value="<?= $data['user']['username'] ?>" required>
  </div>

  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" 
           value="<?= $data['user']['email'] ?>" required>
  </div>

  <div class="mb-3">
    <label>Mật khẩu</label>
    <input type="password" name="password" class="form-control">
  </div>

  <div class="mb-3">
    <label>Quyền</label>
    <select name="role_id" class="form-select">
      <?php foreach ($data['roles'] as $role): ?>
        <option value="<?= $role['id'] ?>" 
          <?= $role['id'] == $data['user']['role_id'] ? 'selected' : '' ?>>
          <?= $role['name'] ?>
        </option>
      <?php endforeach; ?>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
