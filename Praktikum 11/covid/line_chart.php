<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="container mt-4">
            <nav class="navbar navbar-light bg-light mb-4">
                <span class="navbar-brand mb-0 h1"> Grafik Corona</span>
            </nav>
      
            <!-- diagram garis akan kita tampilkan disini -->
            <canvas id="myChart2"></canvas>
                        
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
        <script>
            //mebuat chart
            var myChart2 = new Chart(
                //masukan chart ke element canvas dengan id myChart2
                document.getElementById('myChart2'),
                {
                    //tipe chart yg digunakan adalah line chart atau diagram garis
                    type: 'line',
                    data: {
                        //data labels akan diganti dengan data api pada step berikutnya
                        labels: [
                            "India",
                            "Korsel",
                            "Turkey",
                            "Vietnam",
                            "Japan",
                            "Iran",
                            "Indonesia",
                            "Malaysia",
                            "Thailand",
                            "Israel",
                        ],
                        datasets: [{
                            label: 'Jumlah Kasus Corona',
                            //data akan diganti dengan data api pada step berikutnya
                            data: [
                                43185049,18168708,15072747,10726045,8945784,7232790,6057142,4516319,4468955,4154566
                            ],
                            //line akan diwarnai dengan warna merah
                            backgroundColor: [
                            'rgb(255, 99, 132)',
                            ],
                            hoverOffset: 4
                        }]
                    }
                }
            );
        </script>
    </body>
    
    </html>