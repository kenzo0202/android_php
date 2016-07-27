<?php
/**
 * Created by PhpStorm.
 * User: kenzo
 * Date: 2016/07/16
 * Time: 19:12
 */
error_reporting(-1);
ini_set('display_errors', 'On');

$status = 0;

if(strtoupper($_SERVER["REQUEST_METHOD"] == "POST")){
    $id = $_POST["sns_user_id"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    //接続します
    $pdo=new PDO('mysql:host=mysql113.phy.lolipop.lan;dbname=LAA0710186-sample;charset=utf8;', 'LAA0710186', 'kenrad22');
    $stmt = $pdo->prepare("INSERT INTO android_user_table (name,email) VALUES(:name,:email)");
    $stmt->bindValue(':name',$name,PDO::PARAM_STR);
    $stmt->bindValue(':email',$email,PDO::PARAM_STR);
    $sql= $stmt->execute();

    $status = 1;

    $response = array();
    $response["status"] = $status;
    $response["sql"] = $sql;

    echo json_encode($response);
}
