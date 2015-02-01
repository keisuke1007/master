<? session_start(); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/php/connection.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/php/break.php"); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>会員登録 | 完全無料の求人サイト ジョブチェンジ</title>
<meta name="description" content="求職者と企業を結ぶ全てのご利用が無料の求人サイト「ジョブチェンジ」の新規会員登録ページ。求人検索も無料。企業の求人情報の掲載無料。採用時の成果報酬も不要。">
<meta name="keywords" content="新規会員登録,転職サイト,求人サイト,無料求人,無料掲載,正社員,契約社員,派遣社員,アルバイト,パート,ジョブチェンジ">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/style_member.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>

<div id="wrapper">

    <div id="header_title">
        <h1 class="f11">会員登録 | 完全無料の求人サイト ジョブチェンジ</h1>
    </div><!--header_title end  -->

    <!-- header -->
    <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/header.php"); ?>
    <div id="breadcrumb">
        <ul>
            <li><a href="/index.php">ジョブチェンジ トップ</a></li>
            <li><strong>会員登録</strong></li>
        </ul>
    </div>
    
    <!-- content start -->
    <div id="content" class="clearfix">

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
        
        </div><!--content end -->

    <!-- footer -->
    <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/footer.php"); ?>
