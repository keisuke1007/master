
<?php
	//データベースへの接続
	$host = "mysql903.xserver.jp" ;
	if ( !$conn = mysql_connect ( $host, "airship_job", "kesuike" ))
	{
		die("接続エラー" . "<br />");
	}
		mysql_select_db("airship_job",$conn);
		mysql_query('SET NAMES utf8');
?>


<?php
	//データベースへの接続
	//$host = "localhost" ;
	//if ( !$conn = mysql_connect ( $host, "root", "" ))
	//	{
	//		die("接続エラー" . "<br />");
	//	}
	//	mysql_select_db("job",$conn);
	//	mysql_query('SET NAMES utf8');
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />