<?php
    $options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

try{
    $connection = new PDO("mysql:host=127.0.0.1:3300;dbname=store", "root","", $options);
}catch (PDOException $i){
    die("Error to connect database");
}

function checkError($query){
    $errInfo = $query->errorInfo();
    if($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return true;
}


function selectAll($table){
    global $connection;
    $sql = "select * from $table";
    $query = $connection->prepare($sql);
    $query->execute();

    checkError($query);

    $date = $query->fetchAll();
    return $date;
}

function joinTables(){
    global $connection;
    $sql = "SELECT * FROM productlist inner JOIN backet
    ON (productlist.id = backet.product_id)";

    $query = $connection->prepare($sql);
    $query->execute();

    checkError($query);

    $date = $query->fetchAll();
    return $date;
}




