<? session_start(); ?>
<? include($_SERVER['DOCUMENT_ROOT'] ."/php/connection.php"); ?>
<? include($_SERVER['DOCUMENT_ROOT'] ."/php/break.php"); ?>

<?

/*データベース読み込み
==================================================================================
*/
$get_key = $_GET["detail_key"];

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

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>求人を探す | 完全無料の求人サイト ジョブチェンジ</title>
<meta name="description" content="求職者と企業を結ぶ全てのご利用が無料の求人サイト「ジョブチェンジ」。求人検索も無料。企業の求人情報の掲載無料。採用時の成果報酬も不要。">
<meta name="keywords" content="転職サイト,求人サイト,無料求人,無料掲載,正社員,契約社員,派遣社員,アルバイト,パート,ジョブチェンジ">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/style_search.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/jquery/jquery.research.toggle.js"></script>
</head>
<body class="search">

<div id="wrapper">

    <div id="header_title">
        <h1 class="f11">求人検索 | 完全無料の求人サイト ジョブチェンジ</h1>
    </div><!--header_title end  -->
    
    <!-- header -->
    <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/header.php"); ?>
    <div id="breadcrumb">
        <ul>
            <li><a href="/index.php">ジョブチェンジ トップ</a></li>
            <li><strong>求人検索</strong></li>
        </ul>
    </div>
    
    <div class="search_criteria clearfix">
        <div class="search_criteria_list">
            <dl class="area">
                <dt>勤務地：</dt>
                <dd><a href="#">東京</a></dd>
            </dl>
            <dl class="job">
                <dt>職種：</dt>
                <dd><a href="#">Webデザイナー・コーダー</a></dd>
            </dl>
            <dl class="treatment">
                <dt>待遇・条件：</dt>
                <dd><a href="#">すぐに働ける（急募）</a>、<a href="#">未経験者歓迎</a></dd>
            </dl>
            <dl class="e_status">
                <dt>雇用条件：</dt>
                <dd><a href="#">正社員</a></dd>
            </dl>
        </div>
        <div class="search_criteria_btn">
            <span class="ic_search">検索条件を変更する</span>
        </div>
        <? include($_SERVER['DOCUMENT_ROOT'] ."/php/job_search.php"); ?>
    </div>
    
    <div class="search_count">検索結果<span class="client_num">1396</span>企業<span class="job_num">5495</span>求人</div>
    
    <!-- content start -->
    <div id="content" class="clearfix">

<?
/*
=========企業情報一覧表示========================================================
取得した全行を繰り返し表示
*/
while($row = mysql_fetch_array($res)){
$img = "/php/admin/main_img/". $row["image1"];
?>
        
        <div class="search_result">
            <div class="search_result_box">
                <h2><a href="/detail/index.php?detail_key=<?php echo $row["id"]; ?>"><? echo $row["title"]?></a></h2>
                <div class="company_info">
                    <p class="company_name"><a href="/detail/company.php?detail_key=<?php echo $row["id"]; ?>"><? echo $row["company_name"]?></a></p>
                    <div class="company_outline">
                        <dl class="capital">
                            <dt>資本金：</dt>
                            <dd><? echo $row["capital"]?>万円</dd>
                        </dl>
                        <dl class="founding_year">
                            <dt>設立年月：</dt>
                            <dd><? echo $row["establishment1"]?>年 <? echo $row["establishment2"]?>月</dd>
                        </dl>
                        <dl class="employee_number">
                            <dt>従業員数：</dt>
                            <dd><? echo $row["number_of_employees"]?>人</dd>
                        </dl>
                    </div>
                    <div class="job_offer">
                        <div class="clearfix">
                            <div class="img_job"><a href="/detail/index.php?detail_key=<?php echo $row["id"]; ?>"><img src="<?php echo $img; ?>" width="400" height="193" alt=""></a></div>
                            <p><? echo nl2br($row["description"])?></p>
                        </div>
                        <div class="hiring_requirements">
                            <table>
                                <tr>
                                    <th>募集職種</th>
                                    <td><? echo $row["job_opening"]?></td>
                                </tr>
                                <tr>
                                    <th>雇用形態</th>
                                    <td><? echo $row["e_status"]; ?></td>
                                </tr>
                                <tr>
                                    <th>応募資格</th>
                                    <td><? echo  nl2br($row["requirements"])?></td>
                                </tr>
                                <tr>
                                    <th>給与</th>
                                    <td><? echo $row["salary"] ?></td>
                                </tr>
                                <tr>
                                    <th>勤務地</th>
                                    <td><? echo $row["location"] ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="job_offer_detail_btn"><a href="/detail/index.php?detail_key=<?php echo $row["id"]; ?>">この求人の詳細を見る</a></div>
                    </div>
                </div>
            </div>

        </div><!-- /search_result -->
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
<a href="/php/job_list.php?page_no=1=<?php print $page ?>">最初へ</a>
<? } ?>
<? 
	if($page!=1){
?>
<a href="/php/job_list.php?page_no=<?php print $page - 1;?>">前へ</a>
<? } ?>
<? 
$loop_page = (int)($count_row / $max_row) + 1;
for($i=1;$i<=$loop_page;$i++)
{ print "<a href='/php/job_list.php?page_no=" . $i . "'>" . $i . "</a> "; }
?>
<?php 
	if(($page*$max_row)<$count_row){
?>
<a href="/php/job_list.php?page_no=<?php print $page + 1;?>">次へ</a>
<?php } ?>
<?php
if(($page*$max_row)<$count_row) {
?>
<a href="/php/job_list.php?page_no=<?php print ceil($count_row / $max_row);?>=<?php print $page ?>">最後へ</a>
<?php } ?>

    
    </div><!--content end -->

    <!-- footer -->
    <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/footer.php"); ?>
