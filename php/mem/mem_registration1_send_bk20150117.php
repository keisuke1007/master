<? session_start(); ?>
<? include("../connection.php"); ?>
<? include("../break.php"); ?>


<?
/*=========データセット===============================================*/


$name = $_POST["name1_1"] . $_POST["name1_2"];
$furigana = $_POST["name2_1"] . $_POST["name2_2"];
$mail_address = $_POST["address1"];
$pass = $_POST["password1"];
$date = date("Y-n-j H:i:s");

//データ入力
$sql = "INSERT INTO mem_basic(date,name,furigana,mail_address,pass) VALUES('$date','$name','$furigana','$mail_address','$pass')";
mysql_query($sql, $conn) or die("登録できませんでした" . "<br>");


$sql2 = "SELECT * FROM mem_basic WHERE mail_address ='" . $mail_address . "'";
$res2 = mysql_query($sql2,$conn);
$row = mysql_fetch_array($res2);

$id = $row["id"];

//データ入力
$sql3 = "INSERT INTO mem_detail(id) VALUES('$id')";
mysql_query($sql3, $conn) or die("登録できませんでした" . "<br>" );
echo ("登録しました" . "<br>");


$_SESSION["id"] = $id;

?>

<a href="mem_refistration2.php">詳細入力</a>