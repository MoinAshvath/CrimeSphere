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

$c_id = $_POST['court_id'];
$court_n= $_POST['court_name'];
$court_p= $_POST['court_place'];

$conn = mysqli_connect($host,$username,$password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert the new row
$sql = "INSERT INTO court (court_id,court_name,court_place) VALUES ('$c_id', '$court_n', '$court_p')";




if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    
} else {
    echo "Error". $sql . "<br>" . mysqli_error($conn);
};

$query = "SELECT court_id,court_name,court_place FROM court";
$result = mysqli_query($conn, $query);

echo "<table>";
      echo "<tr>";
      echo "<th>court_id</th>";
      echo "<th>court_name</th>";
      echo "<th>court_place</th>";

      echo "</tr>";
      while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['court_id'] . "</td>";
          echo "<td>" . $row['court_name'] . "</td>";
          echo "<td>" . $row['court_place'] . "</td>";
        
          echo "</tr>";
      }
      echo "</table";





mysqli_close($conn);




?>