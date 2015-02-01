<? session_start(); ?>
<? include($_SERVER['DOCUMENT_ROOT'] ."/php/connection.php"); ?>
<? include($_SERVER['DOCUMENT_ROOT'] ."/php/break.php"); ?>


<?

//変更データのキー取得
$get_key = $_GET["detail_key"];

//詳細データのSQL
$sql = "SELECT * FROM company WHERE id='" . $get_key . "'";
$res = mysql_query($sql,$conn);

//取得した変更データを取り出し
$row = mysql_fetch_array($res);


//テキスト
$company_pr = replace_br($row["company_pr"]);
$background = replace_br($row["background"]);
$description = replace_br($row["description"]);
$requirements = replace_br($row["requirements"]);
$welfare = replace_br($row["welfare"]);
$process = replace_br($row["process"]);
$freedom1 = replace_br($row["freedom1"]);
$freedom2 = replace_br($row["freedom2"]);
$freedom3 = replace_br($row["freedom3"]);
$freedom4 = replace_br($row["freedom4"]);
$freedom5 = replace_br($row["freedom5"]);


$image1 = "/php/admin/main_img/". $row["image1"];
$sub1_img = "/php/admin/sub_img1/". $row["image2"];
$sub2_img = "/php/admin/sub_img2/". $row["image3"];


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><? echo $row["company_name"]?> | 完全無料の求人サイト ジョブチェンジ</title>
<meta name="description" content="<? echo $row["company_name"]?>の企業情報 | 求職者と企業を結ぶ全てのご利用が無料の求人サイト「ジョブチェンジ」。">
<meta name="keywords" content="<? echo $row["company_name"]?>,転職サイト,求人サイト,無料求人,無料掲載,正社員,契約社員,派遣社員,アルバイト,パート,ジョブチェンジ">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/style_detail.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body class="search">

<div id="wrapper">
    <div id="header_title">
        <h1 class="f11"><? echo $row["company_name"]?> | 完全無料の求人サイト ジョブチェンジ</h1>
    </div><!--header_title end  -->
    
    <!-- header -->
    <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/header.php"); ?>
    <div id="breadcrumb">
        <ul>
            <li><a href="/index.php">ジョブチェンジ トップ</a></li>
            <li><a href="/search/index.php">求人検索</a></li>
            <li><a href="/detail/index.php?detail_key=<?php echo $row["id"]; ?>"><? echo $row["company_name"]?></a></li>
        </ul>
    </div>
    
    <div class="job_company_tab clearfix">
        <div class="job_detail_tab"><a href="/detail/index.php?detail_key=<?php echo $row["id"]; ?>">求人詳細</a></div>
        <div class="company_detail_tab"><span>企業詳細</span></div>
    </div>
    
    <!-- content start -->
    <div id="content" class="clearfix">
        <div class="company_detail_wrapper">
            <h2 class="company_name"><? echo $row["company_name"]?></h2>
            <p class="job_name"><? echo $row["title"]?></p>
            
            <div class="company_detail_info mb-40">
                <table>
                    <tr>
                        <th>会社名</th>
                        <td><? echo $row["company_name"]?>（<? echo $row["company_name_furigana"]?>）</td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td><? echo $row["capital"]?>万円</td>
                    </tr>
                    <tr>
                        <th>設立年月</th>
                        <td><? echo $row["establishment1"]?>年 <? echo $row["establishment2"]?>月</td>
                    </tr>
                    <tr>
                        <th>代表者氏名</th>
                        <td><? echo $row["delegate"]?></td>
                    </tr>
                    <tr>
                        <th>勤務時間</th>
                        <td><? echo $row["time"] ?></td>
                    </tr>
                    <tr>
                        <th>従業員数</th>
                        <td><? echo $row["number_of_employees"]?>人</td>
                    </tr>
                    <tr>
                        <th>本社所在地</th>
                        <td>〒<? echo $row["post"]?><br><? echo $row["prefecture"]?><? echo $row["address1"]?><? echo $row["address2"]?></td>
                    </tr>
                    <tr>
                        <th scope="row">企業PR・企業理念</th>
                        <td><? echo $company_pr; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">求人担当者</th>
                        <td><? echo $row["person"]?></td>
                    </tr>
                    <tr>
                        <th scope="row">メールアドレス</th>
                        <td><? echo $row["mail_address"]?></td>
                    </tr>
                    <tr>
                        <th scope="row">電話番号</th>
                        <td><? echo $row["tel"]?></td>
                    </tr>
                </table>
            </div>
            
        </div><!-- /search_result -->
        
        <div class="mr_box clearfix">
            <p><span class="icon_i">i</span>まずは無料会員登録。約20秒の簡単登録であなたに最適な求人が届きます！</p>
            <div class="mr_btn"><a href="/php/mem/mem_registration1.php">簡単会員登録(無料)する</a></div>
        </div>
        
        <!-- job genre -->
        <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/job_genre.php"); ?>
        
    </div><!--content end -->

    <!-- footer -->
    <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/footer.php"); ?>
