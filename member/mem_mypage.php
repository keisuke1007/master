<?php session_start(); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/php/connection.php") ;?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/php/break.php") ;?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><? echo $_SESSION["name"]; ?>さんの会員情報登録 | 完全無料の求人サイト ジョブチェンジ</title>
<meta name="description" content="求職者と企業を結ぶ全てのご利用が無料の求人サイト「ジョブチェンジ」の会員情報登録ページ。求人検索も無料。企業の求人情報の掲載無料。採用時の成果報酬も不要。">
<meta name="keywords" content="会員情報登録,転職サイト,求人サイト,無料求人,無料掲載,正社員,契約社員,派遣社員,アルバイト,パート,ジョブチェンジ">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/style_member.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>

<div id="wrapper">

    <div id="header_title">
        <h1 class="f11"><? echo $_SESSION["name"]; ?>さんの会員情報登録 | 完全無料の求人サイト ジョブチェンジ</h1>
    </div><!--header_title end  -->

    <!-- header -->
    <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/header.php"); ?>
    
    <div id="breadcrumb">
        <ul>
            <li><a href="/index.php">ジョブチェンジ トップ</a></li>
            <li><strong><? echo $_SESSION["name"]; ?>さんの会員情報登録</strong></li>
        </ul>
    </div>
    
    <!-- content start -->
    <div id="content" class="clearfix">
        <h2><? echo $_SESSION["name"]; ?>さんの会員情報登録</h2>
        <h3 class="mb-20">詳細な情報を登録することで、<? echo $_SESSION["name"]; ?>さんのお仕事探しをサポートします！</h3>

<!-- 応募者登録フォーム -->
<form action="/member/mem_refistration2_conf.php?upd_key=<?php echo $get_key;?>" method="post" enctype="multipart/form-data" id="form1">
<table border="0" cellspacing="0" cellpadding="0" class="mb-20">
  <tr class="name">
    <th scope="row">氏名<span>必須</span></th>
    <td><label><input name="name1_1" type="text" id="name1_1" size="20" maxlength="30" placeholder="姓"></label><label><input name="name1_2" type="text" id="name1_2" size="20" maxlength="30" placeholder="名"></label></td>
  </tr>
  <tr class="name_kana">
    <th scope="row">フリガナ<span>必須</span></th>
    <td><label><input name="name2_1" type="text" id="name2_1" size="20" maxlength="30" placeholder="セイ"></label><label><input name="name2_2" type="text" id="name2_2" size="20" maxlength="30" placeholder="メイ"></label></td>
  </tr>
  <tr class="birthday">
    <th scope="row">生年月日<span>必須</span></th>
    <td><label><input name="name2_1" type="text" id="name2_1" size="15" maxlength="4" placeholder="1990">年</label><label><input name="name2_1" type="text" id="name2_1" size="4" maxlength="2" placeholder="4">月</label><label><input name="name2_1" type="text" id="name2_1" size="4" maxlength="2" placeholder="1">日</label></td>
  </tr>
  <tr class="sex">
    <th scope="row">性別<span>必須</span></th>
    <td><label for="sex_m">男性<input type="radio" name="radio" id="sex_m" value="sex"></label><label for="sex_f">女性<input type="radio" name="radio" id="sex_f" value="sex"></label>
    </td>
  </tr>
  <tr class="mail">
    <th scope="row">メールアドレス<span>必須</span></th>
    <td><label><input name="address1" type="text" id="address1" size="40" maxlength="50" placeholder="abcdef@ghij.com"></label></td>
  </tr>
  <tr class="phone">
    <th scope="row">電話番号<span>必須</span></th>
    <td><label><input name="address2" type="text" id="address2" size="40" maxlength="13" placeholder="09012345678"></label></td>
  </tr>
  <tr class="address">
    <th scope="row">現住所<span>必須</span></th>
    <td><label>〒<input name="password1" type="text" id="password1" size="20" maxlength="8" placeholder="1030001(ハイフンなし)"></label>
    <select name="prefecture">
    <option value="選択">都道府県を選択</option>
	<option value="北海道">北海道</option>
	<option value="青森県">青森県</option>
	<option value="秋田県">秋田県</option>
	<option value="岩手県">岩手県</option>
	<option value="山形県">山形県</option>
	<option value="宮城県">宮城県</option>
	<option value="福島県">福島県</option>
	<option value="茨城県">茨城県</option>
	<option value="栃木県">栃木県</option>
	<option value="群馬県">群馬県</option>
	<option value="埼玉県">埼玉県</option>
	<option value="神奈川県">神奈川県</option>
	<option value="千葉県">千葉県</option>
	<option value="東京都">東京都</option>
	<option value="山梨県">山梨県</option>
	<option value="長野県">長野県</option>
	<option value="新潟県">新潟県</option>
	<option value="富山県">富山県</option>
	<option value="石川県">石川県</option>
	<option value="福井県">福井県</option>
	<option value="岐阜県">岐阜県</option>
	<option value="静岡県">静岡県</option>
	<option value="愛知県">愛知県</option>
	<option value="三重県">三重県</option>
	<option value="滋賀県">滋賀県</option>
	<option value="京都府">京都府</option>
	<option value="大阪府">大阪府</option>
	<option value="兵庫県">兵庫県</option>
	<option value="奈良県">奈良県</option>
	<option value="和歌山県">和歌山県</option>
	<option value="鳥取県">鳥取県</option>
	<option value="島根県">島根県</option>
	<option value="岡山県">岡山県</option>
	<option value="広島県">広島県</option>
	<option value="山口県">山口県</option>
	<option value="徳島県">徳島県</option>
	<option value="香川県">香川県</option>
	<option value="愛媛県">愛媛県</option>
	<option value="高知県">高知県</option>
	<option value="福岡県">福岡県</option>
	<option value="佐賀県">佐賀県</option>
	<option value="長崎県">長崎県</option>
	<option value="熊本県">熊本県</option>
	<option value="大分県">大分県</option>
	<option value="宮崎県">宮崎県</option>
	<option value="鹿児島県">鹿児島県</option>
	<option value="沖縄県">沖縄県</option>
