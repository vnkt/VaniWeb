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
	<title> Vani Educational Academy </title>
</head>

<body>
<!-- Wrap -->
<div id="wrap">
	<<div id="page">
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
		
		<!--Content Wrap -->
		<div id="content-wrap">
			<div id="main">
				<h3> Legal Position </h3>
					<ol>
					<li>Date of Registration & No.: Registered under the Societies Registration Act 						21 of 1860 in the year 1997. No. 257/97, Dt: 1.7.97 </li>
					<li>FCRA Number and year : 010260250 Dt.5-11-04.</li>
					<li>IT 12A status and PAN number : I (23)/VJA/98-99 & AAATV 4458 R </li>
					<li>IT 80 G status & No. : Registered under sec.80 G of income tax act 1961      No.23/VJA/98-99, Dt: 17-3-99 </li>
					<li>PWD Act .: Registered as per section 52 of Persons With            Disabilities (equal opportunities, protection of rights and full participation) act 1995 </li>
					</ol>
					
				<h3> For the past 14 years implementing: </h3>
					<ol>
					<li> <b> Areas/subjects in which NGO is working : </b> <ul>
							 <li> Permanent project- Deaf & Dumb school running    
                             since 1997 (13 years completed with the strength 
                             of  100 children). </li>
							 <li> Awareness programmes on   
                             various issues, Promotion of Self- Help groups for 
						     woman and  Disabled, persons living with HIV/AIDS </li>
                             <li> Income generation programmes and Skill based   
                             trainings, Health camps, water and sanitation  
                             programmes, Participation in Govt. programmes 
                             like Janmabhoomi, Clean & Green, Pulse polio,                                                                   
                             Jalasumrakshana, Rachhabanda, etc</li>
							 </ul>
					</li>
					<li> <b> Government activities being implemented </b> <ul>
							 <li> Readymade Garments manufacturing training 
								programme under SJSRY Scheme </li>
							 <li> Cutting & Tailoring programme under Bare Foot Mechanics Training, DRDA, Krishna Dt.</li>
                             <li> Awareness Campaigns on Solid Waste Management.</li>
							 <li> Medical camps conducted with the support of District Youth Welfare, Krishna</li>
							 <li> Norad training programme under ministry of women and child welfare, Govt. of India</li>
						</ul>
					</li>
					<li> <b> Special activities being implemed : </b> <ul>
							 <li>Conducted sports and games for disabled and normal children</li>
							 <li> Academy has been extended services in natural colemanites (like fluid relief camps)</li>
                             <li> Conducted many carrier guidance programmes for school children, legal literacy camps, adult education centers at slums </li>
							 </ul>
					</li>
					</ol>
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