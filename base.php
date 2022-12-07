<?php
	


$photoUrl = array();
$photoUrlCat = array();

$conn = new mysqli("sql10.freesqldatabase.com", "sql10583037", "jtKT2PzCxw", "sql10583037");
//$conn = new mysqli("127.0.0.1:3306", "root", "", "tmmun");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM base";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    $co = $rowsCount;
    //echo "<table><tr><th>Id</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            //echo "<td>" . $row["id"] . "</td>";
            //echo "<td>" . $row["url"] . "</td>";
            array_push($photoUrl, $row["url"]);
            array_push($photoUrlCat, $row["category"]);
            
        echo "</tr>";
    }
    $json = json_encode($photoUrl);
    $jsonbase = json_encode($photoUrlCat);
    //$button = $stack[1];
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>