<?php
$servername = "----";
$username = "----";
$password = "-----";
$dbname = "------";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name_text, select_variant FROM sku_maintable";
$result= $conn->query($sql);
echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Name_text</th>';
echo '<th>Variants</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
if (isset($result->num_rows) > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<table border="1">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Name_text</th>';
        echo '<th>Variants</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr>';
        echo'<td>'. $row["id"]. '</td>';
        echo '<td>'. $row["name_text"]. '</td>';
        echo '<td>' . $row["select_variant"] . '</td>';
        echo '</tr>';
    }
} else {
    echo "0 results";
}
echo '</tbody>';
echo '</table>';
$conn->close();
?> 
