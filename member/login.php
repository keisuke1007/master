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

<!--

if(empty ($_SESSION["id"])) {


<form action="login.php" method="post" enctype="multipart/form-data" id="form1">
<table width="250" border="0" cellspacing="2" cellpadding="4">
  <tr>
    <th width="102" scope="row">メールアドレス</th>
    <td width="120"><input name="mail" type="text" id="mail" size="20" maxlength="30"  /></td>
  </tr>
  <tr>
    <th scope="row">パスワード</th>
    <td><input name="pw" type="password" id="pw" size="20" maxlength="30"  /></td>
  </tr>
   <tr>
    <th colspan="3" scope="row"><input type="submit" value="ログイン"></th>
    </tr>
</table>
</form>
<a href="mem/mem_registration1.php">新規登録</a><br />

 } else {


<table width="250" border="0" cellspacing="2" cellpadding="4">
  <tr>
    <th width="250" scope="row"><?echo $row["name"] ?>様</th>
  </tr>
  <tr>
    <th scope="row"><a href="mem_mypage.php">マイページへ</a></th>
  </tr>
  <tr>
    <th scope="row"><form action="login.php" method="post"><input type="hidden" name="out" value="logout"/>
	<input type="submit" value="ログアウト"/>
	</form></th>
  </tr>
</table>

 } 

-->