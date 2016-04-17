<?php
 
// get the HTTP method, path and body of the request
$method = $_SERVER['REQUEST_METHOD'];
 
// connect to the mysql database
$link = mysqli_connect('localhost', 'root', 'asd', 'webapi');
mysqli_set_charset($link,'utf8');
 
if ($method == 'GET') {
  $table = $_GET['table'];
  $key = $_GET['key'];
} elseif ($method == 'POST'){
    $table = $_POST['table'];
    $key = $_POST['key'];
}
 
// create SQL based on HTTP method
$sql = "select * from `$table`".($key?" WHERE id=$key":'');
 
// excecute SQL statement
$result = mysqli_query($link,$sql);
 
// die if SQL statement failed
if (!$result) {
  http_response_code(404);
  die(mysqli_error());
}

$returnJson = "";

for ($i=0;$i<mysqli_num_rows($result);$i++) {
    $returnJson = json_encode(mysqli_fetch_object($result));
}

header('Content-Type: application/json');
echo $returnJson;
 
// close mysql connection
mysqli_close($link);