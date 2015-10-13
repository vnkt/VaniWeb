<?PHP
require_once("./include/membersite_config.php");
if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("admin.php");
   }
}
?>
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
			<div id="search-box"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
		<h3> Event entering </h3>
<?php
require_once "formvalidator.php";
$show_form=true;
if(isset($_POST['submitted']))
    {
    $validator = new FormValidator();
    $validator->addValidation("name","req","Please fill in Name");
    $validator->addValidation("date","req","Please fill in Email");
	$validator->addValidation("details","req","Please fill in User name");
	
    if($validator->ValidateForm())
    {
		
		$con = mysql_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("vani", $con);
		$sql="INSERT INTO detail (event, date, details)VALUES('$_POST[name]','$_POST[date]','$_POST[details]')";

		if (!mysql_query($sql,$con))	
		{
			die('Error: ' . mysql_error());
		}
		mysql_close($con);
		echo "<B> Successfully registered </B>";
		header('Location: admin.php');
    }
    
	else
    {
        echo "<B>Validation Errors:</B>";
 
        $error_hash = $validator->GetErrors();
        foreach($error_hash as $inpname => $inp_err)
        {
          echo "<p>$inpname : $inp_err</p>\n";
        }
    }
}

if(true == $show_form)
{
?>
		
		<div id="main">
		<form name = "register" id='register' action = '<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' >
		<p>
		
		<input type='hidden' name='submitted' id='submitted' value='1'/>
		<label for='name' >Event Name : </label>
		<input type='text' name='name' id='name' maxlength="15" />
		
		<label for='date' >Date * :</label>
		<input type='text' name='date' id='date' maxlength="7" />
 
		<label for='details' >Details * :</label>
		<textarea name='details' id='details' cols='250' rows ='5' maxlength="750" />
		</textarea>
 
		<br />
		<br />	
		<input type='submit' name='Submit' value='Submit' />
		</p>
		</form>
		</div>
		</div>
<?PHP
}
?>
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