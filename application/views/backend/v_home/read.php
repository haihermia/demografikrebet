<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>portalci</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-top: 50px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        canvas {
            max-width: 600px;
            margin: 0 auto;
            width: 100%;
            height: auto;
        }


        .chart-card {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Diagram Penduduk Padukuhan Krebet</h2>
        <canvas id="myChart"></canvas>

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
        var ctx = document.getElementById('myChart').getContext('2d');
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

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card chart-card"
                    style="border-radius: 10px; transition: transform 0.3s;  background-color: rgba(255, 255, 255, 0.5);">
                    <div class="card-body chart-container" style="padding: 20px;">
                        <h2 class="card-title text-center">Diagram Pekerjaan</h2>
                        <canvas id="pekerjaanChart" style="width: 100%; height: 200px;"></canvas>
                    </div>
                </div>
            </div>

            <script>
                var pieData = {
                    labels: ['Buruh Harian Lepas', 'Karyawan Swasta', 'Wiraswasta', 'Buruh Tani/Perkebunan', 'Petani/Pekebun', 'IRT', 'Pelajar/Mahasiswa', 'Tidak Bekerja', 'Lainnya'],
                    datasets: [{
                        data: [<?= $pekerjaan1; ?>, <?= $pekerjaan2; ?>, <?= $pekerjaan3; ?>, <?= $pekerjaan4; ?>, <?= $pekerjaan5; ?>, <?= $pekerjaan6; ?>, <?= $pekerjaan7; ?>, <?= $pekerjaan10; ?>, <?= $pekerjaan11; ?>],
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

            <div class="col-md-6">
                <div class="card chart-card"
                    style="border-radius: 10px; transition: transform 0.3s;  background-color: rgba(255, 255, 255, 0.5);">
                    <div class="card-body chart-container" style="padding: 20px;">
                        <h2 class="card-title text-center">Diagram UMKM</h2>
                        <canvas id="umkmChart" style="width: 100%; height: 200px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

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


</body>

</html>