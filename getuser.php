<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"project_hub");
$sql="SELECT * FROM project_form WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>

<th>projecttitle</th>
<th>supervisor</th>
<th>student1</th>
<th>student2</th>
<th>student3</th>
<th>student4</th>
<th>batch</th>
<th>year</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['projecttitle'] . "</td>";
  echo "<td>" . $row['supervisor'] . "</td>";
  echo "<td>" . $row['student1'] . "</td>";
  echo "<td>" . $row['student2'] . "</td>";
  echo "<td>" . $row['student3'] . "</td>";
  echo "<td>" . $row['student4'] . "</td>";
  echo "<td>" . $row['year'] . "</td>";
  echo "<td>" . $row['batch'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>