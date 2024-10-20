<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <title>Document</title>

</head>

<body>

 

<?php

  $con = new mysqli('localhost:3306','root','','cybercrime');


$query = "SELECT crime_description,count(crime_description) as c FROM pri group by crime_description";

$result = mysqli_query($con, $query);

 

  foreach($result as $data)

  {

    $crime_type[] = $data['crime_description'];

    $count_crime[] = $data['c'];

  }

 

?>




<div style="width: 500px;">

  <canvas id="myChart"></canvas>

</div>

 

<script>

  // === include 'setup' then 'config' above ===

  const labels = <?php echo json_encode($crime_type) ?>;

  const data = {

    labels: labels,

    datasets: [{

      label: 'PRISONER ANALYSIS',

      data: <?php echo json_encode($count_crime) ?>,

      backgroundColor: [

        'rgba(255, 99, 132, 1)',

        'rgba(255, 159, 64, 4)',

        'rgba(255, 205, 86, 3)',

        'rgba(75, 192, 192, 8)',

        'rgba(54, 162, 235, 11)',

        'rgba(153, 102, 255, 17)',

        'rgba(201, 203, 207, 21)'

      ],

      borderColor: [

        'rgb(255, 99, 132)',

        'rgb(255, 159, 64)',

        'rgb(255, 205, 86)',

        'rgb(75, 192, 192)',

        'rgb(54, 162, 235)',

        'rgb(153, 102, 255)',

        'rgb(201, 203, 207)'

      ],

      borderWidth: 1

    }]

  };

 

  const config = {

    type: 'bar',

    data: data,

    options: {

      scales: {

        y: {
            axis: 'y',
            beginAtZero: true,

        }

      }

    },

  };

 

  var myChart = new Chart(

    document.getElementById('myChart'),

    config

  );

</script>

 

</body>

</html>