<!DOCTYPE html>

<html lang="en-US">
  
<head>
   
<meta charset="UTF-8">
    
<title>Registration Form
</title>

<link rel="stylesheet" href="/www.taarangana.com/css/registeration.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/www.taarangana.com/js/registeration.js"></script>	
  
</head>

  
<body style="overflow:hidden;">
  <br/><br/><br/><br/>
<table id="table"><td>
            <?php
                // add user input to database
				$userid=$teamname=$name=$mno=$id=$clg=$year=" ";
                $conn = mysql_connect("localhost", "root", "","taarangana"); 
				    $db=mysql_select_db("taarangana", $conn);
					
					
					echo "<h1>Taarangana'17 Registrations</h1>";
					if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	else{
	
	if (isset($_POST['submit']))
	{
		$userid=$_POST['userid'];
	$teamname=$_POST['teamname'];
		$name=$_POST['name'];
	$mno=$_POST['mno'];
		$id=$_POST['id'];
		$clg=$_POST['clg'];
		$year=$_POST['year'];
		$query = "insert into registeration (userid, teamname, name, mno, id, clg, year) values ('$userid', '$teamname', '$name', '$mno', '$id', '$clg', '$year')";
	if (mysql_query($query,$conn)) {
		echo "<p>Thank you for submitting the response. Your response has been recorded</p>";
    }
		} 
}
	mysql_close($conn); ?>
</td></table><br/><br/><br/><br/>
</body>

</html>
