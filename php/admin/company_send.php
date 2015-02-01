<? session_start(); ?>
<? include("../connection.php"); ?>
<? include("../break.php"); ?>


<?
header ("Content-type: text/html; charset=utf-8");

/*=========データセット===============================================*/


$company_name = $_POST["company_name"];
$furigana = $_POST["company_name_furigana"];
$mail_address = $_POST["address1"];
$pass = $_POST["password1"];
$date = date("Y-n-j H:i:s");


/*=========メール送信===============================================*/
#配信設定
$adminMail ="info@jobc.biz";#kawarazaki
$adminMail_2 = "sangi.w07011@gmail.com";#muramatsu
#文字コードの設定
mb_internal_encoding("utf-8");
//mb_language('Japnese');

$msg = stripslashes($_POST["mess"]);
$msg = str_replace("<br>", "\n ", $msg);

$subject = "【求人サイトジョブチェンジ】企業登録完了のお知らせ";
$meg  ="".$company_name.'様'."\n\n";
$meg  .= "完全無料の求人サイトジョブチェンジの企業登録が完了しました。\n\n
ご登録いただいたメールアドレス・パスワードで\n
ジョブチェンジを引き続きご利用ください。\n\n
※パスワードの取り扱いには、十分ご注意ください。\n
※ログインの際のメールアドレス・パスワードの入力は、すべて半角文字になります。\n\n
==============================\n
※このメールに覚えのない方へ\n
==============================\n
他の方があなたのメールアドレスを誤って登録しようとした可能性があります。\n
メールアドレス情報を削除させていただきますので、大変お手数ですが、\n
下記URLから窓口にお問い合わせいただきますようお願いいたします。\n\n
────────────────────────────────\n
※このメールへの返信は行わないでください。\n
────────────────────────────────\n
◆お問い合わせ：\n
下記URLに掲載の窓口からお問い合わせください。\n
http://www.jobsite.com/support/\n
……………………………………………………………………………………\n";


#メール配信
mb_send_mail($mail_address,$subject,$meg,"From:".$adminMail);#企業様
#サブメール配信
mb_send_mail($adminMail,$subject,$meg,"From:".$adminMail);#kawarazaski
mb_send_mail($adminMail_2,$subject,$meg,"From:".$adminMail);#muramatsu



//データ入力
$sql = "INSERT INTO company_basic(date,company_name,company_name_furigana,company_mail,password) VALUES('$date','$company_name','$furigana','$mail_address','$pass')";
mysql_query($sql, $conn) or die("登録できませんでした" . "<br>");


$sql2 = "SELECT * FROM company_basic WHERE company_mail ='" . $mail_address . "'";
$res2 = mysql_query($sql2,$conn);
$row2 = mysql_fetch_array($res2);

$id = $row2["id"];

//データ入力
$sql3 = "INSERT INTO company(id,company_name,company_name_furigana,mail_address) VALUES('$id','$company_name','$furigana','$mail_address')";
mysql_query($sql3, $conn) or die( $sql3 ."登録できませんでした" . "<br>" );
echo ("登録しました" . "<br>");


$_SESSION["com_id"] = $id;

?>

<a href="job_input.php">詳細入力</a>