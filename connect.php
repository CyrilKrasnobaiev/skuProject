<?php
mysql_connect() //ïàðàìåòðû â ñêîáêàõ ("õîñò", "èìÿ ïîëüçîâàòåëÿ", "ïàðîëü")
or die("<p>Mistake with connecting to database" . mysql_error() . "</p>");
mysql_select_db("sku") //ïàðàìåòð â ñêîáêàõ ("èìÿ áàçû, ñ êîòîðîé ñîåäèíÿåìñÿ")
or die("<p>Mistake with choosing of database!". mysql_error() . "</p>");
?>
