<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->




    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo site_url('Admin/create') ?>" class="btn btn-info mb-2">
                <i class="fas fa-plus"></i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Kode</td>
                            <td>Nama</td>
                            <td>Password</td>
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
                                    <?php echo $row['kd_admin'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nama_admin'] ?>
                                </td>
                                <td>
                                    <?php 
                                    $password = $row['pswd_admin'];
                                    $hpassword = password_hash($password, PASSWORD_BCRYPT);
                                    $truncatepassword = substr($password,0,10);
                                    echo $hpassword;
                                    ?>
                                </td>
                                <td>
                                    <!--memanggil halaman edit atau edit.php-->
                                    <a href="<?php echo site_url('Admin/edit/' . $row['kd_admin']) ?>"
                                        title="tombol utk merubah data">
                                        <i class="fas fa-edit"></i></a> |
                                    <!--memanggil aksi delete-->
                                    <a href="<?php echo site_url('Admin/delete/' . $row['kd_admin']) ?>" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo
                                             $row['nama_admin']; ?>')">
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