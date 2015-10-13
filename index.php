<?
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" />
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<meta name="Description" content="School donate" />
	<meta name="Keywords" content="deaf dumb, school" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="Author" content="avn1990@gmail.com" />
	<link rel="stylesheet" href="include/index.css" type="text/css" />
	<link rel="stylesheet" href="include/rotator.css" type="text/css" media="screen" />
	<title> Vani Educational Academy </title>
	<script type="text/javascript" src="include/js/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="include/js/jquery.nivo.slider.pack.js"></script>
   <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	<script type="text/javascript">
		$(document).ready(function(){
	
	//hide message_body after the first one
		$(".message_list .message_body:gt(0)").hide();
	
	//hide message li after the 5th
		$(".message_list li:gt(4)").hide();

	
	//toggle message_body
		$(".message_head").click(function(){
			$(this).next(".message_body").slideToggle(500)
			return false;
		});

	//collapse all messages
		$(".collpase_all_message").click(function(){
			$(".message_body").slideUp(500)
			return false;
		});

	//show all messages
		$(".show_all_message").click(function(){
			$(this).hide()
			$(".show_recent_only").show()
			$(".message_list li:gt(4)").slideDown()
			return false;
		});

	//show recent messages only
		$(".show_recent_only").click(function(){
			$(this).hide()
			$(".show_all_message").show()
			$(".message_list li:gt(4)").slideUp()
			return false;
		});

	});
	</script>
	
</head>

<body>
	<div id="page">
		<div id="top">
			<div id="logo"><img src="include/images/page/logo.png" width="67" height="42" alt=""></div>
			<div id="company_name"> Vani Educational </div>
			<div id="search-box"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<?php
					if(isset($_SESSION['myusername']))
					{
						echo 'Logged in as ';
						echo $_SESSION['myusername'] ;
						echo '  <a href="logout.php">Logout</a>';
					}
				?>
			</tr>
			<tr>
				<td><input type="text" class="search-area"></td>
				<td width="10"><img src="include/images/page/spacer.gif" width="10" height="1" alt=""></td>
				<td width="72"><a href="#"><img src="include/images/page/btn_search.png" width="72" height="29" alt=""></a></td>
			</tr>
			</table>
			</div>
		</div>
		<div id="menu">
			<table border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>	
				<td width="11"><img src="include/images/page/ml.png" width="11" height="33" alt=""></td>
				<td class="item"><a href="">Home</a></td>
				<td class="item"><a href="about.php">About</a></td>
				<td class="item"><a href="events.php">Services</a></td>
				<td class="item"><a href="gallery.php">Gallery</a></td>
				<td class="item"><a href="donate.php">Donate</a></td>
				<td class="item"><a href="contact.php">Contact</a></td>
				<td class="item"><a href="login.php">Login</a></td>
				<td width="11"><img src="include/images/page/mr.png" width="11" height="33" alt=""></td>
			</tr>
			</table>
		</div>
		<div id="sidebar">
				<ol class="message_list">
				<?php
					$host="localhost"; // Host name
					$username="root"; // Mysql username
					$password=""; // Mysql password
					$db_name="vani"; // Database name
					$tbl_name="detail"; // Table name
	
					// Connect to server and select databse.
					mysql_connect("$host", "$username", "$password")or die("cannot connect");
					mysql_select_db("$db_name")or die("cannot select DB");
					
					$score = "select event,date,details from detail order by id desc";
					$scb=mysql_query($score);
					$rows = mysql_num_rows($scb);
					unset($scb);
					$scb=mysql_query("select event,date,details from detail order by id desc");
		
					$ii=mysql_num_rows($scb);
					for($u=0;$u<$ii;$u++)
					{
						if($jj=mysql_fetch_assoc($scb))
						{
							echo '<li>';
							echo '<p class="message_head"><cite>';
							echo $jj['event'];
							echo '</cite> <span class="timestamp">';
							echo $jj['date'];
							echo '</span></p><div class="message_body"><p><br />';
							echo $jj['details'];
							echo '</div></li>';
		
						}
					}
				?>
				</ol>						
				<p class="collapse_buttons"><a href="#" class="show_all_message">Show all message (9)</a> <a href="#" class=			"show_recent_only">Show 5 only</a> <a href="#" class="collpase_all_message">Collapse all</a></p>
		</div>
		
		<div id="slider-wrapper">
            <div id="slider" class="nivoSlider">
                <img src="include/images/slider/slider.jpg" />
                <img src="include/images/slider/slider (1).jpg" />
                <img src="include/images/slider/slider (2).jpg" />
                <img src="include/images/slider/slider (3).jpg" />
                <img src="include/images/slider/slider (4).jpg" />
                <img src="include/images/slider/slider (5).jpg" />
                <img src="include/images/slider/slider (6)jpg" />
                <img src="include/images/slider/slider (7).jpg" />
            </div>
            </div>
		<div id="contentwrap">
		    <div id="main">
			
				<h3><center> Vani Educational Academy  ,Jaggayyapet </center></h3>
				<blockquote><p>If you have much, give of your wealth; If you have little, give of your heart</p></blockquote>
				<p>
					Vani Educational Academy is a non governmental organization striving for. The social & economic empowerment of down trodden and neglected poor   people of the community.  Since 1997 its priority target group is persons   with disability, HIV/AIDS and woman. This organization has received many awards from Government and others also. These organization members were nominated in Government committees like Jaggayyapet Ground Water Conservation Mission, Mandal Education Committee etc. The organization working with the following Mission & Vision.
					<br/><b> From 14 years working in 75 villages in 3 mandals of Jaggayyapet      
					<br/> As on date 560 nos. were trained in various trades. </b>
				</p>
				<p><b>Vision: </b>
				<br />
					Our vision is a community where equal opportunities, protection of rights and creation of a positive environment for the full participation of Women, the Persons With Disabilities, HIV/AIDS and the weaker sections in all the fields of social life.
				</p>
				<p><b>Mission: </b>
				<br />
					To bring that vision into reality, we provide them with all the necessary facilities like meaningful education and training to enable them to develop themselves as individuals capable of meeting the challenges of life.
					Vani Educational Academy providing   the following services to the poor and neglected community. 
            </div>
		<!--End content-wrap-->
		</div>
	</div>
	<!-- Footer -->
	<div id="footer">
		<div id="bottom_menu">
			<a href="index.html">Home</a>&nbsp;|&nbsp;
			<a href="index.html">Sitemap</a>&nbsp;|&nbsp;
			<a href="index.html">RSS Feed</a> 		
		</div>	
		<div id="bottom_addr">&copy; 2011 <strong>Vani</strong> &nbsp;&nbsp; 
				Valid: <a href="http://validator.w3.org/check/referer">XHTML</a> | 
			<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
		</div>	
	</div>	
<!-- END Wrap -->
</div>
<script src="http://cdn.wibiya.com/Toolbars/dir_0799/Toolbar_799378/Loader_799378.js" type="text/javascript"></script><noscript><a href="http://www.wibiya.com/">Web Toolbar by Wibiya</a></noscript> 
</body>
</html>