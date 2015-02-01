<?php include("../connection.php"); ?>
<?php include("../break.php"); ?>


<?
/*=========データセット===============================================*/


$name = $_POST["name1_1"] . $_POST["name1_2"];
$furigana = $_POST["name2_1"] . $_POST["name2_2"];
$mail_address = $_POST["address1"];
$pass = $_POST["password1"];
$date = date("Y-n-j H:i:s");

//データ入力
$sql = "INSERT INTO mem_basic(date,name,furigana,mail_address,pass) VALUES('$date','$name','$furigana','$mail_address','$pass')";
mysql_query($sql, $conn) or die("登録できませんでした" . $_POST["name1_1"] . "<br>" . $sql);
echo ("登録しました" . "<br>");

?>
