<?php
$hostname = 'localhost';
$username = 'daluyiosa';
$password = 'g88w0g88w049hzm49hzm';
$database = 'daluyiosadb';


$connection = new mysqli($hostname, $username, $password, $database);
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
    </tr>
<?php


$query = "SELECT * FROM customersInformations";
$result = $connection->query($query);

if ($result->num_rows > 0) {


    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['message'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo 'No data found.';
}
?>
  </table>
</body>
</html>