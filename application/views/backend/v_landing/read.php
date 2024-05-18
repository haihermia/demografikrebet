

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card chart-card"
                    style="border-radius: 10px; transition: transform 0.3s;  background-color: rgba(255, 255, 255, 0.5);">
                    <div class="card-body chart-container" style="padding: 20px;">
                        <h2 class="card-title text-center">Diagram Pekerjaan</h2>
                        <canvas id="pekerjaanChart" style="width: 100%; height: 200px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card chart-card"
                    style="border-radius: 10px; transition: transform 0.3s;  background-color: rgba(255, 255, 255, 0.5);">
                    <div class="card-body chart-container" style="padding: 20px;">
                        <h2 class="card-title text-center">Diagram Penduduk</h2>
                        <canvas id="pendudukChart" style="width: 100%; height: 310px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card chart-card"
                    style="border-radius: 10px; transition: transform 0.3s;  background-color: rgba(255, 255, 255, 0.5);">
                    <div class="card-body chart-container" style="padding: 20px;">
                        <h2 class="card-title text-center">Diagram UMKM</h2>
                        <canvas id="umkmChart" style="width: 100%; height: 200px;"></canvas>
                        <a href="<?= site_url('landing/umkm'); ?>" class="btn btn-primary" style="margin-left: auto; margin-right: auto;">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Data untuk grafik batang
        var chartData = {
            labels: ['RT 1', 'RT 2', 'RT 3', 'RT 4', 'RT 5'],
            datasets: [{
                label: 'Laki-laki',
                backgroundColor: 'rgba(54, 162, 235, 1.0)',
                borderColor: 'rgba(255, 255, 255, 1)',
                borderWidth: 1,
                data: [<?= $rt1laki; ?>, <?= $rt2laki; ?>, <?= $rt3laki; ?>, <?= $rt4laki; ?>, <?= $rt5laki; ?>], // Data laki-laki per RT
            },
            {
                label: 'Perempuan',
                backgroundColor: 'rgba(255, 99, 132, 1.0)',
                borderColor: 'rgba(255, 255, 255, 1)',
                borderWidth: 1,
                data: [<?= $rt1perempuan; ?>, <?= $rt2perempuan; ?>, <?= $rt3perempuan; ?>, <?= $rt4perempuan; ?>, <?= $rt5perempuan; ?>], // Data perempuan per RT
            }]
        };

        // Membuat grafik batang
        var ctx = document.getElementById('pendudukChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>

    <script>
        var pieData = {
            labels: ['Buruh Harian Lepas', 'Karyawan Swasta', 'Wiraswasta', 'Buruh Tani/Perkebunan', 'Petani/Pekebun', 'IRT', 'Pelajar/Mahasiswa', 'Tidak Bekerja', 'Lainnya'],
            datasets: [{
                data: [<?= $pekerjaan1; ?>, <?= $pekerjaan2; ?>, <?= $pekerjaan3; ?>, <?= $pekerjaan4; ?>, <?= $pekerjaan5; ?>, <?= $pekerjaan6; ?>, <?= $pekerjaan7; ?>, <?= $pekerjaan10; ?>,<?= $pekerjaan11; ?>],
                backgroundColor: ['#36a2eb', '#ff6384', '#ffd700', '#32CD32', '#8A2BE2', '#FFA500', '#FF69B4', '#808080', '#40E0D0'],
                hoverBackgroundColor: ['#1e4273', '#99222e', '#664a00', '#255025', '#4b0082', '#804000', '#803b57', '#404040', '#1f7a77']
            }]
        };

        var ctx = document.getElementById('pekerjaanChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: pieData

        });
    </script>
    <script>
        var umkmData = {
            labels: ['Kuliner', 'Digital', 'Kreatif', 'Jasa', 'Fashion', 'Lainnya'],
            datasets: [{
                data: [<?= $umkm1; ?>, <?= $umkm2; ?>, <?= $umkm3; ?>, <?= $umkm4; ?>, <?= $umkm5; ?>, <?= $umkm6; ?>],
                backgroundColor: ['#36a2eb', '#ff6384', '#ffd700', '#00FF00', '#FFA500', '#B0E0E6'],
                hoverBackgroundColor: ['#1c4c80', '#990000', '#806600', '#006600', '#4b0082']
            }]
        };

        var ctx = document.getElementById('umkmChart').getContext('2d');
        var myumkmChart = new Chart(ctx, {
            type: 'pie',
            data: umkmData
        });
    </script>

   