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
	
			<h3> Services : </h3>
				
				<ul>
				<li>
				<img src="include/images/services/image001.jpg" width="100" height="120" alt="firefox" class="float-left" /></a><b> Special school for the deaf: </b>
					Established in the year 1997 with one child and extended the services to 72 children. We are providing free Education, accommodation and clothing etc. with the financial assistance of the local philanthropist, NRI's, industrialists and the partial support of the Govt. 15 nos. technical and non technical staff working in the school. </li>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<li><img src="include/images/services/image002.jpg" width="100" height="120" alt="firefox" class="float-right"/></a><b> Special school for the child labour:  </b>
					Jaggaiahpet is 3rd grade municipality with having more slum areas, the livelihood of the community depending on cement factories, agricultural and building construction works. Running special school for child labour also.</li>
				<br>
				<br>
				<li><img src="include/images/services/image003.jpg" width="100" height="120" alt="firefox" class="float-left" /></a><b> Speech Therapy unit: </b>
                    Along with special school speech therapy unit also running  for the deaf children to improve their voice/vocabulary. </li>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<li><b><img src="include/images/services/image004.jpg" width="100" height="120" alt="firefox" class="float-right" /></a> Counselling and career guidance cell:  </b>				
					Maintaining Counselling center for child labour, Disability, HIV/AIDS. and for family disputes with the coordination of women and child dept. </li>				
				<br>
				<br>
				<li><b><img src="include/images/services/image005.jpg" width="100" height="120" alt="firefox" class="float-left" /></a> Livelihoods training to poor and needy community:   </b>
					Income generation programmes like Readymade Garments manufacturing, cutting & tailoring, fashion designing, computers, soft toys making, fabric painting, knitting, entrepreneur development programmes etc for youth and women.</li>
				<br>
				<br>
				<br>
				<br><br>
				<br>
				<li><b><img src="include/images/services/image006.jpg" width="100" height="120" alt="firefox" class="float-right" /></a>	Formation and nurturing of SHGs (Women, youth, Disability etc.):  </b>
			        Formation and nurturing of self help groups of woman, youth, disable, formers, and  persons living with HIV/AIDS to promote sustainable livelihoods.working with line departments.</li>
				<br>
				<br>
				<li><b> <img src="include/images/services/image007.jpg" width="100" height="120" alt="firefox" class="float-left" /></a>Trainings on Leadership, personality development, gender sensitization to the youth and adolescent girls. :  </b>
					Trainings/works shops/ seminars for youth and adolescent girls on various issues like leadership qualities, personality development, gender sensitization etc. </li>
				<br>
				<br>
				<br>
				<br><br>
				<br>
				<li><b> Awareness campaigns on.  </b>
					<ol>
						<br>
						<br>
					<li><img src="include/images/services/image008.jpg" width="100" height="120" alt="firefox" class="float-right" /></a>Prevention of HIV/AIDS
                    Preventing new HIV infections, especially
                    among youth and others at high risk of infections,
                    Helping communities provide care and support 
                    for the children, families and communities        
                    affected by HIV/AIDS</li>

                     <br>
					<br>
					<li><img src="include/images/services/image009.jpg" width="100" height="120" alt="firefox" class="float-left" /></a>Disability:             
                                                Help the persons with disability to develop 
                and emotionally fulfilling inter personnel  
    relationship with others in the society, enhance education opportunities at all level  and in all forms.</li>


<br>
				<br>
				<br><br>
				<br>
						<br>
<li><img src="include/images/services/image010.jpg" width="100" height="120" alt="firefox" class="float-right" /></a>Public education programmes 
Conducting career guidance programmes for school/ college students for their better opportunities and seminars on leader ship qualities, personality development etc., for youth.</li>


<br>
				<br>
<li><img src="include/images/services/image011.jpg" width="100" height="120" alt="firefox" class="float-left" /></a>Health and sanitation 

                                             Awareness on various health issues among the rural public 

</li>


<br>
				<br>
				<br>
						<br><br>
						<br><br>
				<br>
<li><img src="include/images/services/image012.jpg" width="100" height="120" alt="firefox" class="float-right" /></a>Environment 
                     Conducting work shops, seminars on
                    Importance of environment.</li>  
                       
<br>
				<br>
<li><img src="include/images/services/image013.jpg" width="100" height="120" alt="firefox" class="float-left" /></a>Literacy:
                                                     
Creation of confidence and awareness                       
                                       among members of SHGs regarding their   
                                         status, health, nutrition, education, sanitation and hygiene ,legal rights, economic upliftment and other social, economic and political issues.</li>


<br>
				<br><br>
				<br><br>
				<br>
                <li> <img src="include/images/services/image014.jpg" width="100" height="120" alt="firefox" class="float-right" /></a>Other Services :

                 The President of the organization and its staff  
                 extending their Services as recourse persons to the                      
                 line departments like women and child welfare,
                 NREGS,DWMA,DRDA,VELUGU/IKP,
                 Dist.youth Empowerment, Education etc.   </li>
			</ol>
			</ul>
			</div>
		</div
		<!--End content-wrap-->
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