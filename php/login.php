<?

if($_POST["out"] == "logout"){
	$_SESSION = array();//初期化
	session_destroy();//セッションを破棄
}

//受渡し
$mail = $_POST["mail"];
$pass = $_POST["pw"];
//取得した変更データを取り出し
$sql = "SELECT * FROM mem_basic WHERE mail_address='" . $mail . "' and pass='" .$pass. "'";
$res = mysql_query($sql, $conn);
$row = mysql_fetch_array($res);

$_SESSION["id"] = $row["id"];
$_SESSION["name"] = $row["name"];

?>