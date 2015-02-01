<?php session_start(); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/php/connection.php") ;?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/php/break.php") ;?>

<?
header ("Content-type: text/html; charset=utf-8");

if($_POST["out"] == "logout"){
	$_SESSION = array();//初期化
	session_destroy();//セッションを破棄
}

//受渡し
$mail = $_POST["com_mail"];
$pass = $_POST["com_pass"];
//取得した変更データを取り出し
$sql = "SELECT * FROM company_basic WHERE company_mail='" . $mail . "' and password='" .$pass. "'";
$res = mysql_query($sql, $conn);
$row = mysql_fetch_array($res);

$_SESSION["com_id"] = $row["id"];
$_SESSION["com_name"] = $row["company_name"];

?>



<? if(empty ($_SESSION["com_id"])) { ?>


<form action="admin.php" method="post" enctype="multipart/form-data" id="form1">
<table width="250" border="0" cellspacing="2" cellpadding="4">
  <tr>
    <th width="102" scope="row">メールアドレス</th>
    <td width="120"><input name="com_mail" type="text" id="mail" size="20" maxlength="30"  /></td>
  </tr>
  <tr>
    <th scope="row">パスワード</th>
    <td><input name="com_pass" type="password" id="pw" size="20" maxlength="30"  /></td>
  </tr>
   <tr>
    <th colspan="3" scope="row"><input type="submit" value="ログイン"></th>
    </tr>
</table>
</form>
<a href="company.php">新規登録</a><br />

<? } else {?>


<table width="250" border="0" cellspacing="2" cellpadding="4">
  <tr>
    <th width="250" scope="row"><? echo $_SESSION["com_name"]; ?>様</th>
  </tr>
  <tr>
    <th scope="row"><a href="job_input.php">求人募集ページへ</a></th>
  </tr>
  <tr>
    <th scope="row"><form action="admin.php" method="post"><input type="hidden" name="out" value="logout"/>
	<input type="submit" value="ログアウト"/>
	</form></th>
  </tr>
</table>

<? } ?> 
