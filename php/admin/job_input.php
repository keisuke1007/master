<?php session_start(); ?>
<?php include("../connection.php") ;?>
<?php include("../break.php") ;?>
<style type="text/css">
<!--
.style1 {color: #CB070D}
-->
</style>

<? include($_SERVER['DOCUMENT_ROOT'] ."/parts/header.php"); ?>
<?
header ("Content-type: text/html; charset=utf-8");


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
$row2 = mysql_fetch_array($res_2);

//テキスト
$qua = replace_br($row_2["qua"]);
$pr1 = replace_br($row_2["pr1"]);
$pr2 = replace_br($row_2["pr2"]);
$job_career = replace_br($row_2["job_career"]);


?>

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
      <td><label>
        <textarea name="company_pr" cols="50" rows="10"><? echo $row2["company_pr"] ;?></textarea>
      </label></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>代表者</th>
      <td><label>
        <input name="delegate" type="text" size="30" value="<? echo $row2["delegate"] ;?>">
      </label></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>求人担当者</th>
      <td><label>
        <input name="person" type="text" size="30" value="<? echo $row2["person"] ;?>">
      </label></td>
    </tr>
    <tr>
      <th scope="row">設立年月</th>
      <td>西暦<label>
        <input type="text" name="establishment1" value="<? echo $row2["establishment1"] ;?>">
      年　
      <input type="text" name="establishment2" value="<? echo $row2["establishment2"] ;?>">
      月</label></td>
    </tr>
    <tr>
      <th scope="row">資本金</th>
      <td><label>
        <input type="text" name="capital" value="<? echo $row2["capital"] ;?>">
      万円</label></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>従業員数</th>
      <td><label>
        <input type="text" name="number_of_employees" value="<? echo $row2["number_of_employees"] ;?>">
      人</label></td>
    </tr>
    <tr>
      <th scope="row">所在地</th>
      <td>〒<input type="text" name="post" value="<? echo $row2["post"] ;?>"><br>
      都道府県
<select name="prefecture" id="prefecture">
<?  
	if($row2["prefecture"] != NULL)
	{ ?> <option selected="selected" value="<? echo $row2['prefecture'];?>"><? echo $row2["prefecture"];?></option> <? }
	else if($row2["prefecture"] == NULL)
	{ ?><option value="" selected>都道府県の選択</option> <? } 
?>

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
	  <input name="address1" type="text" size="80" value="<? echo $row2["address1"];?>">
	  </td>
    </tr>
    <tr>
      <th scope="row">建物名</th>
      <td><label>
        <input name="address2" type="text" size="50" value="<? echo $row2["address2"];?>">
      </label></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>メールアドレス</th>
      <td><label>
        <input name="mail_address" type="text" size="80" value="<? echo $row["company_mail"];?>">
      </label></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>電話番号</th>
      <td><label>
        <input name="tel" type="text" size="30" value="<? echo $row2["tel"];?>">
      </label></td>
    </tr>
</table>
<br>
  <table width="1000" border="0">
    <tr>
      <th scope="row" width="150"><span class="style1">※</span>求人タイトル</th>
      <td><label>
        <input name="title" type="text" size="50" value="<? echo $row2["title"];?>">
      </label></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>募集職種</th>
      <td><label>
        <input name="job_opening" type="text" size="50" value="<? echo $row2["job_opening"];?>">
      </label></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>職種カテゴリ</th>
      <td>
<select name="job_category" id="job_category">
<?  
	if($row2["job_category"] != NULL)
	{ ?> <option selected="selected" value="<? echo $row2['job_category'];?>"><? echo $row2["job_category"];?></option> <? }
	else if($row2["job_category"] == NULL)
	{ ?><option value="" selected>職種カテゴリの選択</option><? } 
?>

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
      <td>
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
      <td><input type="checkbox" name="e_status[]" value="正社員">正社員　
	  <input type="checkbox" name="e_status[]" value="契約社員">契約社員　
	  <input type="checkbox" name="e_status[]" value="アルバイト・パート">アルバイト・パート　
	  <input type="checkbox" name="e_status[]" value="派遣社員">派遣社員　
	  <input type="checkbox" name="e_status[]" value="業務委託">業務委託　
	  <input type="checkbox" name="e_status[]" value="在宅勤務">在宅勤務</td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>募集背景</th>
      <td><textarea name="background" cols="100" rows="5"><? echo $row2["background"];?></textarea></td>
    </tr>
    <tr>
      <th scope="row">メイン画像</th>
      <td><input type="file" name="image1" id="image1" size="30" /></td>
    </tr>
    <tr>
      <th scope="row">サブ画像</th>
      <td><input type="file" name="image2"  id="image2" size="30" /><br>
	      <input type="file" name="image3"  id="image3" size="30" /></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>仕事内容</th>
      <td><textarea name="description" cols="100" rows="5"><? echo $row2["description"];?></textarea></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>勤務地</th>
      <td><textarea name="location" rows="5"><? echo $row2["location"];?></textarea></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>勤務時間</th>
      <td><label>
        <input name="time" type="text" size="30" value="<? echo $row2["time"];?>">
      </label></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>応募資格</th>
      <td><textarea name="requirements" cols="50" rows="5"><? echo $row2["requirements"];?></textarea></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>給与</th>
      <td><textarea name="salary" cols="50" rows="5"><? echo $row2["salary"];?></textarea></td>
    </tr>
	<tr>
      <th scope="row">賞与</th>
      <td><input name="bonus" type="text" size="30" value="<? echo $row2["bonus"];?>"></td>
    </tr>
	<tr>
      <th scope="row">採用人数</th>
      <td><input name="employed_persons" type="text" size="15" value="<? echo $row2["employed_persons"];?>">
      人</td>
	</tr>
	<tr>
      <th scope="row"><span class="style1">※</span>待遇・福利厚生</th>
      <td><textarea name="welfare" cols="50" rows="5"><? echo $row2["welfare"];?></textarea></td>
    </tr>
	<tr>
      <th scope="row"><span class="style1">※</span>選考プロセス</th>
      <td><textarea name="process" cols="50" rows="5"><? echo $row2["process"];?></textarea></td>
    </tr>
	<tr>
      <th scope="row">自由項目1</th>
      <td><textarea name="freedom1" cols="50" rows="5"><? echo $row2["freedom1"];?></textarea></td>
    </tr>
	<tr>
      <th scope="row"><p>自由項目2</p>      </th>
      <td><textarea name="freedom2" cols="50" rows="5"><? echo $row2["freedom2"];?></textarea></td>
    </tr>
	<tr>
      <th scope="row">自由項目3</th>
      <td><textarea name="freedom3" cols="50" rows="5"><? echo $row2["freedom3"];?></textarea></td>
    </tr>
	<tr>
      <th scope="row">自由項目4</th>
      <td><textarea name="freedom4" cols="50" rows="5"><? echo $row2["freedom4"];?></textarea></td>
    </tr>
	<tr>
      <th scope="row">自由項目5</th>
      <td><textarea name="freedom5" cols="50" rows="5"><? echo $row2["freedom5"];?></textarea></td>
    </tr>
	<tr>
	<th colspan="2" scope="row"><input name="Submit1" type="submit" id="Submit1" value="確　認" />
	　
	  <input name="Submit" type="reset" id="Submit" value="リセット" /></th>
	</tr>
</table>


</form>