<?php

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$sql = "SELECT SurikatuID, Surikata_dzive FROM dzivnieki";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "SurikatuID: " . $row["SurikatuID"]. " - Surikata_dzive: " . $row["Surikata_dzive"]. "<br>";
  }
} else {
  echo "0 results";
}


?>