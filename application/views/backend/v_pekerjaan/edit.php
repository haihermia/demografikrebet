<form class="needs-validation" action="<?php echo site_url('Pekerjaan/update/' . $edit['id_pekerjaan']) ?>" method="post"
    style="max-width: 400px; margin: 0 auto; padding: 20px; background-color: #f7f7f7; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

    <label style="font-weight: bold;">Id Pekerjaan</label><br>
    <input type="text" name="id_pekerjaan" disabled value="<?php echo $edit['id_pekerjaan'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>

    <input type="text" name="id_pekerjaan" hidden value="<?php echo $edit['id_pekerjaan'] ?>">
    <p></p>

    <label style="font-weight: bold;">Nama Pekerjaan</label><br>
    <input type="text" name="nama_pekerjaan" value="<?php echo $edit['nama_pekerjaan'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>

    
    <button type="submit" name="button"
        style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;"
        onmouseover="this.style.backgroundColor='#0056b3'"
        onmouseout="this.style.backgroundColor='#007bff'">Perbaharui</button>

    <a href="<?php echo site_url('Pekerjaan') ?>" style="text-decoration: none; display: inline-block; width: 48%;">
        <button type="button" name="button"
            style="padding: 10px 20px; background-color: #6c757d; color: white; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;"
            onmouseover="this.style.backgroundColor='#495057'"
            onmouseout="this.style.backgroundColor='#6c757d'">Batal</button>
    </a>
</form>