</select>

    <label><input name="password1" type="text" id="password1" size="50" placeholder="市区町村、番地、建物名、部屋番号"></label>
    
    </td>
  </tr>
  <tr class="education">
    <th scope="row">最終学歴<span>必須</span></th>
    <td><label><input name="password2" type="text" id="password2" size="20" maxlength="20" placeholder="学校名">
    <select name="school2">
        <option value="大学">大学</option>
        <option value="大学院">大学院</option>
        <option value="専門学校">専門学校</option>
        <option value="短期大学">短期大学</option>
        <option value="高等専門学校">高等専門学校</option>
        <option value="高等学校">高等学校</option>
        <option value="その他学校">その他学校</option>
    </select>
    </label>
    <input name="password2" type="text" id="password2" size="20" maxlength="20" placeholder="学部・学科">
    </td>
  </tr>
  <tr class="toeic">
    <th scope="row">TOEIC</th>
    <td><input name="password2" type="text" id="password2" size="10" maxlength="3">点</td>
  </tr>
  <tr class="tpefl">
    <th scope="row">TPEFL</th>
    <td><input name="password2" type="text" id="password2" size="10" maxlength="3">点</td>
  </tr>
  <tr class="capacity">
    <th scope="row">資格</th>
    <td><label for="textfield"></label>
      <textarea name="textfield" cols="50" id="textfield"></textarea></td>
  </tr>
  <tr class="income">
    <th scope="row">現（前）年収</th>
    <td><input name="password3" type="text" id="password3" size="10" maxlength="10">万円</td>
  </tr>
  <tr class="career">
    <th scope="row">職歴</th>
      <td><label><input name="password4" type="text" id="password4" size="8" maxlength="4">年</label><label><input name="name2_1" type="text" id="name2_1" size="2" maxlength="2">月</label><span>〜</span><label><input name="password4" type="text" id="password4" size="8" maxlength="4">年</label><label><input name="name2_1" type="text" id="name2_1" size="2" maxlength="2">月</label>
    </td>
  </tr>
  <tr class="career_company">
    <th scope="row">社名</th>
    <td>
    <input name="job1" type="text" id="job" size="40" maxlength="50">
    <input name="job2" type="text" id="job" size="40" maxlength="50">
    <input name="job3" type="text" id="job" size="40" maxlength="50">
    <input name="job4" type="text" id="job" size="40" maxlength="50">
    <input name="job5" type="text" id="job" size="40" maxlength="50">
    <input name="job6" type="text" id="job" size="40" maxlength="50">
    <input name="job7" type="text" id="job" size="40" maxlength="50">
    <input name="job8" type="text" id="job" size="40" maxlength="50">
    <input name="job9" type="text" id="job" size="40" maxlength="50">
    <input name="job10" type="text" id="job" size="40" maxlength="50">
    </td>
  </tr>
  <tr class="privacy">
    <th scope="row">個人情報の利用<span>必須</span></th>
    <td><label for="privacy"><input type="checkbox" name="privacy" id="privacy" /></label><a href="/privacy_policy/index.php" target="_blank">プライバシーポリシー</a>に同意する</td>
  </tr>
</table>
<div class="submit"><input type="submit" id="submit_confirm" value="規約に同意して確認へ"></div>
</form>

    </div><!--content end -->

<!-- footer -->
<? include($_SERVER['DOCUMENT_ROOT'] ."/parts/footer.php"); ?>