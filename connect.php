<?php
mysql_connect("localhost", "root", "babay2008") //��������� � ������� ("����", "��� ������������", "������")
or die("<p>Mistake with connecting to database" . mysql_error() . "</p>");
mysql_select_db("sku") //�������� � ������� ("��� ����, � ������� �����������")
or die("<p>Mistake with choosing of database!". mysql_error() . "</p>");
?>