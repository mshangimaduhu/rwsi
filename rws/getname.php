<?php
include 'config.php';


$result = mysql_fetch_row( mysql_query( "Select Organization_Name from ".$_GET['tbl']." where Organization_Id = '".$_GET['id']."'" ) ) ;

echo $result[0] ;