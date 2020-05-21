<?php
$conn=mysql_connect("localhost","root","mypass");
if(!$conn)die(mysql_error());
mysql_select_db("doyouknow");
