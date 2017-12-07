<?php
include "../../Database.inc.php";
	
$table_name= "laci";

$query = "SHOW COLUMNS FROM $table_name";

//resource mysqli_list_fields ( string $db , string $table_name [, resource $link_identifier = NULL ] );

$result=$dbh->query($query);
$data=array();
while($row = $result->fetch(PDO::FETCH_ASSOC)){
    $data[]=$row['Field'];
}
      
exit(json_encode($data));
mysql_close($dbh);


?>