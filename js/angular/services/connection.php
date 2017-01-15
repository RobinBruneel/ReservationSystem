<?php

$db = mysqli_connect('localhost', 'root', 'root', 'reservationsystem')
        or die('Error connecting to MySQL server.');

$query = "SELECT * FROM tbl_reservation";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

echo json_encode($result);

mysqli_close($db);

/*
while ($row = mysqli_fetch_array($result)) {
    echo $row['ID'] . ' Uur: ' . $row['Hour'] . ' Datum: ' . $row['Date'] . '<br/>';
}
echo '<br/>'
 * 
 */


/*
  $host = "localhost";
  $user = "root";
  $pass = "root";
  $database = "reservationsystem";
  $con = mysql_connect($host,$user,$pass);
  if (!$con) {
  die('Could not connect: ' . mysql_error());
  }
  echo 'Connected successfully';
  mysql_select_db($database,$con);
  //select
  $query = "SELECT * FROM `tbl_reservation`";
  $result = mysql_query($query) OR die(mysql_error());
  $arr = array();
  //now we turn the results into an array and loop through them.
  while ($row = mysql_fetch_array($result)) {
  $name = $row['ID'];
  $description = $row['Hour'];
  //echo 'This is: ' . $name . ' ' . $description . "<br/>\n"
  $arr[] = array('name' => $name, 'description' => $description);
  }
  echo json_encode($arr);
 * */
?>