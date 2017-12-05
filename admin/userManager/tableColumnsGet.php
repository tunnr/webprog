<?php
include "../connectdb.php";

$table_name=$_SESSION['Table'];

$query = "SHOW COLUMNS FROM '$table_name'";

$result=$db->query($query); 
$data=array();
while($row = $result->fetch(PDO::FETCH_ASSOC)){
    $data[]=$row;
}
      
exit(json_encode($data));
mysql_close($db);


?>