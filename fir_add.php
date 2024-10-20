<style>


table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 

table td, #table th {
  border: 1px solid #ddd;
  padding: 8px;
 
}

 

table tr:nth-child(even){background-color: #f2f2f2;}

 

table tr:hover {background-color: #ddd;}

 

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>

<?php

$host = "localhost:3306";
$username = "root";
$password = "";
$dbname = "cybercrime";

$fir = $_POST['fir_id'];
$fir_n= $_POST['fir_name'];
$court= $_POST['court_id'];

$conn = mysqli_connect($host,$username,$password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert the new row
$sql = "INSERT INTO fir (fir_id,fir_name,court_id) VALUES ('$fir', '$fir_n', '$court')";




if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    
} else {
    echo "Error". $sql . "<br>" . mysqli_error($conn);
};

$query = "SELECT fir_id,fir_name,court_id FROM fir";
$result = mysqli_query($conn, $query);

echo "<table>";
      echo "<tr>";
      echo "<th>fir_id</th>";
      echo "<th>fir_name</th>";
      echo "<th>court_id</th>";

      echo "</tr>";
      while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['fir_id'] . "</td>";
          echo "<td>" . $row['fir_name'] . "</td>";
          echo "<td>" . $row['court_id'] . "</td>";
        
          echo "</tr>";
      }
      echo "</table";





mysqli_close($conn);




?>