<form class="needs-validation" action="<?php echo site_url('Admin/update/' . $edit['kd_admin']) ?>" method="post"

    style="max-width: 400px; margin: 0 auto; padding: 20px; background-color: #f7f7f7; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <div class="form-group">
        <label for="kd_admin" style="font-weight: bold;">Kode Admin</label><br>
        <input type="text" name="kd_admin" class="form-control" disabled value="<?php echo $edit['kd_admin'] ?>">
        <input type="hidden" name="kd_admin" value="<?php echo $edit['kd_admin'] ?>">
    </div>
    <div class="form-group">
        <label for="nama_admin" style="font-weight: bold;">Nama Admin</label><br>
        <input type="text" name="nama_admin" class="form-control" value="<?php echo $edit['nama_admin'] ?>" required>
        <div class="invalid-feedback">
            Harap masukkan nama admin.
        </div>
    </div>
    <div class="form-group">
        <label for="pswd_admin" style="font-weight: bold;">Password</label><br>
        <input type="text" name="pswd_admin" class="form-control" value="<?php echo $edit['pswd_admin'] ?>"
            required>
        <div class="invalid-feedback">
            Harap masukkan password admin.
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" style="border-radius: 5px;"
            onmouseover="this.style.backgroundColor='#0056b3'"
            onmouseout="this.style.backgroundColor='#007bff'">Perbaharui</button>
        <a href="<?php echo site_url('Admin') ?>" class="btn btn-secondary" style="border-radius: 5px;"
            onmouseover="this.style.backgroundColor='#495057'"
            onmouseout="this.style.backgroundColor='#6c757d'">Batal</a>
    </div>
</form>