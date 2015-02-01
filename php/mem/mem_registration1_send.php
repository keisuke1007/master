<? session_start(); ?>
<? include("../connection.php"); ?>
<? include("../break.php"); ?>


<?
/*=========データセット===============================================*/


$name = $_POST["name1_1"] . $_POST["name1_2"];
$furigana = $_POST["name2_1"] . $_POST["name2_2"];
$mail_address = $_POST["address1"];
$pass = $_POST["password1"];
$date = date("Y-n-j H:i:s");


/*=========メール送信===============================================*/
#配信設定
$adminMail ="info@jobc.biz";#kawarazaki
$adminMail_2 = "sangi.w07011@gmail.com";#muramatsu
#文字コードの設定
mb_internal_encoding("utf-8");
mb_language('Japnese');

$msg = stripslashes($_POST["mess"]);
$msg = str_replace("<br>", "\n ", $msg);

$subject = "【求人サイトジョブチェンジ】会員登録完了のお知らせ";
$meg  ="".$name.'様'."\n\n";
$meg  .= "完全無料の求人サイトジョブチェンジの会員登録が完了しました。\n\n
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
mb_send_mail($mail_address,$subject,$meg,"From:".$adminMail);#会員
#サブメール配信
mb_send_mail($adminMail,$subject,$meg,"From:".$adminMail);#kawarazaski
mb_send_mail($adminMail_2,$subject,$meg,"From:".$adminMail);#muramatsu



//データ入力
$sql = "INSERT INTO mem_basic(date,name,furigana,mail_address,pass) VALUES('$date','$name','$furigana','$mail_address','$pass')";
mysql_query($sql, $conn) or die("登録できませんでした" . "<br>");


$sql2 = "SELECT * FROM mem_basic WHERE mail_address ='" . $mail_address . "'";
$res2 = mysql_query($sql2,$conn);
$row = mysql_fetch_array($res2);

$id = $row["id"];

//データ入力
$sql3 = "INSERT INTO mem_detail(id) VALUES('$id')";
mysql_query($sql3, $conn) or die("登録できませんでした" . "<br>" );
echo ("登録しました" . "<br>");


$_SESSION["id"] = $id;

?>

<a href="mem_refistration2.php">詳細入力</a>