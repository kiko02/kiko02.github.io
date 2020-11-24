<?php
//finding specific data in the database

	$host = "localhost";													//begining to connecting to the database
	$username = "root";
	$usb_pass = "usbw";
	$database_in_use = "buvvalde";

	$mysqli = new mysqli($host, $username, $usb_pass, $database_in_use);	//end of connceting to database
	$mysqli->set_charset("utf8");	
echo"<h2>Rezultāti</h2>";											//header
$keywordfromfrom =$_POST['keyword'];
$keywordfromfrom =$_REQUEST['keyword'];
$sql = "SELECT Objekta_adrese, Objekts, Atbildīgais_projektētājs FROM table_2 WHERE Objekta_adrese LIKE '%".$keywordfromfrom."%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Adrese: " . $row["Objekta_adrese"]. "<br>";
	echo "Objekts: " . $row["Objekts"]. "<br>";
	echo "Atbildīgias projektētājs: " . $row["Atbildīgais_projektētājs"]. "<br>";
  }
} else {
  echo "Nav rezultātu";
}

$mysqli->close();
?>