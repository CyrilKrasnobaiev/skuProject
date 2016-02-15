<?php
// Äàííûå äëÿ mysql ñåðâåðà
$dbhost = "----";         // Õîñò
$dbuser = "----";             // Èìÿ ïîëüçîâàòåëÿ
$dbpassword = "------";    // Ïàðîëü
$dbname = "-----";          // Èìÿ áàçû äàííûõ

echo 'Delete Table<br>';
$link = mysql_connect($dbhost, $dbuser, $dbpassword);
if (false === $link)
    die ('Error database connect<br>');
$select_result = mysql_select_db($dbname, $link);
if (false === $select_result)
    die ('Error database select<br>');
$query = "DROP TABLE scu_card";
$query_result = mysql_query($query, $link);
if (false === $query_result)
    die ('Error database SQL query<br>');
$close_result = mysql_close($link);
if (false === $close_result)
    die ('Error database close<br>');
?>
