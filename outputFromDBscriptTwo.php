<?php
// ���������� ��������� ������
$db_host = 'localhost';
$db_name = 'sku';
$db_username = 'root';
$db_password = 'babay2008';
$db_table_to_show = 'sku_maintable';


$result = mysql_query($sql);

// ����������� � �������� ���� ������
$connect_to_db = mysql_connect($db_host, $db_username, $db_password)
or die("Could not connect: " . mysql_error());

// ������������ � ���� ������
mysql_select_db($db_name, $connect_to_db)
or die("Could not select DB: " . mysql_error());



// �������� ��� �������� �� ������� "Contacts"
$qr_result = mysql_query("select * from " . $db_table_to_show)
or die(mysql_error());

// ������� �� �������� ����� ��������� HTML-�������
echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>id</th>';
echo '<th>sku_name</th>';
echo '<th>Variants</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

// ������� � HTML-������� ��� ������ �������� �� ������� MySQL
while($data = mysql_fetch_array($qr_result)){
    echo '<tr>';
    echo '<td>' . $data['id'] . '</td>';
    echo '<td>' . $data['name_text'] . '</td>';
    echo '<td>' . $data['select_variant'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

// ��������� ���������� � ��������  ���� ������
mysql_close($connect_to_db);
?>