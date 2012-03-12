<?php

// database connection parameters
/* --CONFIG-- */ define ("DB_ServerHost", "localhost");        // MySQL hostname
/* --CONFIG-- */ define ("DB_ServerPort", "");                 // MySQL port - leave blank for default port 
/* --CONFIG-- */ define ("DB_ServerUser", "root");          // MySQL user// napacana_web
/* --CONFIG-- */ define ("DB_ServerPassword", "3YhmqGkahXKi");     // MySQL password //3YhmqGkahXKi
/* --CONFIG-- */ define ("DB_DbDatabase", "yasound_teaser");		       // MySQL database name



// error messages
$strConnectionError = "<font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><b>Error: the server was unable to connect to the database.</b><br>You may try to <a href='javascript:location.reload()'>reload the page</a> or contact your Intranet administrator.</font><div id=\"close\"></div>";
$strQueryError = "<font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><b>An error occured while communicating with the database.</b><br>You may try to <a href='javascript:location.reload()'>reload the page</a> or contact your Intranet administrator.</font><br><div id=\"close\"></div>";

// connect to the database
if ( DB_ServerPort == "" ) {
	@mysql_connect(DB_ServerHost, DB_ServerUser, DB_ServerPassword)
	or die($strConnectionError);
} else { 
	@mysql_connect(DB_ServerHost . ":" . DB_ServerPort, DB_ServerUser, DB_ServerPassword)
	or die($strConnectionError);
}

@mysql_select_db( DB_DbDatabase ) or die($strConnectionError);

mysql_query("SET NAMES 'utf8'");
?>