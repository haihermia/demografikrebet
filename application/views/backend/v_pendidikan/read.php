<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->




    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo site_url('Pendidikan/create') ?>" class="btn btn-info mb-2">
                <i class="fas fa-plus"></i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Id Pendidikan</td>
                            <td>Tingkatan Pendidikan</td>
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
                                    <?php echo $row['id_pendidikan'] ?>
                                </td>
                                <td>
                                    <?php echo $row['tingkatan_pendidikan'] ?>
                                </td>
                                <td>
                                    <!--memanggil halaman edit atau edit.php-->
                                    <a href="<?php echo site_url('Pendidikan/edit/' . $row['id_pendidikan']) ?>"
                                        title="tombol utk merubah data">
                                        <i class="fas fa-edit"></i></a> |
                                    <!--memanggil aksi delete-->
                                    <a href="<?php echo site_url('Pendidikan/delete/' . $row['id_pendidikan']) ?>" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo
                                             $row['tingkatan_pendidikan']; ?>')">
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