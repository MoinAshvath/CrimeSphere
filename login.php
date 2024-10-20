<?php

    /*$username = $_POST['username'];
    $password = $_POST['password'];

    $bridge = new mysqli('localhost','root','','cybercrime','3306');

    if($bridge -> connect_error){
        die('Connection Failed : '.$bridge->connect_error);
    }
     
    else{
        $stmt = $bridge->prepare("insert into signin values($username,$password)");
        $stmt -> execute();
        $stmt -> close();
        $bridge->close(); 
    }*/

// Connect to the database
$host = "localhost:3306";
$username = "root";
$password = "";
$dbname = "cybercrime";
$u = $_POST['username'];
$p = $_POST['password'];

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert the new row
$sql = "INSERT INTO signin (username, password) VALUES ('$u', '$p')";

if (mysqli_query($conn, $sql)) {
    header("Location:http://localhost/dbms/data_page.html");
    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);


?>