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

  
<body style="overflow:hidden;"><br/>
  <table id="table" style="display:none"><td>
            <?php
                // add user input to database
				$userid=$teamname=$name=$mno=$id=$clg=$year="";
                $conn = mysql_connect("localhost", "root", "","taarangana"); 
				    $db=mysql_select_db("taarangana", $conn);
					
					
					if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	else{
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		 if (isset($_POST['next'])) {
                        $userid = $_POST['userid'];
						$teamname = $_POST['teamname'];
						 if ($db) {
                           $query1="select * from signup where (userid='$userid')";
	$result = mysql_query($query1,$conn);

if (mysql_num_rows($result) > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result)) {
		 $name=$row["name"];
		$mno=$row["mno"];
		$id=$row["id"];
		$clg=$row["clg"];
		$year=$row["year"];
	
} }else{
echo "<h1> INVALID USER ID</h1>";
echo "<p>Firstly, Please create your account on Signup Portal</p>";
		} 
}}}} ?>

</td></table> 
<div id="login">
      
 <form name='form2' id='form2' method="post" action="/www.taarangana.com/registeration/registeration3.php" accept-charset="UTF-8">
<span class="fontawesome-user">
</span>
          
<input type="text" placeholder="User Id" name="userid" value="<?php echo $userid;?>" >
       
        
<span class="fontawesome-group">
</span>
          
<input type="text" placeholder="Team Name" name="teamname" value="<?php echo $teamname;?>" >
<span class="fontawesome-user">
</span>  

<input type="text" id="user" placeholder="Name" name="name" value="<?php echo $name;?>" > 
   
<span class="fontawesome-envelope">
</span>

<input type="email"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="abcd@domain.com" placeholder="Email ID"  name="id" value="<?php echo $id;?>">

<span class="fontawesome-phone">
</span>  
<input type="tel"   maxlength="10" pattern="[0-9]{10}$" placeholder="Contact Number" name="mno" value="<?php echo $mno;?>">

<span class="fontawesome-group">
</span>  
<input type="text" id="user" placeholder="College" name="clg" value="<?php echo $clg;?>">

<span class="fontawesome-star">
</span>    
<input type="text" id="user" placeholder="Year" name="year" value="<?php echo $year;?>">          
		<input type="submit" value="SUBMIT" id="32" name="submit" >


</form>
</div><br/><br/><br/><br/>
</body>

</html>
