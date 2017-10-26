<!DOCTYPE html>

<html lang="en-US">
  
<head>
   
<meta charset="UTF-8">
    
<title>Sign Up Form
</title>

<link rel="stylesheet" href="/www.taarangana.com/css/signup.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
</head>

<body style="overflow:hidden;"><br/><br/><br/><br/>
<table id="table"><td>
  
            <?php
                // add user input to database
                $conn = mysql_connect("localhost", "root", ""); 
				    $db=mysql_select_db("taarangana", $conn);
					
					echo "<h1>Taarangana'17 Registrations</h1>";
					if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $numbr = $_POST['numbr'];
	$clg = $_POST['clg'];
	$year = $_POST['year'];	
	$query = "insert into signup (name, id, mno, clg, year) values ('$name', '$email', '$numbr', '$clg', '$year')";
	$result=mysql_query($query,$conn);
	if ($result) {
	echo "<p>Thank you for signing up. Your response has been recorded succesfully.</p>";
		}
		$sql = "SELECT * FROM signup where mno = '$numbr'";
		$retval = mysql_query( $sql, $conn );
		if(mysql_num_rows($retval) > 0) {
					while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
			echo "<h3>Please note your user id :{$row['userid']}</h3>";
		}
	}
   
} 
						mysql_close($conn); ?>
						
						
						
					
</td></table>
 <br/><br/><br/><br/>
</body>

</html>