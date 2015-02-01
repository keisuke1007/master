<? session_start(); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/php/connection.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/php/break.php"); ?>
<?
/*=========データ受渡チェック=========================================================================================*/
if(empty($_POST["name1_1"]) or empty($_POST["name1_2"]))
{ $err1 = "<span style='color:#CB070D;'>" . "氏名が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["name2_1"]) or empty($_POST["name2_2"]))
{ $err2 = "<span style='color:#CB070D;'>" . "フリガナが入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["address1"]))
{ $err3 = "<span style='color:#CB070D;'>" . "メールアドレスが入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["address2"]))
{ $err4 = "<span style='color:#CB070D;'>" . "メールアドレス確認が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["password1"]))
{ $err5 = "<span style='color:#CB070D;'>" . "パスワードが入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["password2"]))
{ $err6 = "<span style='color:#CB070D;'>" . "パスワード確認が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["privacy"]))
{ $err7 = "<span style='color:#CB070D;'>" . "個人情報保護方針にチェックがついていません。" . "</span>" . "<br>";}


/*=========データ整合性チェック=========================================================================================*/

if($_POST["address1"] !== $_POST["address2"])
{ $err8 = "<span style='color:#CB070D;'>" . "メールアドレスとメールアドレス確認が一致しません。" . "</span>" . "<br>";}
if($_POST["password1"] !== $_POST["password2"])
{ $err9 = "<span style='color:#CB070D;'>" . "パスワードとパスワード確認が一致しません。" . "</span>" . "<br>";}



?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<? if($err1 != NULL || $err2 != NULL || $err3 != NULL|| $err4 != NULL|| $err5 != NULL|| $err6 != NULL|| $err7 != NULL|| $err8 != NULL || $err9 != NULL) {
/*========エラー表示用=============================================*/
?>
    
    
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
        <h2>会員登録</h2>
        <h3 class="mb-20">無料！簡単登録！</h3>
    
<!-- 応募者登録フォーム -->
<form action="/member/mem_registration1_conf.php" method="post" enctype="multipart/form-data" id="form1">

<table cellspacing="0" cellpadding="0" class="mb-20">
  <tr>
    <th scope="row">氏名<span>必須</span></th>
    <td><label><input name="name1_1" type="text" id="name1_1" size="20" maxlength="30" placeholder="姓"></label> <input name="name1_2" type="text" id="name1_2" size="20" maxlength="30" placeholder="名"></label><br><? echo $err1; ?></td>
  </tr>
  <tr>
    <th scope="row">フリガナ<span>必須</span></th>
    <td><label><input name="name2_1" type="text" id="name2_1" size="20" maxlength="30" placeholder="セイ"></label> <label><input name="name2_2" type="text" id="name2_2" size="20" maxlength="30" placeholder="メイ"></label><br><? echo $err2; ?></td>
  </tr>
  <tr>
    <th scope="row">メールアドレス<span>必須</span></th>
    <td><label><input name="address1" type="text" id="address1" size="40" maxlength="40"></label><br><? echo $err3; ?><? echo $err8; ?></td>
  </tr>
  <tr>
    <th scope="row">メールアドレス確認<span>必須</span></th>
    <td><label><input name="address2" type="text" id="address2" size="40" maxlength="40"></label><br><? echo $err4; ?></td>
  </tr>
  <tr>
    <th scope="row">パスワード<span>必須</span></th>
    <td><label><input name="password1" type="password" id="password1" size="20" maxlength="20"></label><br><? echo $err5; ?><? echo $err9; ?></td>
  </tr>
  <tr>
    <th scope="row">パスワード確認<span>必須</span></th>
    <td><label><input name="password2" type="password" id="password2" size="20" maxlength="20"></label><br><? echo $err6; ?></td>
  </tr>
  <tr>
    <th scope="row">個人情報の利用<span>必須</span></th>
    <td><label for="privacy"><input type="checkbox" name="privacy" id="privacy" value="ture"></label><a href="/privacy_policy/index.php" target="_blank">プライバシーポリシー</a>に同意する<br><? echo $err7; ?></td>
  </tr>
</table>
    <p class="note">サービスお申し込みの前に、<a href="/terms/index.php" target="_blank">利用規約</a>をご一読の上、同意いただけますようお願いいたします。お申し込みには、規約への同意が必要となります。</p>
    <div class="submit"><input type="submit" id="submit_confirm" value="規約に同意して確認へ"></div>


<? } else {
/*========登録確認=============================================*/
?>

<title>会員登録情報確認 | 完全無料の求人サイト ジョブチェンジ</title>
<meta name="description" content="求職者と企業を結ぶ全てのご利用が無料の求人サイト「ジョブチェンジ」の新規会員登録ページ。求人検索も無料。企業の求人情報の掲載無料。採用時の成果報酬も不要。">
<meta name="keywords" content="会員登録情報確認,転職サイト,求人サイト,無料求人,無料掲載,正社員,契約社員,派遣社員,アルバイト,パート,ジョブチェンジ">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/style_member.css">
</head>
<body>

<div id="wrapper">

    <div id="header_title">
        <h1 class="f11">会員登録情報確認 | 完全無料の求人サイト ジョブチェンジ</h1>
    </div><!--header_title end  -->

    <!-- header -->
    <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/header.php"); ?>
    <div id="breadcrumb">
        <ul>
            <li><a href="/index.php">ジョブチェンジ トップ</a></li>
            <li><a href="/member/mem_registration1.php">会員登録</a></li>
            <li><strong>会員登録情報確認</strong></li>
        </ul>
    </div>
    
    <!-- content start -->
    <div id="content" class="clearfix">
        <h2>会員登録情報確認</h2>
        <h3 class="mb-20">無料！簡単登録！</h3>

<p class="mb-10">以下の内容で登録します。</p>
<form action="/member/mem_registration1_send.php" method="post" enctype="multipart/form-data" id="form1">
<table cellspacing="0" cellpadding="0" class="mb-20">
  <tr>
    <th scope="row">氏名</th>
    <td><? echo $_POST["name1_1"] ?> <? echo $_POST["name1_2"] ?></td>
  </tr>
  <tr>
    <th scope="row">フリガナ</th>
    <td><? echo $_POST["name2_1"] ?> <? echo $_POST["name2_2"] ?></td>
  </tr>
  <tr>
    <th scope="row">メールアドレス</th>
    <td><? echo $_POST["address1"] ?></td>
  </tr>
  <tr>
    <th scope="row">パスワード</th>
    <td><? echo $_POST["password1"]; ?></td>
  </tr>
</table>
    
    <div class="submit"><input type="submit" id="submit_confirm" value="登録"></div>
    
<!-- データセット	 -->
<input type="hidden" name="name1_1" value="<? echo $_POST["name1_1"] ?>"/>
<input type="hidden" name="name1_2" value="<? echo $_POST["name1_2"] ?>"/>
<input type="hidden" name="name2_1" value="<? echo $_POST["name2_1"] ?>"/>
<input type="hidden" name="name2_2" value="<? echo $_POST["name2_2"] ?>"/>
<input type="hidden" name="address1" value="<? echo $_POST["address1"] ?>"/>
<input type="hidden" name="password1" value="<? echo $_POST["password1"] ?>"/>

</form>

<? } ?>

    
         </div><!--content end -->

    <!-- footer -->
    <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/footer.php"); ?>
