<?php include("../connection.php"); ?>
<?php include("../break.php"); ?>
<style type="text/css">
<!--
.style1 {color: #CB070D}
-->
</style>
<?
/*=========データ受渡チェック=========================================================================================*/
if(empty($_POST["name1_1"]) or empty($_POST["name1_2"]))
{ $err1 = "<span style='color:#CB070D;'>" . "氏名が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["name2_1"]) or empty($_POST["name2_2"]))
{ $err2 = "<span style='color:#CB070D;'>" . "フリガナが入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["address1"]))
{ $err3 = "<span style='color:#CB070D;'>" . "メールアドレスが入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["address2"]))
{ $err4 = "<span style='color:#CB070D;'>" . "メールアドレス確認が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["password1"]))
{ $err5 = "<span style='color:#CB070D;'>" . "パスワードが入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["password2"]))
{ $err6 = "<span style='color:#CB070D;'>" . "パスワード確認が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["privacy"]))
{ $err7 = "<span style='color:#CB070D;'>" . "個人情報保護方針にチェックがついていません。" . "</span>" . "<br>";}


/*=========データ整合性チェック=========================================================================================*/

if($_POST["address1"] !== $_POST["address2"])
{ $err8 = "<span style='color:#CB070D;'>" . "メールアドレスとメールアドレス確認が一致しません。" . "</span>" . "<br>";}
if($_POST["password1"] !== $_POST["password2"])
{ $err9 = "<span style='color:#CB070D;'>" . "パスワードとパスワード確認が一致しません。" . "</span>" . "<br>";}



?>

<? if($err1 != NULL || $err2 != NULL || $err3 != NULL|| $err4 != NULL|| $err5 != NULL|| $err6 != NULL|| $err7 != NULL|| $err8 != NULL || $err9 != NULL) {
/*========エラー表示用=============================================*/
?>
<!-- 応募者登録フォーム -->
<form action="mem_registration1_conf.php" method="post" enctype="multipart/form-data" id="form1">
<table width="700" border="1" cellspacing="2" cellpadding="4">
  <tr>
    <th scope="row"><span class="style1">※</span>氏名</th>
    <td><? echo $err1; ?>氏<input name="name1_1" type="text" id="name1_1" size="20" maxlength="30" value="<? echo $_POST["name1_1"] ?>"/></td>
    <td>名<input name="name1_2" type="text" id="name1_2" size="20" maxlength="30" value="<? echo $_POST["name1_2"] ?>"/></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>フリガナ</th>
    <td><? echo $err2; ?>シ<input name="name2_1" type="text" id="name2_1" size="20" maxlength="30" value="<? echo $_POST["name2_1"] ?>"/></td>
    <td>メイ<input name="name2_2" type="text" id="name2_2" size="20" maxlength="30" value="<? echo $_POST["name2_2"] ?>"/></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>メールアドレス</th>
    <td colspan="2"><? echo $err3; ?><? echo $err8; ?><input name="address1" type="text" id="address1" size="40" maxlength="40" value="<? echo $_POST["address1"] ?>"/></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>メールアドレス確認</th>
    <td colspan="2"><? echo $err4; ?><input name="address2" type="text" id="address2" size="40" maxlength="40" value="<? echo $_POST["address2"] ?>"/></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>パスワード</th>
    <td colspan="2"><? echo $err5; ?><? echo $err9; ?><input name="password1" type="password" id="password1" size="20" maxlength="20"/></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>パスワード確認</th>
    <td colspan="2"><? echo $err6; ?><input name="password2" type="password" id="password2" size="20" maxlength="20"  /></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>個人情報保護</th>
    <td colspan="2"><? echo $err7; ?><label for="privacy"><input type="checkbox" name="privacy" id="privacy" value="ture" /></label>個人情報について同意する</td>
  </tr>
   <tr>
    <th colspan="3" scope="row"><input type="submit" value="確　認">　<input type="reset" name="Submit" value="リセット" /></th>
    </tr>
</table>
</form>

<? } else {
/*========登録確認=============================================*/
?>
以下の内容で登録します。
<form action="mem_registration1_send.php" method="post" enctype="multipart/form-data" id="form1">
<table width="700" border="1" cellspacing="2" cellpadding="4">
  <tr>
    <th scope="row"><span class="style1">※</span>氏名</th>
    <td><? echo $_POST["name1_1"] ?></td>
    <td><? echo $_POST["name1_2"] ?></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>フリガナ</th>
    <td><? echo $_POST["name2_1"] ?></td>
    <td><? echo $_POST["name2_2"] ?></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>メールアドレス</th>
    <td colspan="2"><? echo $_POST["address1"] ?></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>パスワード</th>
    <td colspan="2"><? echo $_POST["password1"]; ?></td>
  </tr>
   <tr>
    <th colspan="3" scope="row"><input type="submit" value="登　録"></th>
    </tr>
</table>
<!-- データセット	 -->
<input type="hidden" name="name1_1" value="<? echo $_POST["name1_1"] ?>"/>
<input type="hidden" name="name1_2" value="<? echo $_POST["name1_2"] ?>"/>
<input type="hidden" name="name2_1" value="<? echo $_POST["name2_1"] ?>"/>
<input type="hidden" name="name2_2" value="<? echo $_POST["name2_2"] ?>"/>
<input type="hidden" name="address1" value="<? echo $_POST["address1"] ?>"/>
<input type="hidden" name="password1" value="<? echo $_POST["password1"] ?>"/>

</form>

<? } ?>
