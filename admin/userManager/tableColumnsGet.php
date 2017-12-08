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

unset($row);
unset($result);
//visszatérünk vele :)
//itt zajuk le a connection-t mert az exit utani nem hajtodik vegre
$dbh = NULL;
exit(json_encode($data));
//igy nem zarjuk le a PDO-t :D:D
//mysql_close($dbh);


?>