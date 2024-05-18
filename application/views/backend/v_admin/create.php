<form class="needs-validation" action="<?php echo site_url('Admin/save') ?>" method="post"

    style="max-width: 300px; margin: 0 auto; padding: 20px; background: #f7f7f7; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <label style="font-weight: bold; margin-bottom: 5px; display: block;">Kode Admin</label><br>
    <input type="text" name="kd_admin" value=""
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>
    <label style="font-weight: bold; margin-bottom: 5px; display: block;">Nama Admin</label><br>
    <input type="text" name="nama_admin" value=""
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>
    <label style="font-weight: bold; margin-bottom: 5px; display: block;">Password</label><br>
    <input type="text" name="pswd_admin" value=""
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>

    <button type="submit" name="button" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;"
    onmouseover="this.style.backgroundColor='#0056b3'"
    onmouseout="this.style.backgroundColor='#007bff'">Simpan</button>

<a href="<?php echo site_url('Admin') ?>" style="text-decoration: none;">
    <button type="button" name="button" style="padding: 10px 20px; background-color: #6c757d; color: white; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;"
    onmouseover="this.style.backgroundColor='#495057'"
    onmouseout="this.style.backgroundColor='#6c757d'">Batal</button>
</a>

</form>