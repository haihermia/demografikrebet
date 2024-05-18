<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->




    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo site_url('Penduduk/create') ?>" class="btn btn-info mb-2">
                <i class="fas fa-plus"></i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>NIK</td>
                            <td>Nomor KK</td>
                            <td>Pendidikan</td>
                            <td>Pekerjaan</td>
                            <td>Jenis Kelamin</td>
                            <td>Tempat Lahir</td>
                            <td>Tanggal Lahir</td>
                            <td>Status</td>
                            <td>RT</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        //$read yang diambil dari control function index
                        foreach ($read->result_array() as $row) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $no ?>
                                </td>

                                <td>
                                    <?php echo $row['nama'] ?>
                                </td>

                                <td>
                                    <?php echo $row['nik'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nomor_kk'] ?>
                                </td>
                                <td>
                                    <?php echo $row['tingkatan_pendidikan'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nama_pekerjaan'] ?>
                                </td>
                               
                                <td>
                                    <?php echo $row['jenis_kelamin'] ?>
                                </td>
                                <td>
                                    <?php echo $row['tempat_lahir'] ?>
                                </td>
                                <td>
                                    <?php echo $row['tanggal_lahir'] ?>
                                </td>
                                <td>
                                    <?php echo $row['status'] ?>
                                </td>
                                <td>
                                    <?php echo $row['RT'] ?>
                                </td>
                                <td>
                                    <!--memanggil halaman edit atau edit.php-->
                                    <a href="<?php echo site_url('Penduduk/edit/' . $row['nik']) ?>"
                                        title="tombol utk merubah data">
                                        <i class="fas fa-edit"></i></a> |
                                    <!--memanggil aksi delete-->
                                    <a href="<?php echo site_url('Penduduk/delete/' . $row['nik']) ?>" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo
                                             $row['nama']; ?>')">
                                        <i class="fas fa-trash-alt" style=" color: red; transition: color 0.3s;"
                                            onmouseover="this.style.color = 'darkred';"
                                            onmouseout="this.style.color = 'red';"></i></a>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<script>
    // Mengaktifkan DataTable pada dokumen
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
<style>
    .dataTables_paginate {
        cursor: pointer;
    }
</style>