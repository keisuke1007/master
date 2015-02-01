<?php session_start(); ?>
<?php include("../connection.php"); ?>
<?php include("../break.php"); ?>
<style type="text/css">
<!--
.style1 {color: #CB070D}
-->
</style>


<!-- 企業登録フォーム -->
<form action="company_conf.php" method="post" enctype="multipart/form-data" id="form1">
<table width="700" border="1" cellspacing="2" cellpadding="4">
  <tr>
    <th scope="row"><span class="style1">※</span>会社名</th>
    <td colspan="2"><label><input name="company_name" type="text" id="company_name" size="40" maxlength="40"  /></label></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>会社名フリガナ</th>
    <td colspan="2"><label><input name="company_name_furigana" type="text" id="company_name_furigana" size="40" maxlength="40"  /></label></td>
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
    <th scope="row"><span class="style1">※</span>ご利用規約</th>
    <td colspan="2"><label for="privacy"><input type="checkbox" name="privacy" id="privacy" value="ture" /></label>ご利用規約</td>
  </tr>
   <tr>
    <th colspan="3" scope="row"><input type="submit" value="確　認">　<input type="reset" name="Submit" value="リセット" /></th>
    </tr>

</table>
</form>
