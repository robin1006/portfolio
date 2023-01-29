<?php
/**
 * Created by Abhishek Patel
 */
$weburl = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$weburl .= "://".$_SERVER['HTTP_HOST'];
$weburl .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
define('WEB_URL',$weburl.'');
define('WEB_PATH',$weburl.'theme/');
define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
define('FILE_UPLOAD_PATH',$_SERVER['DOCUMENT_ROOT'].'/theme/uploads/');
define('DB_HOSTNAME','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','Abhi@12345');
define('DB_DATABASE','cl_portfolio');
?>
