<? session_start(); ?>
<? include("connection.php"); ?>
<? include("break.php"); ?>

<?

/*データベース読み込み
==================================================================================
*/
$get_key = $_SESSION["id"];

$max_row = 10;
	
if(empty($_GET["page_no"]))
{ $page = 1; }
else
{ $page = $_GET["page_no"]; }
$limit = ($page - 1) * $max_row;
	
	
$sql = "SELECT count(*) as count_row FROM company";
$res = mysql_query($sql,$conn);
$row = mysql_fetch_array($res);
$count_row = $row["count_row"];
	
$sql = "SELECT * FROM company order by time desc LIMIT $limit,$max_row";
$res = mysql_query($sql, $conn); 

?>

<?
/*
=========企業情報一覧表示========================================================
取得した全行を繰り返し表示
*/
while($row = mysql_fetch_array($res)){
$img = "admin/main_img/". $row["image1"];
?>
  <table width="1000" border="0">
    <tr>
      <th scope="row" width="150">企業名</th>
      <td><? echo $row["company_name"]?></td>
    </tr>
    <tr>
      <th scope="row" width="150">求人タイトル</th>
      <td><? echo $row["title"]?></td>
    </tr>
    <tr>
      <th scope="row">募集職種</th>
      <td><? echo $row["job_opening"]?></td>
    </tr>
    <tr>
      <th scope="row">職種カテゴリ</th>
      <td><? echo $row["job_category"] ?></td>
    </tr>
    <tr>
      <th scope="row">待遇・条件</th>
      <td><? echo $row["treatment"]; ?></td>
    </tr>
    <tr>
      <th scope="row">雇用形態</th>
      <td><? echo $row["e_status"]; ?></td>
    </tr>
    <tr>
      <th scope="row">メイン画像</th>
      <td><img src="<?php echo $img; ?>" alt="image" width="250" height="250" /></td>
    </tr>
    <tr>
      <th scope="row">勤務地</th>
      <td><? echo $row["location"] ?></td>
    </tr>
	<tr>
      <th scope="row">勤務時間</th>
      <td><? echo $row["time"] ?></td>
    </tr>
	<tr>
      <th scope="row">給与</th>
      <td><? echo $row["salary"] ?></td>
    </tr>
</table>
<a href="job_detail.php?upd_key=<?php echo $row["id"]; ?>">詳細情報</a>
<?
}
?>
</table>
<?php 
mysql_free_result($res);
?>
<br />
<?
if($page!=1) {
?>
<a href="job_list.php?page_no=1=<?php print $page ?>">最初へ</a>
<? } ?>
<? 
	if($page!=1){
?>
<a href="job_list.php?page_no=<?php print $page - 1;?>">前へ</a>
<? } ?>
<? 
$loop_page = (int)($count_row / $max_row) + 1;
for($i=1;$i<=$loop_page;$i++)
{ print "<a href='job_list.php?page_no=" . $i . "'>" . $i . "</a> "; }
?>
<?php 
	if(($page*$max_row)<$count_row){
?>
<a href="job_list.php?page_no=<?php print $page + 1;?>">次へ</a>
<?php } ?>
<?php
if(($page*$max_row)<$count_row) {
?>
<a href="job_list.php?page_no=<?php print ceil($count_row / $max_row);?>=<?php print $page ?>">最後へ</a>
<?php } ?>

