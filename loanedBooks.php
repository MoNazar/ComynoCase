<?php


$servername = "";
$username = "";
$password = "";

$connection = new mysqli($servername, $username, $password, $username);
//Check connection 
if($conn === false){
	die("Connection failed: ".mysqli_connect_error());
}
$abfrage = "SELECT * FROM loans";
$abfrage2 = "SELECT Book_Name FROM loan INNER JOIN Book ON loan.Book_id = Book.Book_id";
$result = $connection->query($abfrage2);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		echo  "Book_Name: ".$row["Book_Name"];
		echo "\r\n";
		echo ";";
		echo "\r\n";
		//echo "id: ". $row["Student_id"];
	}
}

$connection->close();

?>
<html>
<body>
<form action="../nfs.html"method="POST">
   <button type = "submit" name = "submit">return</button>    

</form>
</body>
</html>