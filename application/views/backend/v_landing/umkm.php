<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->




    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    
        <div class="card-body">
            <div class="card-columns">
                <?php foreach ($read->result_array() as $row) { ?>
                    <div class="card">
                        <img src="<?php echo base_url('assets/img_umkm/' . $row ['img_umkm']) ?>" class="card-img-top" alt="Foto UMKM">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $row['nama']; ?>
                            </h5>
                            <p class="card-text"><strong>ID UMKM:</strong>
                                <?php echo $row['id_umkm']; ?>
                            </p>
                            <p class="card-text"><strong>Lokasi:</strong>
                                <?php echo $row['lokasi']; ?>
                            </p>
                            <p class="card-text"><strong>Kategori:</strong>
                                <?php echo $row['kategori']; ?>
                            </p>
                            <p class="card-text"><strong>Maps:</strong>
                                <?php echo $row['maps']; ?>
                            </p>
                        

                        </div>
                    </div>
                <?php } ?>
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