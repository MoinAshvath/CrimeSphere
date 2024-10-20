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

$cr = $_POST['crime_id'];
$fir = $_POST['fir_id'];
$pr = $_POST['prisoner_id'];
$pr_n = $_POST['prisoner_name'];
$pr_ad = $_POST['prisoner_add'];
$cr_st = $_POST['crime_state'];
$cr_des= $_POST['crime_description'];

$conn = mysqli_connect($host,$username,$password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert the new row
$sql = "INSERT INTO pri (crime_id,fir_id,prisoner_id,prisoner_name,prisoner_add,crime_state,crime_description) VALUES ('$cr', '$fir', '$pr', '$pr_n', '$pr_ad', '$cr_st', '$cr_des')";




if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    
} else {
    echo "Error". $sql . "<br>" . mysqli_error($conn);
};

$query = "SELECT crime_id,fir_id,prisoner_id,prisoner_name,prisoner_add,crime_state,crime_description FROM pri";
$result = mysqli_query($conn, $query);

echo "<table>";
      echo "<tr>";
      echo "<th>crime_id</th>";
      echo "<th>fir_id</th>";
      echo "<th>prisoner_id</th>";
      echo "<th>prisoner_name</th>";
      echo "<th>prisoner_add</th>";
      echo "<th>crime_state</th>";
      echo "<th>crime_description</th>";



      echo "</tr>";
      while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['crime_id'] . "</td>";
          echo "<td>" . $row['fir_id'] . "</td>";
          echo "<td>" . $row['prisoner_id'] . "</td>";
          echo "<td>" . $row['prisoner_name'] . "</td>";
          echo "<td>" . $row['prisoner_add'] . "</td>";
          echo "<td>" . $row['crime_state'] . "</td>";
          echo "<td>" . $row['crime_description'] . "</td>";


          echo "</tr>";
      }
      echo "</table";





mysqli_close($conn);




?>