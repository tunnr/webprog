<?php
/**
 * Created by PhpStorm.
 * User: Bence
 * Date: 2017. 11. 24.
 * Time: 18:42
 */

session_start();
require_once('Database.inc.php');
ini_set('display_errors', 'Off');
error_reporting(0);
DEFINE("regex_name","/^[A-ZÖÜÓŐÚŰÁÉÍa-zöüóőúéáűí]+(((\'|\-|\.)?([A-ZÖÜÓŐÚŰÁÉÍa-zöüóőúéáűí])+))?$/");

$_SESSIONE['uname'] = NULL;
$_SESSIONE['logged'] = FALSE;
$_SESSIONE['rank'] = NULL;
if(is_null($dbh)) exit(json_encode('Error'));
if(is_null($_SESSION['uname']) && $_SESSIONE['logged'] === FALSE && !is_numeric($_SESSIONE['rank']) && is_null($_SESSIONE['rank'])){
    if(isset($_POST['psw']) && !is_null($_POST['psw']) && strlen(trim($_POST['psw'])) > 0 && isset($_POST['uname']) && !is_null($_POST['uname']) && strlen(trim($_POST['uname'])) > 0 && preg_match(regex_name,$_POST['uname'])){

        $sql= 'SELECT Username
                    FROM superusers
                    WHERE Username = :username';

        $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':username' => $_POST['uname']));

        if($sth->rowCount() > 0){


            $sql= 'SELECT Username, Password, Rank
                    FROM superusers
                    WHERE Username = :username';

            $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute(array(':username' => $_POST['uname']));

            $result = $sth->fetch(PDO::FETCH_ASSOC);

            if($sth->rowCount() > 0 && password_verify($_POST["psw"], $result["Password"])){
                $_SESSIONE['uname'] = $result['Username'];
                $_SESSIONE['rank'] = $result['Rank'];
                $_SESSIONE['logged'] = TRUE;
                exit(json_encode('Siker'));
                //header("refresh:1;url=IDE AZ A CÍM AHOVE SIKERES BEJELENTKEZÉSNÉL ÁT KELL IRÁNYITANI");
            }else{
                unset($result);
                $dbh = NULL;
                exit(json_encode(array('uzenet' => 'Please check your Username and Password!', 'code' => 04)));
            }
        }else{
            $dbh = NULL;
            exit(json_encode(array('uzenet' => 'Please check your Username and Password!', 'code' => 03)));
        }
    }else{
        $dbh = NULL;
        exit(json_encode(array('uzenet' => 'Please check your Username and Password!', 'code' => 02)));
    }
}else{
    $dbh = NULL;
    exit(json_encode(array('uzenet' => 'Please check your Username and Password!', 'code' => 01)));
    //header("refresh:1;url=weblap login címe ide");
}