<?php

$host = "localhost:3306";
$username = "root";
$password = "";
$dbname = "cybercrime";


// $pr = $_POST['prisoner_id'];
$court_id= $_POST['court_id'];
$col_name = $_POST['clm_name'];
$col_val=$_POST['clm_val'];

$conn = mysqli_connect($host,$username,$password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Updating the new row
$sql = "UPDATE court set $col_name='$col_val' where court_id='$court_id'"; 




if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    
} else {
    echo "Error". $sql . "<br>" . mysqli_error($conn);
};





mysqli_close($conn);




?>