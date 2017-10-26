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
   
<div id="login">
      <?php
                echo "<h1>".str_replace("http://localhost/events/","",$_SERVER['HTTP_REFERER'])."</h1>";?>  
<form name='form1' id='form1' method="post" action="/www.taarangana.com/registeration/registeration2.php" accept-charset="UTF-8">
       
        
<span class="fontawesome-user">
</span>
          
<input type="text" placeholder="User Id" name="userid"  >
       
        
<span class="fontawesome-group">
</span>
          
<input type="text" placeholder="Team Name" name="teamname"  >

 <input type="submit" value="NEXT" id="31" name="next" >
 </form>
 
 
</form>
</div><br/><br/><br/><br/>
</body>

</html>
