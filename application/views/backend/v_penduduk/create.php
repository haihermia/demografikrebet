<form class="needs-validation" action="<?php echo site_url('Penduduk/save') ?>" method="post"
    style="max-width: 400px; margin: 0 auto; padding: 20px; background-color: #f7f7f7; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <label style="font-weight: bold; margin-bottom: 5px; display: block;">NIK</label><br>
    <input type="text" name="nik" value=""
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>
    <label style="font-weight: bold; margin-bottom: 5px; display: block;">Nomor KK</label><br>
    <input type="text" name="nomor_kk" value=""
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>
    <label style="font-weight: bold; margin-bottom: 5px; display: block;">Id Pendidikan</label><br>
    <input type="text" name="id_pendidikan" value=""
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>
    <label style="font-weight: bold; margin-bottom: 5px; display: block;">Id Pekerjaan</label><br>
    <input type="text" name="id_pekerjaan" value=""
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>
    <label style="font-weight: bold; margin-bottom: 5px; display: block;">Nama</label><br>
    <input type="text" name="nama" value=""
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>
    <label style="font-weight: bold; margin-bottom: 5px; display: block;">Jenis Kelamin</label><br>
    <select name="jenis_kelamin" id="jenis_kelamin"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    <p></p>
    <label style="font-weight: bold; margin-bottom: 5px; display: block;">Tempat Lahir</label><br>
    <input type="text" name="tempat_lahir" value=""
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>
    <label style="font-weight: bold; margin-bottom: 5px; display: block;">Tanggal Lahir</label><br>
    <input type="date" name="tanggal_lahir" value=""
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p>
    <label style="font-weight: bold; margin-bottom: 5px; display: block;">Status</label><br>
    <select name="status" id="status"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
        <option value="Menikah">Menikah</option>
        <option value="Belum Menikah">Belum Menikah</option>
    </select>
    <p></p>

    <!-- <label style="font-weight: bold; margin-bottom: 5px; display: block;">RT</label><br>
    <input type="text" name="RT" value=""
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
    <p></p> -->

    <label style="font-weight: bold; margin-bottom: 5px; display: block;">RT</label><br>
    <select name="RT" id="RT"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <p></p>
    <button type="submit" name="button"
        style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;"
        onmouseover="this.style.backgroundColor='#0056b3'"
        onmouseout="this.style.backgroundColor='#007bff'">Simpan</button>
    <a href="<?php echo site_url('Penduduk') ?>" style="text-decoration: none;">
        <button type="button" name="button"
            style="padding: 10px 20px; background-color: #6c757d; color: white; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;"
            onmouseover="this.style.backgroundColor='#495057'"
            onmouseout="this.style.backgroundColor='#6c757d'">Batal</button>
    </a>

</form>