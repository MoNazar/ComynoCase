
<?php
// Connect data
$servername = "";
$username = "";
$password = "";
// Start connection with sql database 
$verbindung = mysqli_connect($servername, $username, $password, $username);

?>

<?php

    $Book_id = $_POST['Book_id'];
    $Student_id = $_POST['Student_id'];
	
	
	
    // Sql query to operate on database 
    $query1 = "Insert into loan (Book_id, Student_id)
    VALUES ('$Book_id' , '$Student_id');";
	$query2 = "SELECT Book_id FROM loan";
	$result = mysqli_query($verbindung, $query2);
	$row = mysqli_fetch_assoc($result);
	
	// Check, whether a Book is already loaned or not 
	if($Book_id==$row['Book_id']){
		echo "Book already loaned";
	}
	else{
		mysqli_query($verbindung, $query1);
		echo "Borrow successfull";
		
	}
		
	
    
?>
<html>
<head>
<!-- Button in order to return into the nfs start page -->
 <title></title>
</head>
<body>

<form action="insert.php"method="POST">
   <button type = "submit" name = "submit">return</button>    

</form>
</body>
</html>
