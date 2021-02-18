<?php

$conn = new mysqli('172.17.0.2','root','maikelmaikel','Trucorp');

$result = $conn->query("SELECT * FROM users");
$count = 0;

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
	echo "ID: ".$row['ID']."\n";
	echo "Nama: ".$row['Nama']."\n";
	echo "Kantor: ".$row['Kantor']."\n";
	echo "\n";
	$count = $count + 1;
	}
	echo "total user:".$count;
}else{
	echo "total user:".$count;
}

$conn -> close();

?>
