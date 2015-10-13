<?
session_start();
if(!session_is_registered("myusername"))
{
	header("location:login.php");
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<meta name="Description" content="School donate" />
	<meta name="Keywords" content="deaf dumb, school" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="Author" content="avn1990@gmail.com" />
	<link rel="stylesheet" href="include/vani.css" type="text/css" />
	<title> Vani Educational Academy </title>
</head>

<body>
<!-- Wrap -->
<div id="wrap">
	<div id="page">
		<div id="top">
			<div id="logo"><img src="include/images/page/logo.png" width="67" height="42" alt=""></div>
			<div id="company_name"> Vani Educational </div>
			<div id="search-box">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
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
				<td class="item"><a href="index.php">Home</a></td>
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

		
		<!--Content Wrap -->
		<div id="content-wrap">
			
			<div id="main">
				<h3> Donate </h3>
					<p>
					<b> Many hands are waiting for your helping hands.
					<br/> Right time and right time to show your concern.
                    <br/> Please donate.  </b>
					</p>
					
				<h3>Please send your donations to: </h3>
					<p>
					K.V.Srinivasa Rao,
					<br/>H.No.6-186, Sitharamapuram,
					<br/>Jaggayyapet-521175, 
					<br/>Krishna Dt,
					<br/>Andra Pradesh,
					<br/>India.
					<br/>Ph.08654-226130(0),225887(R),9440458912(M)
				</p>			
			</div>
		
		<!--End content-wrap-->
				</div></div>
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

</body>
</html>