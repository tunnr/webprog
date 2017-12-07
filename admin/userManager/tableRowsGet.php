<?php
include "../../Database.inc.php";

$table_name= "laci";

$input=json_decode(file_get_contents("php://input"));

$data=array();
//addig megyünk míg a bejövő inputban vannak adatok ( ezek az adatok az oszlopok nevei )
for ($i = 0; $i < count($input); $i++) {

    $rows=$input[$i];
    //lekérjük oszloponként az adatokat
    $query = "SELECT $rows FROM $table_name";

    $result=$dbh->query($query);

    //berakjuk őket egy arraybe :D
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        $data[]=$row;
    }
}
//visszatérünk vele :)
exit(json_encode($data));
mysql_close($dbh);


?>