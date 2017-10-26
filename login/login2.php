<!DOCTYPE html><html>
<head>	
				<title>Login</title>
		<link rel="stylesheet" type="text/css" href="/www.taarangana.com/css/style.css?1476200075">
	</head>
<body>
<?php
error_reporting(0);
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   $userid= $teamname = $no= $name= $mno= $id= $clg= $year="";
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   else{
   mysql_select_db('taarangana');
   $sql = "SELECT * FROM registeration where userid = '$_POST[id]' AND name = '$_POST[name]'";
  
   $retval = mysql_query( $sql, $conn );
      if (mysql_num_rows($retval) > 0)
   {
	  // echo "i am fetching registeration";
     while($row = mysql_fetch_assoc($retval)) {
	 $userid=$row["userid"];
	 $teamname = $row["teamname"];
	 $no=$row["no"];
	 	 $name=$row["name"];
		$mno=$row["mno"];
		$id=$row["id"];
		$clg=$row["clg"];
		$year=$row["year"];
       }
   }
   else
   {
	   // echo "i am fetching signup";
	   $query1="select * from signup where userid='$_POST[id]'";
	$result = mysql_query($query1,$conn);
	if(mysql_num_rows($result) > 0)
	{
	while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		 $userid=$row["userid"];
	 	 $name=$row["name"];
		$mno=$row["mno"];
		$id=$row["id"];
		$clg=$row["clg"];
		$year=$row["year"];
		} 	
	}
	else{
	
$name= "INVALID USER ID";
$mno="Firstly, Please create your account on Signup Portal";
   }
   }
   }
   
  
?>
<div id="bg-transitions">
			<div class="bg-container " rel="pronight">
		<div class="bg-slice">
				<div class="bg-image">
						<img src="/www.taarangana.com/img/bg/pronight/pronight_04.jpg" alt="" />
		</div>
		</div>
			</div>
	</div>			<!-- Container -->
	<div id="container">
				<div id="content">
		<!-- ABOUT -->
			<section id="about" class="tl">
				<header class="valign-parent"><div class="valign-child about-container">
						<div class="global-info">
							<div>
								<h2 class="chapter-title" data-number="<?php echo $userid;?>"><?php echo $name;?></h2>
								<h3 class="intro">Some caption about Taarangana!!</h3>
								<p><?php echo $mno;?></p>
								<a href="mailto:taarangana@gmail.com"><?php echo $id;?></a>
								<h4 class="intro" ><?php echo $clg;?></h4>
								</div>
						</div>
						
						<ul class="more-info">

							<li class="sub-info rent">
								<div>
									<h4>Event Name</h4>
									<hr />
									<h4><?php echo $teamname;	   ?></h4>
									<hr />
									<p class="highlight">// Details about the event //<br>// Details about the event //<br>// Details about the event //<br>// Details about the event!</p>
									<ul class="timespan">
										<li>venue of the event <span>days of the event</span><span>Timings of the event (Summer)</span></li>
										<li>venue of the event <span>days of the event</span><span>Timings of the event (Summer)</span></li>
										</ul>
									<p class="highlight">Contact us!</p>
									<p class="highlight">details about whom to contact for more info about the event and how</p>
								</div>
							</li>

							<li class="sub-info contact">
								<ul>
									<li class="opening">
										<div>
											<h4>Opening Days <br/>+ Hours</h4>
											<hr />
											<ul class="opening-hours">
												<li><strong>Tuesday to Thursday</strong> <span>6pm till late</span></li>
												<li><strong>Friday + Saturday</strong> <span>6pm till very late</span></li>
											</ul>
										</div>
									</li>
									<li class="location">
										<a href="https://goo.gl/maps/xAcKh" target="_blank">
											<h4>Where to find us</h4>
											<hr />
											<p><strong>Address of our college <br/>Address of our college</strong></p>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</header>
			</section>
			
	<script src="/www.taarangana.com/ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/www.taarangana.com/js/vendor/jquery-2.0.3.min.js"><\/script>')</script>
	<script src="/www.taarangana.com/js/main.min.js"></script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','/www.taarangana.com/www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-15793894-38', 'auto');
	</script>

	<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','/www.taarangana.com/connect.facebook.net/en_US/fbevents.js');

		fbq('init', '985116731548253');
		fbq('track', "PageView");
	</script>

	<noscript>
		<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=985116731548253&amp;ev=PageView&amp;noscript=1"/>
	</noscript>

		<script>ga('send', 'pageview', 'about');</script>

</body>

<!-- Mirrored from www.taarangana.com/about by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2016 15:41:46 GMT -->
</html>