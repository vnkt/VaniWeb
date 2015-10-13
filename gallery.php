<?
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<meta name="Description" content="School donate" />
	<meta name="Keywords" content="deaf dumb, school" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="Author" content="avn1990@gmail.com" />
	<link rel="stylesheet" href="include/vani.css" type="text/css" />
	<script type="text/javascript" src="include/js/jquery.js"></script>
	<script type="text/javascript" src="include/js/jquery.lightbox-0.5.js"></script>
	
	<title> Vani Educational Academy </title>
	<script type="text/javascript">
		$(function() {
			$('#gallery a').lightBox();
		});
    </script>
   	<style type="text/css">
		/* jQuery lightBox plugin - Gallery style */
		#gallery {
			background-color: #444;
			padding: 10px;
			width: 100%;
		}
		#gallery ul { list-style: none; }
		#gallery ul li { display: inline; }
		#gallery ul img {
			border: 5px solid #3e3e3e;
			border-width: 5px 5px 20px;
		}	
		#gallery ul a:hover img {
			border: 5px solid #fff;
			border-width: 5px 5px 20px;
			color: #fff;
		}
		#gallery ul a:hover { color: #fff; }
		
		#gallery1 {
			background-color: #444;
			padding: 10px;
			width: 100%;
		}
		#gallery1 ul { list-style: none; }
		#gallery1 ul li { display: inline; }
		#gallery1 ul img {
			border: 5px solid #3e3e3e;
			border-width: 5px 5px 20px;
		}	
		#gallery1 ul a:hover img {
			border: 5px solid #fff;
			border-width: 5px 5px 20px;
			color: #fff;
		}
		#gallery1 ul a:hover { color: #fff; }
	</style>	
</head>

<body>
<div id="wrap">
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
		<div id="content-wrap">
			<div id="main">
				<p>Awareness Programmes and Aid camps</p>
				<div id="gallery">
				<ul>
				<li>
					<a href="include/images/gallery/awareness/aids.jpg" title="Aids Awareness">
					<img src="include/images/gallery/awareness/aids.jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/awareness/aids (1).jpg" title="Aids Awareness">
					<img src="include/images/gallery/awareness/aids (1).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/awareness/aids (2).jpg" title="Aids Awareness">
					<img src="include/images/gallery/awareness/aids (2).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/awareness/sessions.jpg" title="Sessions">
					<img src="include/images/gallery/awareness/sessions.jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/awareness/sessions (1).jpg" title="Sessions">
					<img src="include/images/gallery/awareness/sessions (1).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/awareness/sessions (2).jpg" title="Sessions">
					<img src="include/images/gallery/awareness/sessions (2).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/freebe (1).jpg" title="Aid for children">
					<img src="include/images/gallery/freebe (1).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/freebe (2).jpg" title="Aid for children">
					<img src="include/images/gallery/freebe (2).jpg" width="72" height="72" alt="" />
					</a>
				</li>
			</ul>
						
			<p>Teaching</p>
				<ul>
				<li>
					<a href="include/images/gallery/class/classroom (1).jpg" title="Class room">
					<img src="include/images/gallery/class/classroom (1).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/class/classroom (2).jpg" title="Class room">
					<img src="include/images/gallery/class/classroom (2).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/class/classroom (5).jpg" title="Class room">
					<img src="include/images/gallery/class/classroom (2).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/class/classroom (6).jpg" title="Class room">
					<img src="include/images/gallery/class/classroom (6).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/class/classroom (7).jpg" title="Class room">
					<img src="include/images/gallery/class/classroom (7).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/class/computer (1).jpg" title="Computer">
					<img src="include/images/gallery/class/computer (1).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/class/computer (2).jpg" title="Computer">
					<img src="include/images/gallery/class/computer (2).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/class/old (1).jpg" title="Old Age ">
					<img src="include/images/gallery/class/old (1).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/class/old (2).jpg" title="Old Age ">
					<img src="include/images/gallery/class/old (2).jpg" width="72" height="72" alt="" />
					</a>
				</li>
			</ul>
			
		<p>News Paper Clips</p>
				<ul>
				<li>
					<a href="include/images/gallery/news/news (1).jpg" title="News Paper">
					<img src="include/images/gallery/news/news (1).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/news/news (2).jpg" title="News Paper">
					<img src="include/images/gallery/news/news (2).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/news/news (3).jpg" title="News Paper">
					<img src="include/images/gallery/news/news (3).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/news/news (4).jpg" title="News Paper">
					<img src="include/images/gallery/news/news (4).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/news/news (5).jpg" title="News Paper">
					<img src="include/images/gallery/news/news (5).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/news/news (6).jpg" title="News Paper">
					<img src="include/images/gallery/news/news (6).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/news/news (7).jpg" title="News Paper">
					<img src="include/images/gallery/news/news (7).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/news/news (8).jpg" title="News Paper">
					<img src="include/images/gallery/news/news (8).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/news/news (9).jpg" title="News Paper">
					<img src="include/images/gallery/news/news (9).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/news/news (10).jpg" title="News Paper">
					<img src="include/images/gallery/news/news (10).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/news/news (11).jpg" title="News Paper">
					<img src="include/images/gallery/news/news (11).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/news/news (12).jpg" title="News Paper">
					<img src="include/images/gallery/news/news (12).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/news/news (13).jpg" title="News Paper">
					<img src="include/images/gallery/news/news (13).jpg" width="72" height="72" alt="" />
					</a>
				</li>
			</ul>
						
			<p>Health camps</p>
				<ul>
				<li>
					<a href="include/images/gallery/health camps/hearing (3).jpg" title="Hearing Aid">
					<img src="include/images/gallery/health camps/hearing (3).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/health camps/hearing (4).jpg" title="Hearing Aid">
					<img src="include/images/gallery/health camps/hearing (4).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				</ul>
					
			<p>Activities for children</p>
				
				<ul>
				<li>
					<a href="include/images/gallery/comp/pt (1).jpg" title="Games">
					<img src="include/images/gallery/comp/pt (1).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/comp/pt (2).jpg" title="Games">
					<img src="include/images/gallery/comp/pt (2).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/comp/pt (3).jpg" title="Games">
					<img src="include/images/gallery/comp/pt (3).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/karate/karate (1).jpg" title="Karate">
					<img src="include/images/gallery/karate/karate (1).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/karate/karate (2).jpg" title="Karate">
					<img src="include/images/gallery/karate/karate (2).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/karate/karate (3).jpg" title="Karate">
					<img src="include/images/gallery/karate/karate (3).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/nss (1).jpg" title="NSS">
					<img src="include/images/gallery/nss (1).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				<li>
					<a href="include/images/gallery/nss (2).jpg" title="NSS">
					<img src="include/images/gallery/nss (2).jpg" width="72" height="72" alt="" />
					</a>
				</li>
				
				</ul>
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
</body>
</html>