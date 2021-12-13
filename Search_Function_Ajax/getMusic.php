<?php

//$q = intval($_GET['q']);
$q = ($_GET['q']);
$sign = "%";

$servername = "localhost:din port";
$username = "root";
$password = "";
$dbname = "namn på din db";

$con = mysqli_connect($servername,$username,$password,$dbname);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"198526-arnauddb");
//$sql="SELECT * FROM users WHERE id = '".$q."'";WHERE uidUsers LIKE '"%" + ".$q."'"
//$sql="SELECT uidUsers, emailUsers FROM users";
$sql="SELECT yyuidUsers, emailUsers FROM users WHERE uidUsers LIKE '".$q.$sign."'";
echo $sql;
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>uidUsers</th>
<th>emailUsers</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['uidUsers'] . "</td>";
  echo "<td>" . $row['emailUsers'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);

?>
