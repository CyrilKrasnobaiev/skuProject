<?php
require_once 'connect.php';


$name = isset($_POST['name_text']);
$variant = isset($_POST['select_variant']);
$box = isset($_POST['checkbox_name']) ? 1:0;

mysql_query('SET NAMES cp1251;');
switch($variant){
    case "number":
        $result = mysql_query("CREATE TABLE sku_card ($name INT(10) NOT NULL)");
        break;
    case "digit":
        $result = mysql_query("CREATE TABLE sku_card ($name FLOAT(10) NOT NULL)");
        break;
    case "int_digit":
        $result = mysql_query("CREATE TABLE sku_card ($name FLOAT(10) NOT NULL)");
        break;
    case "text":
        $result = mysql_query("CREATE TABLE sku_card ($name CHAR NOT NULL)");
        break;
    case "date":
        $result = mysql_query("CREATE TABLE sku_card ($name DATE NOT NULL)");
        break;
    case "time":
        $result = mysql_query("CREATE TABLE sku_card ($name TIME NOT NULL)");
        break;
    case "checkbox1":
        $result = mysql_query("CREATE TABLE sku_card ($name BIT NOT NULL)");//найти тип данных дл€ чекбокс в MySql
        break;
    case "status":
        $result = mysql_query("CREATE TABLE sku_card ($name BIT NOT NULL)");//найти тип данных дл€ чекбокс в MySql
        break;
    case "list":
        $result = mysql_query("CREATE TABLE sku_card ($name TIME NOT NULL)");
        break;
    case "photo":
        $result = mysql_query("CREATE TABLE sku_card ($name NOT NULL)");//тип данных дл€ фото
        break;
    case "user":
        $result = mysql_query("CREATE TABLE sku_card ($name TIME NOT NULL)");//данные о пользователе, который в системе
        break;
    default:
        echo "Your card is empty!";
}


//≈сли запрос пройдет успешно то в переменную result вернетс€ true
if($result == 'true'){
    echo "Your table is created";
}else{
    echo "Your table isn't created!";
}
?>

