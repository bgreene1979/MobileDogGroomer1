<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "us-cdbr-azure-central-a.cloudapp.net";
$username = "b24e9b033208c7";
$password = "07884f4b";;
$dbname = "groomer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 / Pass appropriate SQL to the database
  $lname = $_POST["name"];
  $fname = $_POST["usr_name"];
  $email = $_POST["email"];
  
  $sql = "select name, usr_name, email from `clients`;

 $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // Output data of each row
   printf("\n\t<table><tr><th>%s</th><th>%s</th><th>%s</th>",
       "Name", "User Name", "Email";
    while ($row = $result->fetch_assoc()) {
    printf("<tr> <td>%s</td> <td>%s</td>
    <td><a href=mailto:%s>%s</a>
    </td> <td>%s</td></tr>",
         $row["FNAME"], $row["LNAME"], $row["EMAIL"], 
$conn->close();
?>
</body>
</html>
