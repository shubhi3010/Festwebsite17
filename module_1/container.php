<?php

	$cont='<div class="facebook">
			<a href="https:/www.facebook.com/taarangana" target="_blank">
			<svg version="1.1" id="facebook-ico" x="0px" y="0px" width="42px" height="42px" viewBox="0 0 42 42" enable-background="new 0 0 42 42" xml:space="preserve">
				<rect id="facebook-border" x="7.624" y="7.624" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -8.6983 21.0003)" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" width="26.753" height="26.752"/>
				<path id="facebook-icon" fill="#FFFFFF" d="M19.314,18.686h-1.4v2.286h1.4v6.713h2.693v-6.742h1.877l0.201-2.257h-2.078
						c0,0,0-0.843,0-1.286c0-0.532,0.105-0.743,0.621-0.743c0.414,0,1.457,0,1.457,0v-2.343c0,0-1.537,0-1.865,0
						c-2.003,0-2.906,0.882-2.906,2.572C19.314,18.357,19.314,18.686,19.314,18.686z"/>
			</svg>
			</a>
		</div>
		
		<a class="btn fancybox fancybox.iframe" href="/www.taarangana.com/popup.html" style="color:#333332;background:#fff;font-size: 19px;letter-spacing:.3rem;position:absolute;z-index:100000;opacity:1;cursor:pointer"><h2><i>L</i><i>o</i><i>g</i><i>i</i><i>n</i>/<i>S</i><i>i</i><i>g</i><i>n</i> <i>U</i><i>p</i></h2></a>
		<audio loop src="/www.taarangana.com/song.mp3" id="song">
    Your browser does not support the <code>audio</code> tag
</audio>
		<img src="/www.taarangana.com/img/play.png" id="play" class-"song" align="right" style="height:40px;width:40px;position:absolute;top:20px;right:20px;z-index:100000;opacity:1;cursor:pointer;display:none;">
<img src="/www.taarangana.com/img/pause.png" id="pause" align="right" style="height:40px;width:40px;position:absolute;top:20px;right:20px;z-index:100000;opacity:1;cursor:pointer;display:block;">
		
		
	<script type="text/javascript">
	document.getElementById("pause").addEventListener("click", function(){   
				document.getElementById("play").style.display = "block";
				document.getElementById("pause").style.display = "none";
				document.querySelector("audio").pause();
});
document.getElementById("play").addEventListener("click", function(){
		document.getElementById("pause").style.display = "block";
				document.getElementById("play").style.display = "none";	
				document.querySelector("audio").play();
});

</script>	
			<header class="valign-parent">			
		<header>
			<nav id="menu" class="noselect">
				<div id="hamburger">
					<p>Menu</p>
					<svg version="1.1" x="0px" y="0px" width="30px" height="17px" viewBox="0 0 30 17" enable-background="new 0 0 30 17" xml:space="preserve">
						<g id="lines">
							<line stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="1.469" x2="30" y2="1.469"/>
							<line stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="8.5" x2="30" y2="8.5"/>
							<line stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="15.5" x2="30" y2="15.5"/>
						</g>
					</svg>
				</div>
				<div id="progress">
					<div id="progress-track">
						<div id="progress-schedule" style="-webkit-transform: translate3d(66.666666666667%, 0px, 0px);transform: translate3d(66.666666666667%, 0px, 0px); -ms-transform: translateX(66.666666666667%);" data-play-state=" playing "></div>
					</div>
					<div id="progress-overlay-container">
						<div id="progress-overlay" style="-webkit-transform: translate3d(-33.333333333333%, 0px, 0px);transform: translate3d(-33.333333333333%, 0px, 0px); -ms-transform: translateX(-33.333333333333%);"><span id="drag-handle"></span></div>
					</div>
				</div>
				<ul>
					<li>
						<a href="/www.taarangana.com" >Home<span class="menu-item-bg"></span></a>
						<span class="overlay-link" rel="home"></span>
					</li>
					<li>
						<a href="/www.taarangana.com/about" >About<span class="menu-item-bg"></span></a>
						<span class="overlay-link" rel="about"></span>
					</li>
					<li>
						<a href="/www.taarangana.com/events" >Events<span class="menu-item-bg"></span></a>
						<span class="overlay-link" rel="events"></span>
					</li>
					<li>
						<a href="/www.taarangana.com/schedule" class="current">Schedule<span class="menu-item-bg"></span></a>
						<span class="overlay-link" rel="schedule"></span>
					</li>
					<li>
						<a href="/www.taarangana.com/pronight" >Pronight<span class="menu-item-bg"></span></a>
						<span class="overlay-link" rel="pronight"></span>
					</li>
					<li>
						<a href="/www.taarangana.com/gallery" >Gallery<span class="menu-item-bg"></span></a>
						<span class="overlay-link" rel="gallery"></span>
					</li>
					<li>
						<a href="/www.taarangana.com/sponsors" >Sponsors<span class="menu-item-bg"></span></a>
						<span class="overlay-link" rel="sponsors"></span>
					</li>
					
					<li>
						<a href="/www.taarangana.com/team" >Team<span class="menu-item-bg"></span></a>
						<span class="overlay-link" rel="team"></span>
					</li>
					
					
				</ul>			</nav>
		</header>
		
		<div id="menu-overlay"></div>
		';
	echo  $cont;
?>
