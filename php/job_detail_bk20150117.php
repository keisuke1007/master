<? session_start(); ?>
<? include("connection.php"); ?>
<? include("break.php"); ?>


<?

//変更データのキー取得
$get_key = $_GET["upd_key"];

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


$img = "admin/main_img/". $row["image1"];
$img2 = "admin/sub_img1/". $row["image2"];
$img3 = "admin/sub_img2/". $row["image3"];


?>

<table width="1000" border="0">
    <tr>
      <th scope="row" width="150">企業名</th>
      <td><? echo $row["company_name"]?></td>
    </tr>
    <tr>
      <th scope="row">フリガナ</th>
      <td><? echo $row["company_name_furigana"]?></td>
    </tr>
    <tr>
      <th scope="row">企業PR・企業理念</th>
      <td><? echo $company_pr; ?></td>
    </tr>
    <tr>
      <th scope="row">代表者</th>
      <td><? echo $row["delegate"]?></td>
    </tr>
    <tr>
      <th scope="row">求人担当者</th>
      <td><? echo $row["person"]?></td>
    </tr>
    <tr>
      <th scope="row">設立年月</th>
      <td>西暦<? echo $row["establishment1"]?>年　<? echo $row["establishment2"]?>月</td>
    </tr>
    <tr>
      <th scope="row">資本金</th>
      <td><? echo $row["capital"]?>万円</td>
    </tr>
    <tr>
      <th scope="row">従業員数</th>
      <td><? echo $row["number_of_employees"]?>人</td>
    </tr>
    <tr>
      <th scope="row">所在地</th>
      <td>〒<? echo $row["post"]?><br><? echo $row["prefecture"]?><? echo $row["address1"]?></td>
    </tr>
    <tr>
      <th scope="row">建物名</th>
      <td><? echo $row["address2"]?></td>
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
<br>
  <table width="1000" border="0">
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
      <th scope="row">募集背景</th>
      <td><? echo $background; ?></td>
    </tr>
    <tr>
      <th scope="row">メイン画像</th>
      <td><img src="<?php echo $image1; ?>" alt="image" width="250" height="250" /></td>
    </tr>
    <tr>
      <th scope="row">サブ画像</th>
      <td><img src="<?php echo $sub1_img; ?>" alt="image" width="250" height="250" /><br>
	      <img src="<?php echo $sub2_img; ?>" alt="image" width="250" height="250" /></td>
    </tr>
    <tr>
      <th scope="row">仕事内容</th>
      <td><? echo $description; ?></td>
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
      <th scope="row">応募資格</th>
      <td><? echo $requirements; ?></td>
    </tr>
	<tr>
      <th scope="row">給与</th>
      <td><? echo $row["salary"] ?></td>
    </tr>
	<tr>
      <th scope="row">賞与</th>
      <td><? echo $row["bonus"] ?></td>
    </tr>
	<tr>
      <th scope="row">採用人数</th>
      <td><? echo $row["employed_persons"] ?>人</td>
	</tr>
	<tr>
      <th scope="row">待遇・福利厚生</th>
      <td><? echo $row["welfare"] ?></td>
    </tr>
	<tr>
      <th scope="row">選考プロセス</th>
      <td><? echo $row["process"] ?></td>
    </tr>
	<tr>
      <th scope="row">自由項目1</th>
      <td><? echo $_POST["freedom1"] ?></td>
    </tr>
	<tr>
      <th scope="row">自由項目2</th>
      <td><? echo $_POST["freedom2"] ?></td>
    </tr>
	<tr>
      <th scope="row">自由項目3</th>
      <td><? echo $_POST["freedom3"] ?></td>
    </tr>
	<tr>
      <th scope="row">自由項目4</th>
      <td><? echo $_POST["freedom4"] ?></td>
    </tr>
	<tr>
      <th scope="row">自由項目5</th>
      <td><? echo $_POST["freedom5"] ?></td>
    </tr>
</table>

<a href="job_app.php?upd_key=<?php echo $get_key;?>">この求人に応募する</a>

