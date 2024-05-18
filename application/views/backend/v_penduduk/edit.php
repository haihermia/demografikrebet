<form class="needs-validation" action="<?php echo site_url('Penduduk/update/' . $edit['nik']) ?>" method="post"
    style="max-width: 400px; margin: 0 auto; padding: 20px; background-color: #f7f7f7; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

    <label style="font-weight: bold;">NIK</label><br>
    <input type="text" name="nik" disabled value="<?php echo $edit['nik'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;"><br>
    <input type="hidden" name="nik" value="<?php echo $edit['nik'] ?>"><br>

    <label style="font-weight: bold;">Nomor KK</label><br>
    <input type="text" name="nomor_kk" value="<?php echo $edit['nomor_kk'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;"><br>

    <label style="font-weight: bold;">Id Pendidikan</label><br>
    <input type="text" name="id_pendidikan" value="<?php echo $edit['id_pendidikan'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;"><br>

    <label style="font-weight: bold;">Id Pekerjaan</label><br>
    <input type="text" name="id_pekerjaan" value="<?php echo $edit['id_pekerjaan'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;"><br>

    <label style="font-weight: bold;">Nama</label><br>
    <input type="text" name="nama" value="<?php echo $edit['nama'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;"><br>

    <label style="font-weight: bold;">Jenis Kelamin</label><br>
    <select name="jenis_kelamin" id="jenis_kelamin"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
        <option value="Laki-Laki" <?php if ($edit['jenis_kelamin'] == 'Laki-Laki')
            echo 'selected'; ?>>Laki-Laki</option>
        <option value="Perempuan" <?php if ($edit['jenis_kelamin'] == 'Perempuan')
            echo 'selected'; ?>>Perempuan</option>
    </select><br>

    <label style="font-weight: bold;">Tempat Lahir</label><br>
    <input type="char" name="tempat_lahir" value="<?php echo $edit['tempat_lahir'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;"><br>

    <label style="font-weight: bold;">Tanggal Lahir</label><br>
    <input type="date" name="tanggal_lahir" value="<?php echo $edit['tanggal_lahir'] ?>"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;"><br>

    <label style="font-weight: bold;">Status</label><br>
    <select name="status" id="status"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
        <option value="Menikah" <?php if ($edit['status'] == 'Menikah')
            echo 'selected'; ?>>Menikah</option>
        <option value="Belum Menikah" <?php if ($edit['status'] == 'Belum Menikah')
            echo 'selected'; ?>>Belum Menikah
        </option>
    </select><br>
    <label style="font-weight: bold;">RT</label><br>
    <select name="RT" id="RT"
        style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #007bff; border-radius: 5px;">
        <option value="1" <?php if ($edit['RT'] == '1')
            echo 'selected'; ?>>1</option>
        <option value="2" <?php if ($edit['RT'] == '2')
            echo 'selected'; ?>>2</option>
        <option value="3" <?php if ($edit['RT'] == '3')
            echo 'selected'; ?>>3</option>
        <option value="4" <?php if ($edit['RT'] == '4')
            echo 'selected'; ?>>4</option>
        <option value="5" <?php if ($edit['RT'] == '5')
            echo 'selected'; ?>>5</option>

    </select><br>

    <button type="submit" name="button"
        style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; display: inline-block; transition: background-color 0.3s;"
        onmouseover="this.style.backgroundColor='#0056b3'"
        onmouseout="this.style.backgroundColor='#007bff'">Perbaharui</button>
    <a href="<?php echo site_url('Penduduk') ?>"
        style="text-decoration: none; display: inline-block; width: 45%; margin-left: 5px;"><button type="button"
            name="button"
            style="padding: 10px 20px; background-color: #6c757d; color: white; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;"
            onmouseover="this.style.backgroundColor='#495057'"
            onmouseout="this.style.backgroundColor='#6c757d'">Batal</button></a>
    </div>

</form>