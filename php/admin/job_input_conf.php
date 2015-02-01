<?php session_start(); ?>
<?php include("../connection.php") ;?>
<?php include("../break.php") ;?>
<style type="text/css">
<!--
.style1 {color: #CB070D}
-->
</style>



<?
header ("Content-type: text/html; charset=utf-8");

//$checkbox = $_REQUEST["treatment"];
//for($i=0; $i<sizeof($checkbox); $i++){
//echo "${checkbox[$i]}<br>";
//}


/*データベース読み込み
==================================================================================
*/
$get_key = $_SESSION["com_id"];
$sql = "SELECT * FROM company_basic WHERE id='" . $get_key . "'";
$res = mysql_query($sql, $conn);

$sql_2 = "SELECT * FROM company WHERE id='" . $get_key . "'";
$res_2 = mysql_query($sql_2, $conn);


//取得した変更データを取り出し
$row = mysql_fetch_array($res);
$row_2 = mysql_fetch_array($res_2);


//変数初期化
$erorr_mes=array();

/*=========データ受渡チェック=========================================================================================*/
#if(empty($_POST["company_name"]))
#{ $erorr_mes[1] = "<span style='color:#CB070D;'>" . "企業名が入力されていません。" . "</span>" . "<br>";}
#if(empty($_POST["company_name_furigana"]))
#{ $erorr_mes[2] = "<span style='color:#CB070D;'>" . "フリガナが入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["company_pr"]))
{ $erorr_mes[1] = "<span style='color:#CB070D;'>" . "企業PR・企業理念が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["delegate"]))
{ $erorr_mes[2] = "<span style='color:#CB070D;'>" . "代表者が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["person"]))
{ $erorr_mes[3] = "<span style='color:#CB070D;'>" . "求人担当者が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["number_of_employees"]))
{ $erorr_mes[4] = "<span style='color:#CB070D;'>" . "従業員数が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["mail_address"]))
{ $erorr_mes[5] = "<span style='color:#CB070D;'>" . "メールアドレスが入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["tel"]))
{ $erorr_mes[6] = "<span style='color:#CB070D;'>" . "電話番号が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["title"]))
{ $erorr_mes[7] = "<span style='color:#CB070D;'>" . "求人タイトルが入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["job_opening"]))
{ $erorr_mes[8] = "<span style='color:#CB070D;'>" . "募集職種が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["job_category"]))
{ $erorr_mes[9] = "<span style='color:#CB070D;'>" . "職種カテゴリが入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["treatment"]))
{ $erorr_mes[10] = "<span style='color:#CB070D;'>" . "待遇・条件が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["e_status"]))
{ $erorr_mes[11] = "<span style='color:#CB070D;'>" . "雇用形態が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["background"]))
{ $erorr_mes[12] = "<span style='color:#CB070D;'>" . "募集背景が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["description"]))
{ $erorr_mes[13] = "<span style='color:#CB070D;'>" . "仕事内容が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["location"]))
{ $erorr_mes[14] = "<span style='color:#CB070D;'>" . "勤務地が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["time"]))
{ $erorr_mes[15] = "<span style='color:#CB070D;'>" . "勤務時間が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["requirements"]))
{ $erorr_mes[16] = "<span style='color:#CB070D;'>" . "応募資格が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["salary"]))
{ $erorr_mes[17] = "<span style='color:#CB070D;'>" . "給与が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["welfare"]))
{ $erorr_mes[18] = "<span style='color:#CB070D;'>" . "待遇・福利厚生が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["process"]))
{ $erorr_mes[19] = "<span style='color:#CB070D;'>" . "選考プロセスが入力されていません。" . "</span>" . "<br>";}
/*=========イメージチェック===========================================================================================*/
	//イメージ処理: [ main ] 
	if(!empty ($_FILES["image1"])) {	
	$uploaddir = "main_img/";
	$str = mb_strrpos(basename($_FILES["image1"]["name"]),"." );
	$str = substr(basename($_FILES["image1"]["name"]), $str);
	//ランダム名の取得
	function makeRandStr( $len ) {
   	$strElem = "abcdefghijklmnopqrstuvwxyz";
   	$strElem .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$strElem .= "0123456789";
   	$strElemArray = preg_split("//", $strElem, 0, PREG_SPLIT_NO_EMPTY);
   	$retStr = "";
  	srand( (double)microtime() * 100000);
   	for( $i=0; $i<$len; $i++ ) {
    $retStr .= $strElemArray[array_rand($strElemArray, 1)];
  	} return $retStr; }
	$random_name = makeRandStr( 7 );
	$uploadfile = $uploaddir . $random_name .$str;
	$img = $uploadfile;
	$uploadfile = $uploaddir . basename($_FILES["file_name"]["name"]);
	if(move_uploaded_file($_FILES["image1"]["tmp_name"], $img))
	{ $image1 = $img; }
	else
	{ $img_err1 =  "画像のアップロードできませんでした" . "<br>"; }
	}
	
	//時間取得
	$date = date("Ymd");
	
	if(!empty ($_FILES["image2"])) {
	$uploaddir2 = "sub_img1/";
	$uploadfile2 = $uploaddir2 . $date . basename($_FILES["image2"]["name"]);
	if(move_uploaded_file($_FILES["image2"]["tmp_name"], $uploadfile2))
	{  $image2 = $uploadfile2;}
	else
	{ $img_err2 =  "画像2のアップロードできませんでした" . "<br>"; }
	}

	if(!empty ($_FILES["image3"])) {
	$uploaddir3 = "sub_img2/";
	$uploadfile3 = $uploaddir3 . $date . basename($_FILES["image3"]["name"]);
	if(move_uploaded_file($_FILES["image3"]["tmp_name"], $uploadfile3))
	{ $image3 = $uploadfile3; }
	else
	{ $img_err3 =  "画像3のアップロードできませんでした" . "<br>"; }
	}




?>

<? if (count($erorr_mes)) { ?>

<form id="form1" method="post" action="job_input_conf.php" enctype="multipart/form-data">
  <table width="1000" border="0">
    <tr>
      <th scope="row" width="150"><span class="style1">※</span>企業名</th>
      <td><? echo $row["company_name"]; ?></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>フリガナ</th>
      <td><? echo $row["company_name_furigana"]; ?></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>企業PR・企業理念</th>
      <td><? echo $erorr_mes[1] ?><textarea name="company_pr" cols="50" rows="10"><? echo $_POST["company_pr"]?></textarea></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>代表者</th>
      <td><? echo $erorr_mes[2]; ?><input name="delegate" type="text" size="30" value="<? echo $_POST["delegate"]?>" /></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>求人担当者</th>
      <td><? echo $erorr_mes[3]; ?><input name="person" type="text" size="30" value="<? echo $_POST["person"]?>"></td>
    </tr>
    <tr>
      <th scope="row">設立年月</th>
      <td>西暦<input type="text" name="establishment1" value="<? echo $_POST["establishment1"]?>">年　
      <input type="text" name="establishment2" value="<? echo $_POST["establishment2"]?>">月</td>
    </tr>
    <tr>
      <th scope="row">資本金</th>
      <td><label>
        <input type="text" name="capital" value="<? echo $_POST["capital"]?>">
      万円</label></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>従業員数</th>
      <td><? echo $erorr_mes[4]; ?><input type="text" name="number_of_employees" value="<? echo $_POST["number_of_employees"]?>">人</td>
    </tr>
    <tr>
      <th scope="row">所在地</th>
      <td>〒<input type="text" name="post" value="<? echo $_POST["post"]?>"><br>
      都道府県
<select name="prefecture" id="prefecture">
<option value="<? echo $_POST["number_of_employees"]?>"><? echo $_POST["number_of_employees"]?></option>
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="山梨県">山梨県</option>
<option value="新潟県">新潟県</option>
<option value="長野県">長野県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="愛知県">愛知県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="三重県">三重県</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="京都府">京都府</option>
<option value="滋賀県">滋賀県</option>
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
</select><br>
	  <input name="address1" type="text" size="50" value="<? echo $_POST["address1"]?>">
	  </td>
    </tr>
    <tr>
      <th scope="row">建物名</th>
      <td><input name="address2" type="text" size="50" value="<? echo $_POST["address2"]?>"></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>メールアドレス</th>
      <td><? echo $erorr_mes[5]; ?><input name="mail_address" type="text" size="80" value="<? echo $_POST["mail_address"]?>"></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>電話番号</th>
      <td><? echo $erorr_mes[6]; ?><input name="tel" type="text" size="30" value="<? echo $_POST["tel"]?>"></td>
    </tr>
</table>
<br>
  <table width="1000" border="0">
    <tr>
      <th scope="row" width="150"><span class="style1">※</span>求人タイトル</th>
      <td><? echo $erorr_mes[7]; ?><input name="title" type="text" size="50" value="<? echo $_POST["title"]?>"></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>募集職種</th>
      <td><? echo $erorr_mes[8]; ?><input name="job_opening" type="text" size="50" value="<? echo $_POST["job_opening"]?>"></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>職種カテゴリ</th>
      <td><? echo $erorr_mes[9]; ?>
      
<select name="job_category" id="job_category">
<option value="<? echo $_POST["job_category"] ?>"><? echo $_POST["job_category"] ?></option>
<option value="事務・オフィスワーク">事務・オフィスワーク</option>
<option value="総務・経理・人事">総務・経理・人事</option>
<option value="営業・企画・販売">営業・企画・販売</option>
<option value="専門職・技術者">専門職・技術者</option>
<option value="接客・サービス／飲食">接客・サービス／飲食</option>
<option value="接客・サービス／アパレル">接客・サービス／アパレル</option>
<option value="接客・サービス／他">接客・サービス／他</option>
<option value="調理師・コック">調理師・コック</option>
<option value="ドライバー・配達・配送">ドライバー・配達・配送</option>
<option value="編集・制作・クリエイター">編集・制作・クリエイター</option>
<option value="データ入力・オペレーター">データ入力・オペレーター</option>
<option value="管理職・マネージャー">管理職・マネージャー</option>
<option value="医療・介護・福祉">医療・介護・福祉</option>
<option value="美容・理容・エステ">美容・理容・エステ</option>
<option value="マッサージ・ほぐし">マッサージ・ほぐし</option>
<option value="トリマー・動物・ペット">トリマー・動物・ペット</option>
<option value="講師・インストラクター">講師・インストラクター</option>
<option value="保育士・ベビーシッター">保育士・ベビーシッター</option>
<option value="工場内作業">工場内作業</option>
<option value="警備・清掃・軽作業">警備・清掃・軽作業</option>
<option value="建設・土木業">建設・土木業</option>
<option value="農業">農業</option>
<option value="林業">林業</option>
<option value="水産業">水産業</option>
<option value="除染・復興支援">除染・復興支援</option>
<option value="イベントスタッフ">イベントスタッフ</option>
<option value="ホステス・ホスト">ホステス・ホスト</option>
<option value="モデル">モデル</option>
<option value="コンパニオン">コンパニオン</option>
<option value="芸能関係・俳優・女優">芸能関係・俳優・女優</option>
<option value="モニター・市場調査">モニター・市場調査</option>
<option value="在宅・内職">在宅・内職</option>
<option value="その他">その他</option>
</select></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>待遇・条件</th>
      <td><? echo $erorr_mes[10]; ?>
	  <table width="850" border="0">
        <tr>
          <td><input type="checkbox" name="treatment[]" value="すぐに働ける（急募）">すぐに働ける（急募）</td>
          <td><input type="checkbox" name="treatment[]" value="未経験者歓迎">未経験者歓迎</td>
          <td><input type="checkbox" name="treatment[]" value="経験者優遇">経験者優遇</td>
          <td><input type="checkbox" name="treatment[]" value="中高年歓迎">中高年歓迎</td>
          <td><input type="checkbox" name="treatment[]" value="年齢不問">年齢不問</td>
          <td><input type="checkbox" name="treatment[]" value="障害者支援">障害者支援</td>
		  <td><input type="checkbox" name="treatment[]" value="土日祝のみ可">土日祝のみ可</td>
          <td><input type="checkbox" name="treatment[]" value="週１勤務可">週１勤務可</td>
		  <td><input type="checkbox" name="treatment[]" value="副業可">副業可</td>
          <td><input type="checkbox" name="treatment[]" value="面接随時">面接随時</td>
		  <td><input type="checkbox" name="treatment[]" value="平均年齢20代">平均年齢20代</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="treatment[]" value="日払い・週払い可">日払い・週払い可</td>
          <td><input type="checkbox" name="treatment[]" value="時給1000円以上">時給1000円以上</td>
          <td><input type="checkbox" name="treatment[]" value="オープニングスタッフ">オープニングスタッフ</td>
          <td><input type="checkbox" name="treatment[]" value="幹部候補生">幹部候補生</td>
          <td><input type="checkbox" name="treatment[]" value="資格を活かせる">資格を活かせる</td>
          <td><input type="checkbox" name="treatment[]" value="語学力を活かせる">語学力を活かせる</td>
		  <td><input type="checkbox" name="treatment[]" value="海外勤務有り">海外勤務有り</td>
          <td><input type="checkbox" name="treatment[]" value="転勤なし">転勤なし</td>
          <td><input type="checkbox" name="treatment[]" value="完全週休２日">完全週休２日</td>
          <td><input type="checkbox" name="treatment[]" value="残業なし">残業なし</td>
          <td><input type="checkbox" name="treatment[]" value="ノルマなし">ノルマなし</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="treatment[]" value="シフト勤務">シフト勤務</td>
          <td><input type="checkbox" name="treatment[]" value="フレックス勤務">フレックス勤務</td>
          <td><input type="checkbox" name="treatment[]" value="長期休暇">長期休暇</td>
          <td><input type="checkbox" name="treatment[]" value="出産・育児休暇">出産・育児休暇</td>
          <td><input type="checkbox" name="treatment[]" value="寮・社宅完備">寮・社宅完備</td>
          <td><input type="checkbox" name="treatment[]" value="食事支給">食事支給</td>
		  <td><input type="checkbox" name="treatment[]" value="保養所有り">保養所有り</td>
          <td><input type="checkbox" name="treatment[]" value="服装・髪型自由">服装・髪型自由</td>
          <td><input type="checkbox" name="treatment[]" value="制服貸与">制服貸与</td>
          <td><input type="checkbox" name="treatment[]" value="表彰制度">表彰制度</td>
          <td><input type="checkbox" name="treatment[]" value="外資系">外資系</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="treatment[]" value="社員登用制度">社員登用制度</td>
          <td><input type="checkbox" name="treatment[]" value="マイカー通勤可">マイカー通勤可</td>
          <td><input type="checkbox" name="treatment[]" value="交通費全額">交通費全額</td>
          <td><input type="checkbox" name="treatment[]" value="駅近い">駅近い</td>
          <td><input type="checkbox" name="treatment[]" value="男性中心職場">男性中心職場</td>
          <td><input type="checkbox" name="treatment[]" value="女性中心職場">女性中心職場</td>
		  <td><input type="checkbox" name="treatment[]" value="女性専用トイレ有">女性専用トイレ有</td>
          <td><input type="checkbox" name="treatment[]" value="自社ビル">自社ビル</td>
          <td><input type="checkbox" name="treatment[]" value="禁煙職場">禁煙職場</td>
          <td><input type="checkbox" name="treatment[]" value="静かな職場">静かな職場</td>
          <td><input type="checkbox" name="treatment[]" value="債務ゼロ企業">債務ゼロ企業</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="treatment[]" value="活気のある職場">活気のある職場</td>
          <td><input type="checkbox" name="treatment[]" value="バリアフリー職場">バリアフリー職場</td>
          <td><input type="checkbox" name="treatment[]" value="託児所完備">託児所完備</td>
          <td><input type="checkbox" name="treatment[]" value="社内サークル有り">社内サークル有り</td>
          <td><input type="checkbox" name="treatment[]" value="歩合で稼げる">歩合で稼げる</td>
          <td><input type="checkbox" name="treatment[]" value="社内ベンチャー制度">社内ベンチャー制度</td>
		  <td><input type="checkbox" name="treatment[]" value="独立開業支援">独立開業支援</td>
          <td><input type="checkbox" name="treatment[]" value="株式上場企業">株式上場企業</td>
          <td><input type="checkbox" name="treatment[]" value="小規模（1人～20人）">小規模（1人～20人）</td>
          <td><input type="checkbox" name="treatment[]" value="中規模（21人～100人）">中規模（21人～100人）</td>
          <td><input type="checkbox" name="treatment[]" value="大規模（101人以上）">大規模（101人以上）</td>
        </tr>
      </table>	  </td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>雇用形態</th>
      <td><? echo $erorr_mes[11]; ?>
	  <input type="checkbox" name="e_status[]" value="正社員">正社員　
	  <input type="checkbox" name="e_status[]" value=">契約社員">契約社員　
	  <input type="checkbox" name="e_status[]" value="アルバイト・パート">アルバイト・パート　
	  <input type="checkbox" name="e_status[]" value="派遣社員">派遣社員　
	  <input type="checkbox" name="e_status[]" value="業務委託">業務委託　
	  <input type="checkbox" name="e_status[]" value="在宅勤務">在宅勤務</td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>募集背景</th>
      <td><? echo $erorr_mes[12]; ?><textarea name="background" cols="100" rows="5"><? echo $_POST["background"] ?></textarea></td>
    </tr>
    <tr>
      <th scope="row">メイン画像</th>
      <td><input type="file" name="image1" id="image1" size="30" /></td>
    </tr>
    <tr>
      <th scope="row">サブ画像</th>
      <td><input type="file" name="image2" id="image2" size="30" /><br>
	      <input type="file" name="image3" id="image3" size="30" />	  </td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>仕事内容</th>
      <td><? echo $erorr_mes[13]; ?><textarea name="description" cols="100" rows="5"><? echo $_POST["description"] ?></textarea></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>勤務地</th>
      <td><? echo $erorr_mes[14]; ?><textarea name="location" rows="5"><? echo $_POST["location"] ?></textarea></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>勤務時間</th>
      <td><? echo $erorr_mes[15]; ?><input name="time" type="text" size="30" value="<? echo $_POST["time"] ?>"></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>応募資格</th>
      <td><? echo $erorr_mes[16]; ?><textarea name="requirements" cols="50" rows="5"><? echo $_POST["requirements"] ?></textarea></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>給与</th>
      <td><? echo $erorr_mes[17]; ?><textarea name="salary" cols="50" rows="5"><? echo $_POST["salary"] ?></textarea></td>
    </tr>
	<tr>
      <th scope="row">賞与</th>
      <td><input name="bonus" type="text" size="30" value="<? echo $_POST["bonus"] ?>"></td>
    </tr>
	<tr>
      <th scope="row">採用人数</th>
      <td><input name="employed_persons" type="text" size="15" value="<? echo $_POST["employed_persons"] ?>">
      人</td>
	</tr>
	<tr>
      <th scope="row"><span class="style1">※</span>待遇・福利厚生</th>
      <td><? echo $erorr_mes[18]; ?><textarea name="welfare" cols="50" rows="5"><? echo $_POST["welfare"] ?></textarea></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>選考プロセス</th>
      <td><? echo $erorr_mes[19]; ?><textarea name="process" cols="50" rows="5"><? echo $_POST["process"] ?></textarea></td>
    </tr>
	<tr>
      <th scope="row">自由項目1</th>
      <td><textarea name="freedom1" cols="50" rows="5"><? echo $_POST["freedom1"] ?></textarea></td>
    </tr>
	<tr>
      <th scope="row"><p>自由項目2</p>      </th>
      <td><textarea name="freedom2" cols="50" rows="5"><? echo $_POST["freedom2"] ?></textarea></td>
    </tr>
	<tr>
      <th scope="row">自由項目3</th>
      <td><textarea name="freedom3" cols="50" rows="5"><? echo $_POST["freedom3"] ?></textarea></td>
    </tr>
	<tr>
      <th scope="row">自由項目4</th>
      <td><textarea name="freedom4" cols="50" rows="5"><? echo $_POST["freedom4"] ?></textarea></td>
    </tr>
	<tr>
      <th scope="row">自由項目5</th>
      <td><textarea name="freedom5" cols="50" rows="5"><? echo $_POST["freedom5"] ?></textarea></td>
    </tr>
	<tr>
	<th colspan="2" scope="row"><input name="Submit1" type="submit" id="Submit1" value="確　認" />
	　
	  <input name="Submit" type="reset" id="Submit" value="リセット" /></th>
	</tr>
</table>
</form>
<? 
} else {
/*=========確認用==============================================================================================================*/

//チェックボックス処理
$treatment = implode("　", $_POST["treatment"]);
$e_status = implode("　", $_POST["e_status"]);


?>
<form id="form1" method="post" action="job_input_send.php">
  <table width="1000" border="0">
    <tr>
      <th scope="row" width="150"><span class="style1">※</span>企業名</th>
      <td><? echo $row["company_name"]?></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>フリガナ</th>
      <td><? echo $row["company_name_furigana"]?></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>企業PR・企業理念</th>
      <td><? echo $_POST["company_pr"]?></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>代表者</th>
      <td><? echo $_POST["delegate"]?></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>求人担当者</th>
      <td><? echo $_POST["person"]?></td>
    </tr>
    <tr>
      <th scope="row">設立年月</th>
      <td>西暦<? echo $_POST["establishment1"]?>年　<? echo $_POST["establishment2"]?>月</td>
    </tr>
    <tr>
      <th scope="row">資本金</th>
      <td><? echo $_POST["capital"]?>万円</td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>従業員数</th>
      <td><? echo $_POST["number_of_employees"]?>人</td>
    </tr>
    <tr>
      <th scope="row">所在地</th>
      <td>〒<? echo $_POST["post"]?><br><? echo $_POST["prefecture"]?><? echo $_POST["address1"]?></td>
    </tr>
    <tr>
      <th scope="row">建物名</th>
      <td><? echo $_POST["address2"]?></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>メールアドレス</th>
      <td><? echo $_POST["mail_address"]?></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>電話番号</th>
      <td><? echo $_POST["tel"]?></td>
    </tr>
</table>
<br>
  <table width="1000" border="0">
    <tr>
      <th scope="row" width="150"><span class="style1">※</span>求人タイトル</th>
      <td><? echo $_POST["title"]?></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>募集職種</th>
      <td><? echo $_POST["job_opening"]?></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>職種カテゴリ</th>
      <td><? echo $_POST["job_category"] ?></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>待遇・条件</th>
      <td><? echo $treatment; ?></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>雇用形態</th>
      <td><? echo $e_status; ?></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>募集背景</th>
      <td><? echo $_POST["background"] ?></td>
    </tr>
    <tr>
      <th scope="row">メイン画像</th>
      <td><?
	  if(!empty ($image1)) { $img1 = "<img src=". $image1 .">"; }
      else { $img1 = "";}
	  echo $img1;
	  	?>
      </td>
    </tr>
    <tr>
      <th scope="row">サブ画像</th>
      <td><?
	  if(!empty ($image2)) { $img2 = "<img src=". $image2 .">"; }
      else { $img2 = "";}
	  echo $img2;
      ?>
	  <?
	  if(!empty ($image3)) { $img3 = "<img src=". $image3 .">"; }
      else { $img3 = "";}
	  echo $img3;
       ?>
       </td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>仕事内容</th>
      <td><? echo $_POST["description"] ?></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>勤務地</th>
      <td><? echo $_POST["location"] ?></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>勤務時間</th>
      <td><? echo $_POST["time"] ?></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>応募資格</th>
      <td><? echo $_POST["requirements"] ?></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>給与</th>
      <td><? echo $_POST["salary"] ?></td>
    </tr>
	<tr>
      <th scope="row">賞与</th>
      <td><? echo $_POST["bonus"] ?></td>
    </tr>
	<tr>
      <th scope="row">採用人数</th>
      <td><? echo $_POST["employed_persons"] ?>人</td>
	</tr>
	<tr>
      <th scope="row"><span class="style1">※</span>待遇・福利厚生</th>
      <td><? echo $_POST["welfare"] ?></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>選考プロセス</th>
      <td><? echo $_POST["process"] ?></td>
    </tr>
	<tr>
      <th scope="row">自由項目1</th>
      <td><? echo $_POST["freedom1"] ?></td>
    </tr>
	<tr>
      <th scope="row"><p>自由項目2</p>      </th>
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
	<tr>
	<th colspan="2" scope="row"><input name="Submit1" type="submit" id="Submit1" value="登　録" />
	　
	  <input name="Submit" type="reset" id="Submit" value="リセット" /></th>
	</tr>
</table>

<input type="hidden" name="company_name" value="<? echo $_POST["company_name"]; ?>"/>
<input type="hidden" name="company_name_furigana" value="<? echo $_POST["company_name_furigana"]; ?>"/>
<input type="hidden" name="company_pr" value="<? echo $_POST["company_pr"]; ?>"/>
<input type="hidden" name="delegate" value="<? echo $_POST["delegate"]; ?>"/>
<input type="hidden" name="establishment1" value="<? echo $_POST["establishment1"]; ?>"/>
<input type="hidden" name="establishment2" value="<? echo $_POST["establishment2"]; ?>"/>
<input type="hidden" name="capital" value="<? echo $_POST["capital"]; ?>"/>
<input type="hidden" name="number_of_employees" value="<? echo $_POST["number_of_employees"]; ?>"/>
<input type="hidden" name="post" value="<? echo $_POST["post"]; ?>"/>
<input type="hidden" name="prefecture" value="<? echo $_POST["prefecture"]; ?>"/>
<input type="hidden" name="address1" value="<? echo $_POST["address1"]; ?>"/>
<input type="hidden" name="address2" value="<? echo $_POST["address2"]; ?>"/>
<input type="hidden" name="mail_address" value="<? echo $_POST["mail_address"]; ?>"/>
<input type="hidden" name="tel" value="<? echo $_POST["tel"]; ?>"/>
<input type="hidden" name="title" value="<? echo $_POST["title"]; ?>"/>
<input type="hidden" name="job_opening" value="<? echo $_POST["job_opening"]; ?>"/>
<input type="hidden" name="job_category" value="<? echo $_POST["job_category"]; ?>"/>
<input type="hidden" name="treatment" value="<? echo $treatment; ?>"/>
<input type="hidden" name="e_status" value="<? echo $e_status; ?>"/>
<input type="hidden" name="background" value="<? echo $_POST["background"]; ?>"/>
<input type="hidden" name="image1" value="<? echo $image1; ?>"/>
<input type="hidden" name="image2" value="<? echo $image2; ?>"/>
<input type="hidden" name="image3" value="<? echo $image3; ?>"/>
<input type="hidden" name="description" value="<? echo $_POST["description"]; ?>"/>
<input type="hidden" name="location" value="<? echo $_POST["location"]; ?>"/>
<input type="hidden" name="time" value="<? echo $_POST["time"]; ?>"/>
<input type="hidden" name="requirements" value="<? echo $_POST["requirements"]; ?>"/>
<input type="hidden" name="salary" value="<? echo $_POST["salary"]; ?>"/>
<input type="hidden" name="bonus" value="<? echo $_POST["bonus"]; ?>"/>
<input type="hidden" name="employed_persons" value="<? echo $_POST["employed_persons"]; ?>"/>
<input type="hidden" name="welfare" value="<? echo $_POST["welfare"]; ?>"/>
<input type="hidden" name="process" value="<? echo $_POST["process"]; ?>"/>
<input type="hidden" name="freedom1" value="<? echo $_POST["freedom1"]; ?>"/>
<input type="hidden" name="freedom2" value="<? echo $_POST["freedom2"]; ?>"/>
<input type="hidden" name="freedom3" value="<? echo $_POST["freedom3"]; ?>"/>
<input type="hidden" name="freedom4" value="<? echo $_POST["freedom4"]; ?>"/>
<input type="hidden" name="freedom5" value="<? echo $_POST["freedom5"]; ?>"/>



</form>


<? } ?>
