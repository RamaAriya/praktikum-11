<?php
include('koneksi2.php');
$kasus = mysqli_query($koneksi, "select * from tb_covid2");
while($row = mysqli_fetch_array($kasus)){
    $nama_negara[] = $row['negara'];
    $jumlah_kasus[] = $row['jumlah_kasus'];
    $kasus_baru[] = $row['kasus_baru'];
    $total_kematian[] = $row['total_kematian'];
    $kematian_baru[] = $row['kematian_baru'];
    $total_kesembuhan[] = $row['total_kesembuhan'];
    $kesembuhan_baru[] = $row['kesembuhan_baru'];
}
?>

<!DOCTYPE html>
<head>
      <title>Membuat Grafik Menggunakan Chart JS</title>
      <script type="text/javascript" src="Chart.js"></script>
</head>
<body>
    <div style="width: 800px; height:800px">
        <canvas id="myChart"></canvas>
        <br><br>
        <canvas id="myChart1"></canvas>
        <br><br>
        <canvas id="myChart2"></canvas>
        <br><br>
        <canvas id="myChart3"></canvas>
        <br><br>
        <canvas id="myChart4"></canvas>
        <br><br>
        <canvas id="myChart5"></canvas>
        <br><br>
        <canvas id="myChart6"></canvas>
    </div>
    
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data:{
                labels: <?php echo json_encode($nama_negara);?>,
                datasets : [{
                    label : 'Total Kasus',
                    data: <?php echo json_encode($jumlah_kasus);?>,

                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor:'rgba(255, 99, 132,1)',
                    borderWidth : 1
                },
                {
                    label : 'Kasus Baru',
                    data: <?php echo json_encode($kasus_baru);?>,

                    backgroundColor: 'rgba(255, 228, 228, 1)',
                    borderColor:'rgba(255, 99, 132,1)',
                    borderWidth : 1
                },
                {
                    label : 'Total Kematian',
                    data: <?php echo json_encode($total_kematian);?>,

                    backgroundColor: 'rgba(231, 76, 60, 1)',
                    borderColor:'rgba(231, 76, 60, 1)',
                    borderWidth : 1
                },
                {
                    label : 'Kematian Baru',
                    data: <?php echo json_encode($kematian_baru);?>,

                    backgroundColor: 'rgba(231, 76, 60, 1)',
                    borderColor:'rgba(236, 100, 75, 1)',
                    borderWidth : 1
                },
                {
                    label : 'Total Kesembuhan',
                    data: <?php echo json_encode($total_kesembuhan);?>,

                    backgroundColor: 'rgba(200, 247, 197, 1)',
                    borderColor:'rgba(46, 204, 113, 1)',
                    borderWidth : 1
                },
                {
                    label : 'Kesembuhan Baru',
                    data: <?php echo json_encode($kesembuhan_baru);?>,

                    backgroundColor: 'rgba(147, 250, 165, 1)',
                    borderColor:'rgba(46, 204, 113, 1)',
                    borderWidth : 1
                }
                ]
            },
            options: {
                scales:{
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
        
        var ctx = document.getElementById("myChart1").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data:{
                labels: <?php echo json_encode($nama_negara);?>,
                datasets : [{
                    label : 'Total Kasus',
                    data: <?php echo json_encode($jumlah_kasus);?>,

                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor:'rgba(255, 99, 132,1)',
                    borderWidth : 1
                }
                ]
            },
            options: {
                scales:{
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("myChart2").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data:{
                labels: <?php echo json_encode($nama_negara);?>,
                datasets : [{
                    label : 'Kasus Baru',
                    data: <?php echo json_encode($kasus_baru);?>,

                    backgroundColor: 'rgba(255, 228, 228, 1)',
                    borderColor:'rgba(255, 99, 132,1)',
                    borderWidth : 1
                }
                ]
            },
            options: {
                scales:{
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("myChart3").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data:{
                labels: <?php echo json_encode($nama_negara);?>,
                datasets : [{
                    label : 'Total Kematian',
                    data: <?php echo json_encode($total_kematian);?>,

                    backgroundColor: 'rgba(231, 76, 60, 1)',
                    borderColor:'rgba(231, 76, 60, 1)',
                    borderWidth : 1
                }
                ]
            },
            options: {
                scales:{
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("myChart4").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data:{
                labels: <?php echo json_encode($nama_negara);?>,
                datasets : [{
                    label : 'Kematian Baru',
                    data: <?php echo json_encode($kematian_baru);?>,

                    backgroundColor: 'rgba(231, 76, 60, 1)',
                    borderColor:'rgba(236, 100, 75, 1)',
                    borderWidth : 1
                }
                ]
            },
            options: {
                scales:{
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("myChart5").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data:{
                labels: <?php echo json_encode($nama_negara);?>,
                datasets : [{
                    label : 'Total Kesembuhan',
                    data: <?php echo json_encode($total_kesembuhan);?>,

                    backgroundColor: 'rgba(200, 247, 197, 1)',
                    borderColor:'rgba(46, 204, 113, 1)',
                    borderWidth : 1
                }
                ]
            },
            options: {
                scales:{
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("myChart6").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data:{
                labels: <?php echo json_encode($nama_negara);?>,
                datasets : [{
                    label : 'Kesembuhan Baru',
                    data: <?php echo json_encode($kesembuhan_baru);?>,

                    backgroundColor: 'rgba(147, 250, 165, 1)',
                    borderColor:'rgba(46, 204, 113, 1)',
                    borderWidth : 1
                }
                ]
            },
            options: {
                scales:{
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>