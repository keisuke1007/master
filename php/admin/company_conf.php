<? session_start(); ?>
<? include("../connection.php"); ?>
<? include("../break.php"); ?>
<style type="text/css">
<!--
.style1 {color: #CB070D}
-->
</style>
<?
header ("Content-type: text/html; charset=utf-8");

/*=========データ受渡チェック=========================================================================================*/
//変数初期化
$erorr_mes=array();
if(empty($_POST["company_name"]))
{ $erorr_mes[1] = "<span style='color:#CB070D;'>" . "企業名が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["company_name_furigana"]))
{ $erorr_mes[2] = "<span style='color:#CB070D;'>" . "フリガナが入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["address1"]))
{ $erorr_mes[3] = "<span style='color:#CB070D;'>" . "メールアドレスが入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["address2"]))
{ $erorr_mes[4] = "<span style='color:#CB070D;'>" . "メールアドレス確認用が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["password1"]))
{ $erorr_mes[5] = "<span style='color:#CB070D;'>" . "パスワードが入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["password1"]))
{ $erorr_mes[6] = "<span style='color:#CB070D;'>" . "パスワード確認用が入力されていません。" . "</span>" . "<br>";}
if(empty($_POST["privacy"]))
{ $erorr_mes[7] = "<span style='color:#CB070D;'>" . "ご利用規約にチャックがありません。" . "</span>" . "<br>";}


/*=========半角チェック=========================================================================================*/

//$rtn = preg_match('/^[-+.\\w]+@[-a-z0-9]+(\\.[-a-z0-9]+)*\\.[a-z]{2,6}$/i',$_POST['address1'] or $_POST['address2']);
//if($rtn==FALSE){ $erorr_mes[8] ="メールアドレスの書式が正しくありません。たとえば@が全角になっていませんか？";}

/*=========データ整合性チェック=========================================================================================*/

if($_POST["address1"] !== $_POST["address2"])
{ $erorr_mes[9] = "<span style='color:#CB070D;'>" . "メールアドレスとメールアドレス確認が一致しません。" . "</span>" . "<br>";}
if($_POST["password1"] !== $_POST["password2"])
{ $erorr_mes[10] = "<span style='color:#CB070D;'>" . "パスワードとパスワード確認が一致しません。" . "</span>" . "<br>";}



?>

<? if (count($erorr_mes)) {
/*========エラー表示用=============================================*/
?>
<!-- 企業登録フォーム -->
<form action="company_conf.php" method="post" enctype="multipart/form-data" id="form1">
<table width="700" border="1" cellspacing="2" cellpadding="4">
  <tr>
    <th scope="row"><span class="style1">※</span>会社名</th>
    <td colspan="2"><? echo $erorr_mes[1]; ?><label><input name="company_name" type="text" id="company_name" size="40" maxlength="40" value="<? echo $_POST["company_name"]; ?>"/></label></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>会社名フリガナ</th>
    <td colspan="2"><? echo $erorr_mes[2]; ?><label><input name="company_name_furigana" type="text" id="company_name_furigana" size="40" maxlength="40" value="<? echo $_POST["company_name_furigana"]; ?>"/></label></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>メールアドレス</th>
    <td colspan="2"><? echo $erorr_mes[3]; ?><? echo $erorr_mes[8]; ?><? echo $erorr_mes[9]; ?><label><input name="address1" type="text" id="address1" size="40" maxlength="40" value="<? echo $_POST["address1"]; ?>"/></label></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>メールアドレス確認</th>
    <td colspan="2"><? echo $erorr_mes[4]; ?><label><input name="address2" type="text" id="address2" size="40" maxlength="40"  /></label></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>パスワード</th>
    <td colspan="2"><? echo $erorr_mes[5]; ?><? echo $erorr_mes[10]; ?><label><input name="password1" type="password" id="password1" size="20" maxlength="20"  /></label></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>パスワード確認</th>
    <td colspan="2"><? echo $erorr_mes[6]; ?><label><input name="password2" type="password" id="password2" size="20" maxlength="20"  /></label></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>ご利用規約</th>
    <td colspan="2"><? echo $erorr_mes[7]; ?><label for="privacy"><input type="checkbox" name="privacy" id="privacy" value="ture" /></label>ご利用規約</td>
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
<form action="company_send.php" method="post" enctype="multipart/form-data" id="form1">
<table width="700" border="1" cellspacing="2" cellpadding="4">
  <tr>
    <th scope="row"><span class="style1">※</span>会社名</th>
    <td colspan="2"><? echo $_POST["company_name"] ?></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>フリガナ</th>
    <td colspan="2"><? echo $_POST["company_name_furigana"] ?></td>
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
<input type="hidden" name="company_name" value="<? echo $_POST["company_name"] ?>"/>
<input type="hidden" name="company_name_furigana" value="<? echo $_POST["company_name_furigana"] ?>"/>
<input type="hidden" name="address1" value="<? echo $_POST["address1"] ?>"/>
<input type="hidden" name="password1" value="<? echo $_POST["password1"] ?>"/>

</form>

<? } ?>
