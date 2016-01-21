<?php
require_once 'connect.php';
// огда пользователь нажимает кнопку "ƒобавить", то добавл€етс€ верхн€€ форма, котора€ должна дополн€ть созданную таблицу sku_card
//ALTER TABLE my_frends ADD adress_2 TEXT
$name = $_POST['name_text'];
$variant = $_POST['select_variant'];
$box = isset($_POST['checkbox_name']) ? 1:0;

mysql_query('SET NAMES cp1251;');
switch($variant){
    case "number":
        $result = mysql_query("ALTER TABLE sku_card ADD ($name INT(10) NOT NULL)");
        break;
    case "digit":
        $result = mysql_query("ALTER TABLE sku_card ADD ($name FLOAT(10) NOT NULL)");
        break;
    case "int_digit":
        $result = mysql_query("ALTER TABLE sku_card ADD ($name FLOAT(10) NOT NULL)");
        break;
    case "text":
        $result = mysql_query("ALTER TABLE sku_card ADD ($name CHAR NOT NULL)");
        break;
    case "date":
        $result = mysql_query("ALTER TABLE sku_card ADD ($name DATE NOT NULL)");
        break;
    case "time":
        $result = mysql_query("ALTER TABLE sku_card ADD ($name TIME NOT NULL)");
        break;
    case "checkbox1":
        $result = mysql_query("ALTER TABLE sku_card ADD ($name BIT NOT NULL)");//найти тип данных дл€ чекбокс в MySql
        break;
    case "status":
        $result = mysql_query("ALTER TABLE sku_card ADD ($name BIT NOT NULL)");//найти тип данных дл€ чекбокс в MySql
        break;
    case "list":
        $result = mysql_query("ALTER TABLE sku_card ADD ($name TIME NOT NULL)");
        break;
    case "photo":
        $result = mysql_query("ALTER TABLE sku_card ADD ($name NOT NULL)");//тип данных дл€ фото
        break;
    case "user":
        $result = mysql_query("ALTER TABLE sku_card ADD ($name TIME NOT NULL)");//данные о пользователе, который в системе
        break;
    default:
        echo "Your card is empty!";
}

if($result == 'true'){
    echo "Your table is updated";
}else{
    echo "Your table isn't updated!";
}
?>