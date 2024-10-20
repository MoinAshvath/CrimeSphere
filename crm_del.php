<!-- <style>


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

</style> -->






<?php

$host = "localhost:3306";
$username = "root";
$password = "";
$dbname = "cybercrime";


$crm = $_POST['crm_id'];


$conn = mysqli_connect($host,$username,$password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Deleting row
$sql = "DELETE FROM crime WHERE crm_id = '$crm'"; 


if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    
} else {
    echo "Error". $sql . "<br>" . mysqli_error($conn);
};








?>