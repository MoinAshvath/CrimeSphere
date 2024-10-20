<html>
<head>
<title>States Table</title>
<style>

table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 
 td,  th {
  border: 1px solid #ddd;
  padding: 8px;
}

 

tr:nth-child(even){background-color: #f2f2f2;}

 

tr:hover {background-color: #ddd;}

 

qth {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>
</head>
<body>
<?php
      // Connect to the database
      $db = mysqli_connect('localhost', 'root', '', 'cybercrime');

 

      // Query the database for all states
      $query = "SELECT username,password FROM signin";
      $result = mysqli_query($db, $query);

 

      // Iterate over the results and create a table row for each
      echo "<table>";
      echo "<tr>";
      echo "<th>Username</th>";
      echo "<th>Password</th>";
      echo "</tr>";
      while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['username'] . "</td>";
          echo "<td>" . $row['password'] . "</td>";
          echo "</tr>";
      }
      echo "</table>";

 

      // Close the database connection
      mysqli_close($db);
?>
</body>
</html>