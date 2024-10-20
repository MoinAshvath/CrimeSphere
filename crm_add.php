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

$c_id = $_POST['crm_id'];
$court_n= $_POST['crm_place'];
$court_p= $_POST['crm_desc'];

$conn = mysqli_connect($host,$username,$password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert the new row
$sql = "INSERT INTO crime (crm_id,crm_place,crm_desc) VALUES ('$c_id', '$court_n', '$court_p')";




if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    
} else {
    echo "Error". $sql . "<br>" . mysqli_error($conn);
};

$query = "SELECT crm_id,crm_place,crm_desc FROM crime";
$result = mysqli_query($conn, $query);

echo "<table>";
      echo "<tr>";
      echo "<th>crm_id</th>";
      echo "<th>crm_place</th>";
      echo "<th>crm_desc</th>";

      echo "</tr>";
      while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['crm_id'] . "</td>";
          echo "<td>" . $row['crm_place'] . "</td>";
          echo "<td>" . $row['crm_desc'] . "</td>";
        
          echo "</tr>";
      }
      echo "</table";





mysqli_close($conn);




?>