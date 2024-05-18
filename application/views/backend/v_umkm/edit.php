<form class="needs-validation" action="<?php echo site_url('umkm/update/' . $edit['id_umkm']) ?>" method="post"
    style="max-width: 400px; margin: 0 auto; padding: 20px; background-color: #f7f7f7; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

    <label style="font-weight: bold; display: block;">Id UMKM</label><br>
    <input type="text" name="id_umkm" disabled value="<?php echo $edit['id_umkm'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>
    <input type="text" name="id_umkm" hidden value="<?php echo $edit['id_umkm'] ?>">
    <p></p>

    <label style="font-weight: bold; display: block;">Nama</label><br>
    <input type="text" name="nama" value="<?php echo $edit['nama'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>
    <label style="font-weight: bold; display: block;">Lokasi</label><br>
    <input type="text" name="lokasi" value="<?php echo $edit['lokasi'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>
    <label style="font-weight: bold; display: block;">Img UMKM</label><br>
    <input type="file" name="img_umkm" value="<?php echo $edit['img_umkm'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>
    <label style="font-weight: bold; display: block;">Kategori</label><br>
    <input type="text" name="kategori" value="<?php echo $edit['kategori'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>
    <label style="font-weight: bold; display: block;">Maps</label><br>
    <input type="text" name="maps" value="<?php echo $edit['maps'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>

    <button type="submit" name="button"
        style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; display: inline-block; transition: background-color 0.3s;"
        onmouseover="this.style.backgroundColor='#0056b3'"
        onmouseout="this.style.backgroundColor='#007bff'">Perbaharui</button>
    <a href="<?php echo site_url('umkm') ?>"
        style="text-decoration: none; display: inline-block; width: 45%; margin-left: 5px;"><button type="button"
            name="button"
            style="padding: 10px 20px; background-color: #6c757d; color: white; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;"
            onmouseover="this.style.backgroundColor='#495057'"
            onmouseout="this.style.backgroundColor='#6c757d'">Batal</button></a>
</form>