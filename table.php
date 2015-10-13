<?php
$host="localhost"; // Host name
$username="390746"; // Mysql username
$password="notthateasy"; // Mysql password
$db_name="390746"; // Database name
$tbl_name="vani"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="Create Table vani (id_user INT NOT NULL AUTO_INCREMENT ,
            name VARCHAR( 128 ) NOT NULL ,
            email VARCHAR( 64 ) NOT NULL ,
            username VARCHAR( 16 ) NOT NULL ,
            password VARCHAR( 32 ) NOT NULL ,
            id VARCHAR( 64 ) NOT NULL ,
            PRIMARY KEY ( id_user ))";

mysql_query($sql);
			
$sql="alter table vani add unique(email)";
mysql_query($sql);
$sql="alter table vani add unique(username)";
 mysql_query($sql);
 ?>
 
 create table details (id INT NOT NULL AUTO_INCREMENT,event VARCHAR(128) NOT NULL,date DATE,details VARCHAR(600) NOT NULL))