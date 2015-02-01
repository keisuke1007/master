<?php session_start(); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/php/connection.php") ;?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/php/break.php") ;?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/php/login.php") ;?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>完全無料の求人サイト ジョブチェンジ</title>
<meta name="description" content="求職者と企業を結ぶ全てのご利用が無料の求人サイト「ジョブチェンジ」。求人検索も無料。企業の求人情報の掲載無料。採用時の成果報酬も不要。">
<meta name="keywords" content="転職サイト,求人サイト,無料求人,無料掲載,正社員,契約社員,派遣社員,アルバイト,パート,ジョブチェンジ">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/style_index.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>

<div id="wrapper">

    <div id="header_title">
        <h1 class="f11">完全無料の求人サイト ジョブチェンジ</h1>
    </div><!--header_title end  -->

    <!-- header -->
    <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/header.php"); ?>
    
    <!-- content start -->
    <div id="content" class="clearfix">
    
        <div id="con_right">
            <? if(empty ($_SESSION["id"])) {?>
            <div class="btn_mr mb-20"><a href="/member/mem_registration1.php">新規会員登録(無料)</a></div>
            <div class="top_login mb-20">
                <h3 class="f15">ログイン</h3>
                <div class="top_login_box">
                    <form accept-charset="UTF-8" action="index.php" class="" id="" method="post">
                        <label for="user_mail">メールアドレス</label><input id="user_mail" class="mb-10" name="mail" size="30" type="text" placeholder="メールアドレス">
                        <label for="user_password">パスワード</label><input id="user_password" name="pw" size="30" type="password" placeholder="パスワード">
                        <a href="#" class="forget_password f11">パスワードを忘れた方はこちら</a>
                        <div class="btn_login_box mt-10">
                            <label class="pt5"><input checked="checked" id="user_auto_login_flg" name="" type="checkbox" value="1"><span class="f11">次回から自動でログインする</span></label>
                            <input class="btn-std btn-login mrl-auto mt-5 mb-10 pt-5 pb-5" name="commit" type="submit" value="ログイン">
                        </div>
                    </form>
                </div>
            </div>
            
            <? } else { ?>
            <div class="top_login mb-20">
                <form accept-charset="UTF-8" action="index.php" class="" id="" method="post">
                    <p class="usr_name mb-10"><? echo $_SESSION["name"]; ?>さん</p>
                    <div class="btn_mypage_logout_box clearfix">
                        <p class="btn_mypage"><a href="/member/mem_mypage.php">マイページへ</a></p>
                        <p class="btn_logout"><input type="submit" value="ログアウト"></p>
                    </div>
                </form>
            </div>

            <? } ?>
        </div><!--con_right -->
        
        <div id="con_left">
            
            <? include($_SERVER['DOCUMENT_ROOT'] ."/php/job_search.php"); ?>
            
            <div class="recommend_contents">
                <div class="recommend_box">
                    <a href="#">
                        <div class="company_img"><img src="images/company/test/img_index.jpg" width="620" height="300" alt=""></div>
                        <div class="company_info">
                            <h2>【WEBデザイナー（アシスタントマネージャー）】自社サービスのデザイン関連業務の全てに関わる◎</h2>
                            <div class="company_name">損保ジャパン日本興亜ひまわり生命</div>
                            <div class="company_income_location">
                                <p class="income">年収：450万円〜580万円</p>
                                <p class="location">勤務地：東京/大阪/宮城/福岡</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div><!-- /recommend_contents -->
            
            <div class="about_site">
                <h3>完全無料の求人サイト ジョブチェンジ</h3>
                <p>ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。</p>
            </div>

        </div><!--con_left -->
    </div><!--content end -->

    <!-- footer -->
    <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/footer.php"); ?>
