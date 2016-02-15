<?php
// îïðåäåëÿåì íà÷àëüíûå äàííûå
$db_host = '----';
$db_name = '-----';
$db_username = '----';
$db_password = '----';
$db_table_to_show = '------';


$result = mysql_query($sql);

// ñîåäèíÿåìñÿ ñ ñåðâåðîì áàçû äàííûõ
$connect_to_db = mysql_connect($db_host, $db_username, $db_password)
or die("Could not connect: " . mysql_error());

// ïîäêëþ÷àåìñÿ ê áàçå äàííûõ
mysql_select_db($db_name, $connect_to_db)
or die("Could not select DB: " . mysql_error());



// âûáèðàåì âñå çíà÷åíèÿ èç òàáëèöû "Contacts"
$qr_result = mysql_query("select * from " . $db_table_to_show)
or die(mysql_error());

// âûâîäèì íà ñòðàíèöó ñàéòà çàãîëîâêè HTML-òàáëèöû
echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>id</th>';
echo '<th>sku_name</th>';
echo '<th>Variants</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

// âûâîäèì â HTML-òàáëèöó âñå äàííûå êëèåíòîâ èç òàáëèöû MySQL
while($data = mysql_fetch_array($qr_result)){
    echo '<tr>';
    echo '<td>' . $data['id'] . '</td>';
    echo '<td>' . $data['name_text'] . '</td>';
    echo '<td>' . $data['select_variant'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

// çàêðûâàåì ñîåäèíåíèå ñ ñåðâåðîì  áàçû äàííûõ
mysql_close($connect_to_db);
?>
