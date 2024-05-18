<form class="needs-validation" action="<?php echo site_url('Pendidikan/save') ?>" method="post"
    style="max-width: 400px; margin: 0 auto; padding: 20px; background-color: #f7f7f7; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

    <label style="font-weight: bold;">Id Pendidikan</label><br>
    <input type="text" name="id_pendidikan" value=""
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>

    <label style="font-weight: bold;">Tingkatan Pendidikan</label><br>
    <input type="text" name="tingkatan_pendidikan" value=""
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>

    <button type="submit" name="button"
        style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;"
        onmouseover="this.style.backgroundColor='#0056b3'"
        onmouseout="this.style.backgroundColor='#007bff'">Simpan</button>

    <a href="<?php echo site_url('Pendidikan') ?>" style="text-decoration: none; display: inline-block; width: 48%;">
        <button type="button" name="button"
            style="padding: 10px 20px; background-color: #6c757d; color: white; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;"
            onmouseover="this.style.backgroundColor='#495057'"
            onmouseout="this.style.backgroundColor='#6c757d'">Batal</button>
    </a>
</form>