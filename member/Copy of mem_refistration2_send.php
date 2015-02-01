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
$sql = "UPDATE mem_detail SET " . "a_d = '" . $_POST["a_d"] . "'," . "month = '" . $_POST["month"] . "'," . "day = '" . $_POST["day"] . "'," . "sex = '" . $_POST["gend"] . "'," . "tel = '" . $_POST["tel"] . "'," . "post = '" . $_POST["post"] . "'," . "prefecture = '" . $_POST["prefecture"] . "'," . "cities = '" . $_POST["cities"] . "'," . "school1 = '" . $_POST["school1"] . "'," . "school2 = '" . $_POST["school2"] . "'," . "school3 = '" . $_POST["school3"] . "'," . "toeic = '" . $_POST["toeic"] . "'," . "tpefl = '" . $_POST["tpefl"] . "'," . "qua = '" . $_POST["qua"] . "'," . "ann = '" . $_POST["ann"] . "'," . "career1_y = '" . $_POST["career1_y"] . "'," . "career1_m = '" . $_POST["career1_m"] . "'," . "career2_y = '" . $_POST["career2_y"] . "'," . "career2_m = '" . $_POST["career2_m"] . "'," . "job1 = '" . $_POST["job1"] . "'," . "job2 = '" . $_POST["job2"] . "'," . "job3 = '" . $_POST["job3"] . "'," . "job4 = '" . $_POST["job4"] . "'," . "job5 = '" . $_POST["job5"] . "'," . "job6 = '" . $_POST["job6"] . "'," . "job7 = '" . $_POST["job7"] . "'," . "job8 = '" . $_POST["job8"] . "'," . "job9 = '" . $_POST["job9"] . "'," . "job10 = '" . $_POST["job10"] . "'," . "pr1 = '" . $_POST["pr1"] . "'," . "pr2 = '" . $_POST["pr2"] . "'," . "job_career = '" . $_POST["job_career"] . "' WHERE id = '" . $get_key . "'";

mysql_query($sql, $conn) or die("変更できませんでした" . $sql);
echo ("登録しました");


?>
