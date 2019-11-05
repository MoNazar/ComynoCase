<?php
$servername = "";
$username = "";
$password = "";
$verbindung = mysqli_connect($servername, $username, $password, $username);
?>

<?php    
	$Book_id = $_POST['Book_id'];
    $query1 = "DELETE FROM loan where Book_id = $Book_id;";
	$query2 = "Select Book_id from loan";
    
	$result = mysqli_query($verbindung, $query2);
	$row = mysqli_fetch_assoc($result);
	// Ccheck, whether the book is loaned or not.
	if ($Book_id==$row['Book_id']){
		mysqli_query($verbindung, $query1);
		echo " Return successfull";
	}
	else{
		echo "return failed";
	}
?>
<html>
<head>
 <title></title>
</head>
<body>

<form action="returnBook.php"method="POST">
   <button type = "submit" name = "submit">return</button>    

</form>
</body>
</html>

