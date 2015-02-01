<?php include("../connection.php"); ?>
<?php include("../break.php"); ?>
<style type="text/css">
<!--
.style1 {color: #CB070D}
-->
</style>


<!-- 応募者登録フォーム -->
<form action="mem_registration1_conf.php" method="post" enctype="multipart/form-data" id="form1">
<table width="700" border="1" cellspacing="2" cellpadding="4">
  <tr>
    <th scope="row"><span class="style1">※</span>氏名</th>
    <td>氏<label><input name="name1_1" type="text" id="name1_1" size="20" maxlength="30"  /></label></td>
    <td>名<label><input name="name1_2" type="text" id="name1_2" size="20" maxlength="30"  /></label></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>フリガナ</th>
    <td>シ<label><input name="name2_1" type="text" id="name2_1" size="20" maxlength="30"  /></label></td>
    <td>メイ<label><input name="name2_2" type="text" id="name2_2" size="20" maxlength="30"  /></label></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>メールアドレス</th>
    <td colspan="2"><label><input name="address1" type="text" id="address1" size="40" maxlength="40"  /></label></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>メールアドレス確認</th>
    <td colspan="2"><label><input name="address2" type="text" id="address2" size="40" maxlength="40"  /></label></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>パスワード</th>
    <td colspan="2"><label><input name="password1" type="password" id="password1" size="20" maxlength="20"  /></label></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>パスワード確認</th>
    <td colspan="2"><label><input name="password2" type="password" id="password2" size="20" maxlength="20"  /></label></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>個人情報保護</th>
    <td colspan="2"><label for="privacy"><input type="checkbox" name="privacy" id="privacy" value="ture" /></label>個人情報について同意する</td>
  </tr>
   <tr>
    <th colspan="3" scope="row"><input type="submit" value="確　認">　<input type="reset" name="Submit" value="リセット" /></th>
    </tr>

</table>
</form>
