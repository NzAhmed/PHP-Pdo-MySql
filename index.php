<?php
    /*
    1- C:\xampp\mysql\bin>mysql -uroot
    2- MariaDB [(none)]> create database shopping;
    3- MariaDB [shopping]> create table products(id int primary key auto_increment,name varchar(50));

    4- [php path]\bin>php index.php
    */

    $pdo = new PDO("mysql:host=localhost;dbname=shopping","root","");

    $stmt = $pdo->prepare("INSERT INTO Products(Name) VALUES ('Toyota')");
    $stmt->execute();

    $stmt = $pdo->prepare("SELECT * FROM Products");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($data as $key => $value) {
        echo $value->name . "\n";
    }
?>