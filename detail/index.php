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


$img1 = "/php/admin/". $row["image1"];
$img2 = "/php/admin/". $row["image2"];
$img3 = "/php/admin/". $row["image3"];


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><? echo $row["title"]?> | 完全無料の求人サイト ジョブチェンジ</title>
<meta name="description" content="<? echo $row["title"]?> 求職者と企業を結ぶ全てのご利用が無料の求人サイト「ジョブチェンジ」。">
<meta name="keywords" content="<? echo $row["title"]?>,転職サイト,求人サイト,無料求人,無料掲載,正社員,契約社員,派遣社員,アルバイト,パート,ジョブチェンジ">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/style_detail.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body class="search">

<div id="wrapper">
    <div id="header_title">
        <h1 class="f11"><? echo $row["title"]?> | 完全無料の求人サイト ジョブチェンジ</h1>
    </div><!--header_title end  -->
    
    <!-- header -->
    <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/header.php"); ?>
    <div id="breadcrumb">
        <ul>
            <li><a href="/index.php">ジョブチェンジ トップ</a></li>
            <li><a href="/search/index.php">求人検索</a></li>
            <li><a href="/detail/index.php?detail_key=<?php echo $row["id"]; ?>"><? echo $row["job_category"] ?>の求人</a></li>
            <li><? echo $row["company_name"]?>の<strong><? echo $row["job_opening"]?></strong></li>
        </ul>
    </div>
    
    <div class="job_company_tab clearfix">
        <div class="job_detail_tab"><span>求人詳細</span></div>
        <div class="company_detail_tab"><a href="/detail/company.php?detail_key=<?php echo $row["id"]; ?>">企業詳細</a></div>
        <div class="entry_btn"><a href="job_app.php?detail_key=<?php echo $get_key;?>">応募フォームへ</a></div>
    </div>
    
    <!-- content start -->
    <div id="content" class="clearfix">
        <div class="job_detail_wrapper">
            <p class="company_name"><? echo $row["company_name"]?>（<? echo $row["company_name_furigana"]?>）</p>
            <h2 class="job_name"><? echo $row["title"]?></h2>
            
            <div class="job_detail_txt_img_box clearfix">
                <div class="job_detail_img">
                    <img src="<?php echo $img2; ?>" width="400" height="193" alt="">
                    <img src="<?php echo $img3; ?>" width="400" height="193" alt="">
                </div>
                
                <div class="job_detail_txt">
                    <div class="job_detail_main_img"><img src="<?php echo $img1; ?>" width="400" height="193" alt=""></div>
                    <p><? echo $description; ?></p>
                </div>
                
            </div>
            
            <div class="job_detail_info">
                <table>
                    <tr>
                        <th>募集職種</th>
                        <td><a href="#"><? echo $row["job_category"] ?></a> &gt; <? echo $row["job_opening"]?></td>
                    </tr>
                    <tr>
                        <th>雇用形態</th>
                        <td><? echo $row["e_status"]; ?></td>
                    </tr>
                    <tr>
                        <th>募集背景</th>
                        <td><? echo $background; ?></td>
                    </tr>
                    <tr>
                        <th>仕事内容</th>
                        <td>
自社EC販売促進システムをはじめ、クライアントのサイトなどのデザイン全般。エンジニアとディスカッションしながら、サイト改善や機能追加を行っていただきます。デザイン業務のみにとどまらず、新規のサービスに携わることも可能です。
                        </td>
                    </tr>
                    <tr>
                        <th>応募資格</th>
                        <td><? echo $requirements; ?></tr>
                    <tr>
                        <th>採用予定人数</th>
                        <td><? echo $row["employed_persons"] ?>人</td>
                    </tr>
                    <tr>
                        <th>勤務地</th>
                        <td><? echo $row["location"] ?></td>
                    </tr>
                    <tr>
                        <th>勤務時間</th>
                        <td><? echo $row["time"] ?></td>
                    </tr>
                    <tr>
                        <th>給与</th>
                        <td><? echo $row["salary"] ?></td>
                    </tr>
                    <tr>
                        <th>賞与</th>
                        <td><? echo $row["bonus"] ?></td>
                    </tr>
                    <tr>
                        <th>休日・休暇</th>
                        <td>
完全週休2日制
                        </td>
                    </tr>
                    <tr>
                        <th>待遇・福利厚生</th>
                        <td><? echo $row["treatment"]; ?></td>
                    </tr>
                    <tr>
                        <th>選考プロセス</th>
                        <td><? echo $row["process"] ?></td>
                    </tr>
                    	<tr>
                            <th>自由項目1</th>
                            <td><? echo $_POST["freedom1"] ?></td>
                        </tr>
                        <tr>
                            <th>自由項目2</th>
                            <td><? echo $_POST["freedom2"] ?></td>
                        </tr>
                        <tr>
                            <th>自由項目3</th>
                            <td><? echo $_POST["freedom3"] ?></td>
                        </tr>
                        <tr>
                            <th>自由項目4</th>
                            <td><? echo $_POST["freedom4"] ?></td>
                        </tr>
                        <tr>
                            <th>自由項目5</th>
                            <td><? echo $_POST["freedom5"] ?></td>
                        </tr>
                </table>
            </div>
            <div class="job_detail_entry_btn"><a href="/php/job_app.php?detail_key=<?php echo $get_key;?>">この求人の応募フォームへ</a></div>
            
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
