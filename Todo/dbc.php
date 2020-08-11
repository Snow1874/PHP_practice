<?php
require_once('env.php');

function dbConnect() {
    $host = DB_HOST;
    $dbname = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

    try{
        $dbh = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
    } catch(PDOException $e){
        exit($e);
    }

    return $dbh;
}

function getTodo(){
    $dbh = dbConnect();
    $sql = 'SELECT * FROM Todo';
    $stmt = $dbh->query($sql);
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

?>