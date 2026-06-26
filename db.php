<?php
$mttextline1="Server Connected to : HAZYARROW.CLOUD Server, MSQL Version: ";
$uri = "";

$fields = parse_url($uri);

// build the DSN including SSL settings
$db = "mysql:";
$db .= "host=" . $fields["host"];
$db .= ";port=" . $fields["port"];;
$db .= ";dbname=defaultdb";
$db .= ";sslmode=verify-ca;sslrootcert=ca.pem";

try {
  $conn = new PDO($db, $fields["user"], $fields["pass"]);

  $stmt = $conn->query("SELECT VERSION()");
  print($mttextline1);
  print($stmt->fetch()[0]);
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}



//$servername = "hazyarrow-projectdb-hazyarrowproject-7f15.d.aivencloud.com";
//$username = "avnadmin";  // Update with your MySQL username
//$password = "AVNS_GgGJzIBZOrG9AS7rvvb";      // Update with your MySQL password
//$dbname = "defaultdb";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
?>
