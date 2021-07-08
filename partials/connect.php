<?
$host = "localhost";
$user = "root";
$password = "";
$dbname = "ecolife";
$connect = mysqli_connect($host, $user, $password, $dbname);
if($connect->mysqli_error){
    echo"No connection";
}else{
    echo"good to go";
}