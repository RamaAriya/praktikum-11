<?php
include('koneksi2.php');
$produk = mysqli_query($koneksi, "select * from tb_covid2");
while($row = mysqli_fetch_array($produk)){
    $nama_negara[] = $row['negara'];
    $jumlah_kasus[] = $row['jumlah_kasus'];
}
?>

<!DOCTYPE html>
<head>
      <title>Membuat Grafik Menggunakan Chart JS</title>
      <script type="text/javascript" src="Chart.js"></script>
</head>
<body>
    <div style="width: 800px; height:800px">
        <canvas id="chart-area"></canvas>
    </div>
    
    <script>
        var config = {
            type:'doughnut',
            data:{
                datasets : [{
                    data : <?php echo json_encode($jumlah_kasus);?>,

                    backgroundColor: [
                        "rgba(147, 250, 165, 1)", 
                        "rgba(251, 231, 239, 1)", 
                        "rgba(56, 31, 209, 1)", 
                        "rgba(255, 148, 112, 1)", 
                        "rgba(210, 194, 209, 1)", 
                        "rgba(183, 193, 172, 1)", 
                        "rgba(234, 255, 253, 1)", 
                        "rgba(216, 250, 8, 1)", 
                        "rgba(20, 205, 200, 1)", 
                        "rgba(255, 255, 159, 1)"
                    ],
                    
                    label : 'Presentase COVID'
                }],
                labels:<?php echo json_encode($nama_negara); ?>
                },
            options : {
                responsive : true
            }
        };

    window.onload = function(){
        var ctx = document.getElementById('chart-area').getContext('2d');
        window.myPie = new Chart(ctx, config);
    };

    document.getElementById('randomizeData').addEventListener('click', 
    function(){
        config.data.datasets.forEach(function(dataset){
            dataset.data = dataset.data.map(function(){
                return randomScalingFactor();
            });
        });

        window.myPie.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function(){
        var newDataset = {
            backgroundColor: [],
            data : [],
            label: 'New dataset' + config.data.datasets.length,
        };

        for(var index = 0; index < config.data.labels.length;
        ++index){
            newDataset.data.push(randomScalingFactor());

            var colorName = colorNames[index % colorNames.length];
            var newColor = window.chartColors[colorName];
            newDataset.backgroundColor.push(newColor);
        }

        config.data.datasets.push(newDataset);
        window.myPie.update();
        });

        document.getElementById('removeDataset').addEventListener('click', function(){
            config.data.datasets.splice(0, 1);
            window.myPie.update();
        });
    </script>
</body>
</html>