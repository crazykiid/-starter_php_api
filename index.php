<?php
echo "<style>";
?>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
<?php 
echo "</style>";

echo "<h1>OVERVIEW</h1><br><br>";

echo "<table>";

echo "<tr>";
echo "<th>Endpoint</th>";
echo "<th>Request Type</th>";
echo "<th>Parameters</th>";
echo "<th>Action</th>";
echo "</tr>";

echo "<tr>";
echo "<td>~/v1/get/view.php</td>";
echo "<td>GET</td>";
echo "<td>&lt;q&gt;</td>";
echo "<td><a href='get/view.php?q=welcome' target='_blank'>view</a></td>";
echo "</tr>";

echo "</table>";
?>