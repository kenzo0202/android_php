<?php
/**
 * Created by PhpStorm.
 * User: kenzo
 * Date: 2016/07/27
 * Time: 22:02
 */

$LOG_FILE = dirname(__FILE__)."/hook.log";
$SECRET_KEY = 'kenzo0202';

if(isset($SECRET_KEY) && $_GET["key"] === $SECRET_KEY && isset($_POST['payload'])){
    $pay_load = json_encode($_POST['payload'],true);
    if($pay_load["ref"]==='ref/heads/master'){
        
    }
}