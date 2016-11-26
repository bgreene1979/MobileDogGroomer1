<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Inisope Employee Directory</title>
  <Style> 
table,th,td {border:1px solid black;
border-collapse: collapse;}
th, td {padding: 5px}
</Style>
</head>
<body>
 <?php
$servername = "us-cdbr-azure-central-a.cloudapp.net";
$username = "b24e9b033208c7";
$password = "07884f4b";
$dbname = "groomer";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  

  $name = $_POST["NAME"];
  $usr_name = $_POST["USR_NAME"];
  $email = $_POST["EMAIL"];
  
  $sql = "SELECT `NAME`, `USR_NAME`, `EMAIL` FROM `clients` WHERE `USR_NAME` like $usr_name";

 $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // Output data of each row
   printf("\n\t<table><tr><th>%s</th><th>%s</th><th>%s</th>",
       "Name", "User Name", "Email");
    while ($row = $result->fetch_assoc()) {
    printf("<tr> <td>%s</td> <td>%s</td><td>%s</td></tr>",
         $row["NAME"], $row["USR_NAME"], $row["EMAIL"]); 

  }
          // printf("%s, %s<br>", $row["LNAME"], $row["FNAME"]);
echo "</table>\n";
   
  } else {
   echo "0 results <br>";
  }
$conn->close();
?>
</body>
</html>