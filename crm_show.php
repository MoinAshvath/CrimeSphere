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

.button-73 {
  appearance: none;
  background-color: #FFFFFF;
  border-radius: 40em;
  border-style: none;
  box-shadow: #ADCFFF 0 -12px 6px inset;
  box-sizing: border-box;
  color: #000000;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,sans-serif;
  font-size: 1.2rem;
  font-weight: 700;
  letter-spacing: -.24px;
  margin: 0;
  outline: none;
  padding: 1rem 1.3rem;
  quotes: auto;
  text-align: center;
  text-decoration: none;
  transition: all .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-73:hover {
  background-color: #FFC229;
  box-shadow: #FF6314 0 -6px 8px inset;
  transform: scale(1.125);
}

.button-73:active {
  transform: scale(1.025);
}

@media (min-width: 768px) {
  .button-73 {
    font-size: 1.5rem;
    padding: .75rem 2rem;
  }
}

</style>


<?php

$host = "localhost:3306";
$username = "root";
$password = "";
$dbname = "cybercrime";



$conn = mysqli_connect($host,$username,$password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert the new row

$query = "SELECT crm_id,crm_place,crm_desc FROM crime";
$result = mysqli_query($conn, $query);

echo "<table>";
      echo "<tr>";
      echo "<th>crime_id</th>";
      echo "<th>crime_place</th>";
      echo "<th>crime_description</th>";

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


<body>

<br>

<button class="button-73" onclick="location.href='crm_add.html'"> ADD</button><br><br>

<button class="button-73" onclick="location.href='crm_del.html'">DELETE</button><br><br>  

<button class="button-73" onclick="location.href='crm_upd.html'">UPDATE</button>

      
</body>