<?php
mysql_connect("localhost", "root", "babay2008") //параметры в скобках ("хост", "им€ пользовател€", "пароль")
or die("<p>Mistake with connecting to database" . mysql_error() . "</p>");
mysql_select_db("sku") //параметр в скобках ("им€ базы, с которой соедин€емс€")
or die("<p>Mistake with choosing of database!". mysql_error() . "</p>");
?>