<? session_start(); ?>
<? include("../connection.php"); ?>
<? include("../break.php"); ?>
<style type="text/css">
<!--
.style1 {color: #CB070D}
-->
</style>
<?

	
/*データベース読み込み
==================================================================================
*/
$get_key = $_SESSION["id"];
$sql = "SELECT * FROM mem_basic WHERE id='" . $get_key . "'";
$res = mysql_query($sql, $conn);

$sql_2 = "SELECT * FROM mem_detail WHERE id='" . $get_key . "'";
$res_2 = mysql_query($sql_2, $conn);


//取得した変更データを取り出し
$row = mysql_fetch_array($res);
$row_2 = mysql_fetch_array($res_2);

//テキスト
$qua = replace_br($row_2["qua"]);
$pr1 = replace_br($row_2["pr1"]);
$pr2 = replace_br($row_2["pr2"]);
$job_career = replace_br($row_2["job_career"]);


?>


<form action="mem_refistration2_conf.php?upd_key=<?php echo $get_key;?>" method="post" enctype="multipart/form-data" id="form1">
<table width="720" border="1" cellspacing="2" cellpadding="4">
  <tr>
    <th width="217" scope="row">氏名</th>
    <td><? echo $row["name"]; ?></td>
    </tr>
  <tr>
    <th scope="row">フリガナ</th>
    <td><? echo $row["furigana"]; ?></td>
    </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>生年月日</th>
    <td>西暦<input name="a_d" type="text" id="a_d" size="15" maxlength="4" value="<? echo $row_2["a_d"] ?>"/>年
    <input name="month" type="text" id="name2_1" size="4" maxlength="2" value="<? echo $row_2["month"] ?>"/>月
    <input name="day" type="text" id="name2_1" size="4" maxlength="2" value="<? echo $row_2["day"] ?>"/>日</td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>性別</th>
    <td>
    <? 
		if($row_2['gend'] == "1")
		{ echo "男性<input name='gend' type='radio' value='1' checked='checked'/>女性<input name='gend' type='radio' value='2'/>"; }
		else if($row_2['gend'] == "2")
		{ echo "男性<input name='gend' type='radio' value='1'/>女性<input name='gend' type='radio' value='2' checked='checked'/>"; }
		else
		{ echo "男性<input name='gend' type='radio' value='1'>女性<input name='gend' type='radio' value='2'>"; }
	?>
	</td>
  </tr>
  <tr>
    <th scope="row">メールアドレス</th>
    <td><? echo $row["mail_address"]; ?></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>電話番号</th>
    <td><input name="tel" type="text" id="address2" size="40" maxlength="13" value="<? echo $row_2["tel"]; ?>"/></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>現住所</th>
    <td>〒<input name="post" type="text" id="password1" size="20" maxlength="8" value="<? echo $row_2["post"]; ?>"/><br />
    都道府県
    <select name="prefecture">
<?  
	if($row_2["prefecture"] != NULL)
	{ ?> <option selected="selected" value="<? echo $row_2['prefecture'];?>"><? echo $row_2["prefecture"];?></option> <? }
	else if($row_2["prefecture"] == NULL)
	{ ?><option value='0'>選択</option><? }
?>
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

      <br />
    市町村番地<input name="cities" type="text" id="cities" size="60" value="<? echo $row_2["cities"]; ?>"/>
    </td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>最終学歴</th>
    <td>学校名<input name="school1" type="text" id="school1" size="60" value="<? echo $row_2["school1"]; ?>"/>
	<select name="school2">
<?
    $school2 = $row_2['school2'];
	if($row_2["school2"] != NULL)
	{ echo "<option value='<? echo $school2; ?>'><? echo $school2; ?></option>"; }
	else
	{ echo "<option value=''>選択</option>"; }
?>
	<option value="大学院">大学院</option>
	<option value="大学">大学</option>
	<option value="専門学校">専門学校</option>
	<option value="短期大学">短期大学</option>
	<option value="高等専門学校">高等専門学校</option>
	<option value="高等学校">高等学校</option>
	<option value="その他学校">その他学校</option>
	</select>　
<input name="school3" type="text" id="school3" size="30" value="<? echo $row_2["school3"]; ?>"/>学部・学科
  </td>
  </tr>
  <tr>
    <th scope="row">TOEIC</th>
    <td><input name="toeic" type="text" id="toeic" size="10" value="<? echo $row_2["toeic"]; ?>"/>点</td>
  </tr>
  <tr>
    <th scope="row">TPEFL</th>
    <td><input name="tpefl" type="text" id="tpefl" size="10" value="<? echo $row_2["tpefl"]; ?>"/>点</td>
  </tr>
  <tr>
    <th scope="row">資格</th>
    <td><textarea name="qua" cols="50" rows="5" id="qua"><? echo $qua; ?></textarea></td>
  </tr>
  <tr>
    <th scope="row">現（前）年収</th>
    <td><input name="ann" type="text" id="ann" size="10" value="<? echo $row_2["ann"]; ?>"/>万円</td>
  </tr>
  <tr>
    <th scope="row">職歴</th>
    <td><input name="career1_y" type="text" id="career1_y" size="10" maxlength="4" value="<? echo $row_2["career1_y"]; ?>"/>年
	<input name="career1_m" type="text" id="career1_m" size="5" maxlength="2" value="<? echo $row_2["career1_m"]; ?>"/>月　〜　
    <input name="career2_y" type="text" id="career2_y" size="10" maxlength="4" value="<? echo $row_2["career2_y"]; ?>"/>年
	<input name="career2_m" type="text" id="career2_m" size="5" maxlength="2" value="<? echo $row_2["career2_m"]; ?>"/>月</td>
  </tr>
  <tr>
    <th scope="row">社名</th>
    <td>
    <input name="job1"  type="text" id="job" size="40" maxlength="50" value="<? echo $row_2["job1"]; ?>"/> <br />
    <input name="job2"  type="text" id="job" size="40" maxlength="50" value="<? echo $row_2["job2"]; ?>"/> <br />
    <input name="job3"  type="text" id="job" size="40" maxlength="50" value="<? echo $row_2["job3"]; ?>"/> <br />
    <input name="job4"  type="text" id="job" size="40" maxlength="50" value="<? echo $row_2["job4"]; ?>"/> <br />
    <input name="job5"  type="text" id="job" size="40" maxlength="50" value="<? echo $row_2["job5"]; ?>"/> <br />
    <input name="job6"  type="text" id="job" size="40" maxlength="50" value="<? echo $row_2["job6"]; ?>"/> <br />
    <input name="job7"  type="text" id="job" size="40" maxlength="50" value="<? echo $row_2["job7"]; ?>"/> <br />
    <input name="job8"  type="text" id="job" size="40" maxlength="50" value="<? echo $row_2["job8"]; ?>"/> <br />
    <input name="job9"  type="text" id="job" size="40" maxlength="50" value="<? echo $row_2["job9"]; ?>"/> <br />
    <input name="job10" type="text" id="job" size="40" maxlength="50" value="<? echo $row_2["job10"]; ?>"/><br />
    </td>
  </tr>
  <tr>
    <th scope="row">自己PR</th>
    <td><textarea name="pr1" cols="50" rows="5" id="pr1"><? echo $pr1; ?></textarea></td>
  </tr>
  <tr>
    <th scope="row">スキルPR</th>
    <td><textarea name="pr2" cols="50" rows="5" id="pr2"><? echo $pr2; ?></textarea></td>
  </tr>
  <tr>
    <th scope="row">職務経歴</th>
    <td><textarea name="job_career" cols="50" rows="5" id="job_career"><? echo $job_career; ?></textarea></td>
  </tr>
   <tr>
    <th colspan="2" scope="row"><input type="submit" value="確　認">　<input type="reset" name="Submit" value="リセット" /></th>
    </tr>

</table>



</form>

<?php 

mysql_free_result($res);

?>


