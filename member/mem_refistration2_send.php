<? session_start(); ?>
<? include("../connection.php"); ?>
<? include("../break.php"); ?>
<style type="text/css">
<!--
.style1 {color: #CB070D}
-->
</style>
<?
//セッションデータ受け渡し	
$get_key = $_SESSION['id'];

$sql = "SELECT * FROM mem_detail WHERE id='" . $get_key . "'";
$res = mysql_query($sql,$conn);
$row = mysql_fetch_array($res);


//変更SQLの発行
$sql = "UPDATE mem_detail SET " . "a_d = '" . $_POST["a_d"] . "'," . "month = '" . $_POST["month"] . "'," . "day = '" . $_POST["day"] . "'," . "gend = '" . $_POST["gend"] . "'," . "tel = '" . $_POST["tel"] . "'," . "post = '" . $_POST["post"] . "'," . "prefecture = '" . $_POST["prefecture"] . "' WHERE id = '" . $get_key . "'";

mysql_query($sql, $conn) or die("変更できませんでした" . $sql);
echo ("登録しました");


?>
