<?php include("../connection.php"); ?>
<?php include("../break.php"); ?>


<!-- 応募者登録フォーム -->
<form action="mem_registration1.php" method="post" enctype="multipart/form-data" id="form1">
<table width="720" border="1" cellspacing="2" cellpadding="4">
  <tr>
    <th width="217" scope="row">氏名</th>
    <td width="209">氏<label><input name="name1_1" type="text" id="name1_1" size="20" maxlength="30"  /></label></td>
    <td width="230">名<label><input name="name1_2" type="text" id="name1_2" size="20" maxlength="30"  /></label></td>
  </tr>
  <tr>
    <th scope="row">フリガナ</th>
    <td>シ<label><input name="name2_1" type="text" id="name2_1" size="20" maxlength="30"  /></label></td>
    <td>メイ<label><input name="name2_2" type="text" id="name2_2" size="20" maxlength="30"  /></label></td>
  </tr>
  <tr>
    <th scope="row">生年月日</th>
    <td colspan="2">西暦<label><input name="name2_1" type="text" id="name2_1" size="15" maxlength="4"  /></label>
    年
    
      <label><input name="name2_1" type="text" disabled="disabled" id="name2_1" size="4" maxlength="2"  /></label>
      月
      <label><input name="name2_1" type="text" id="name2_1" size="4" maxlength="2"  /></label>
    
    日</td>
  </tr>
  <tr>
    <th scope="row">性別</th>
    <td colspan="2">男性<label for="sex"><input type="radio" name="radio" id="sex" value="sex" /></label>
    女性<label for="sex"><input type="radio" name="radio" id="sex" value="sex" /></label>
    </td>
  </tr>
  <tr>
    <th scope="row">メールアドレス</th>
    <td colspan="2"><label><input name="address1" type="text" id="address1" size="40" maxlength="50"  /></label></td>
  </tr>
  <tr>
    <th scope="row">電話番号</th>
    <td colspan="2"><label><input name="address2" type="text" id="address2" size="40" maxlength="13"  /></label></td>
  </tr>
  <tr>
    <th scope="row">現住所</th>
    <td colspan="2">〒<label><input name="password1" type="text" id="password1" size="20" maxlength="8"  /></label><br />
    都道府県
    <select name="prefecture">
    <option value="選択">選択</option>
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
    市町村番地<label><input name="password1" type="text" id="password1" size="50"  /></label><br />
    
    </td>
  </tr>
  <tr>
    <th scope="row">最終学歴</th>
    <td colspan="2">学校名<label><input name="password2" type="text" id="password2" size="20" maxlength="20"  /></label>
<select name="school2">
    <option value="選択">選択</option>
	<option value="大学院">大学院</option>
	<option value="大学">大学</option>
	<option value="専門学校">専門学校</option>
	<option value="短期大学">短期大学</option>
	<option value="高等専門学校">高等専門学校</option>
	<option value="高等学校">高等学校</option>
	<option value="その他学校">その他学校</option>
</select>　
<input name="password2" type="text" id="password2" size="20" maxlength="20"  />学部・学科
    </td>
  </tr>
  <tr>
    <th scope="row">TOEIC</th>
    <td colspan="2"><input name="password2" type="text" id="password2" size="10" maxlength="3"  />点</td>
  </tr>
  <tr>
    <th scope="row">TPEFL</th>
    <td colspan="2"><input name="password2" type="text" id="password2" size="10" maxlength="3"  />点</td>
  </tr>
  <tr>
    <th scope="row">資格</th>
    <td colspan="2"><label for="textfield"></label>
      <textarea name="textfield" cols="50" id="textfield"></textarea></td>
  </tr>
  <tr>
    <th scope="row">現（前）年収</th>
    <td colspan="2"><input name="password3" type="text" id="password3" size="10" maxlength="10"  />
      万円</td>
  </tr>
  <tr>
    <th scope="row">職歴</th>
    <td colspan="2"><input name="password4" type="text" id="password4" size="10" maxlength="4"  />
      年
      <label><input name="name2_1" type="text" disabled="disabled" id="name2_1" size="4" maxlength="2"  /></label>
      月　〜　
      <input name="password4" type="text" id="password4" size="10" maxlength="4"  />
      年
      <label><input name="name2_1" type="text" disabled="disabled" id="name2_1" size="4" maxlength="2"  /></label>
      月
    </td>
  </tr>
  <tr>
    <th scope="row">社名</th>
    <td colspan="2">
    <input name="job1" type="text" id="job" size="40" maxlength="50"  /><br />
    <input name="job2" type="text" id="job" size="40" maxlength="50"  /><br />
    <input name="job3" type="text" id="job" size="40" maxlength="50"  /><br />
    <input name="job4" type="text" id="job" size="40" maxlength="50"  /><br />
    <input name="job5" type="text" id="job" size="40" maxlength="50"  /><br />
    <input name="job6" type="text" id="job" size="40" maxlength="50"  /><br />
    <input name="job7" type="text" id="job" size="40" maxlength="50"  /><br />
    <input name="job8" type="text" id="job" size="40" maxlength="50"  /><br />
    <input name="job9" type="text" id="job" size="40" maxlength="50"  /><br />
    <input name="job10" type="text" id="job" size="40" maxlength="50"  /><br />
    </td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td colspan="2"><label for="privacy"><input type="checkbox" name="privacy" id="privacy" /></label>個人情報について同意する</td>
  </tr>
   <tr>
    <th colspan="3" scope="row"><input type="submit" value="確　認">　<input type="reset" name="Submit" value="リセット" /></th>
    </tr>

</table>
</form>
