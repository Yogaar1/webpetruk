<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'petruk';

$conn = mysqli_connect($hostname, $username, $password, $database);

$query = "select * from pengaduan";
$tampil = mysqli_query($conn,$query);
$rows = array();
while($result = mysqli_fetch_array($tampil))
{

    $rows[] = $result;
}

echo json_encode($rows);
?>