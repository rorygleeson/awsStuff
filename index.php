<?php
$servername = "mydatabase.xxxxxxxxxxxx.xx-xxxxxxx-x.rds.amazonaws.com";
$username = "xxxxxxx";
$password = "xxxxxxx";
$dbname = "CustomerOrders";


echo "MY APP";
echo "<br>";echo "<br>"; 
echo "Hostname is";
echo gethostname();echo "<br>";echo "<br>";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


echo "Read a few entries from the RDS database"; echo "<br>";echo "<br>";
// Read the database

$sql = "SELECT idNumber, Amount FROM CustomerOrderDetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Id Number = "; echo $row["idNumber"]; echo "<br>";
    echo "Amount = "; echo $row["Amount"]; echo "<br>"; echo "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();


?>
