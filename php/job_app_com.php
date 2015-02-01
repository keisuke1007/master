<? session_start(); ?>
<? include("connection.php"); ?>
<? include("break.php"); ?>

<?

/*=========データ受渡チェック=========================================================================================*/
if(empty($_POST["pr3"]))
{ $err1 = "<span style='color:#CB070D;'>" . "志望動機が入力されていません。" . "</span>" . "<br>";}


//変更データのキー取得
$get_key = $_GET["upd_key"];
$id = $_SESSION["id"];

//詳細データのSQL
$sql = "SELECT * FROM mem_basic WHERE id='" . $id . "'";
$res = mysql_query($sql, $conn);
$sql_2 = "SELECT * FROM mem_detail WHERE id='" . $id . "'";
$res_2 = mysql_query($sql_2, $conn);
$sql_3 = "SELECT * FROM company WHERE id='" . $get_key . "'";
$res_3 = mysql_query($sql_3,$conn);


//取得した変更データを取り出し
$row = mysql_fetch_array($res);
$row_2 = mysql_fetch_array($res_2);
$row_3 = mysql_fetch_array($res_3);

?>


<?
if($err1 != NULL) {
//テキスト
$qua = replace_br($row_2["qua"]);
$pr1 = replace_br($row_2["pr1"]);
$pr2 = replace_br($row_2["pr2"]);
$job_career = replace_br($row_2["job_career"]);

?>
<form action="job_app_com.php?upd_key=<? echo $get_key; ?>" method="post" enctype="multipart/form-data" id="form1">
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
    <th scope="row">生年月日</th>
    <td>西暦<? echo $row_2["a_d"] ?>年　<? echo $row_2["month"] ?>月　<? echo $row_2["day"] ?>日</td>
  </tr>
  <tr>
    <th scope="row">性別</th>
    <td>
    <?  
		if($row_2["gend"] == 1)
		{ echo "男性"; }
		else if($row_2["gend"] == 2)
		{ echo "女性"; }
	?>    </td>
  </tr>
  <tr>
    <th scope="row">メールアドレス</th>
    <td><? echo $row["mail_address"]; ?></td>
  </tr>
  <tr>
    <th scope="row">電話番号</th>
    <td><? echo $row_2["tel"]; ?></td>
  </tr>
  <tr>
    <th scope="row">現住所</th>
    <td>〒<? echo $row_2["post"]; ?><br />
    <? echo $row_2["prefecture"]; ?><br />
    <? echo $row_2["cities"]; ?>    </td>
  </tr>
  <tr>
    <th scope="row">最終学歴</th>
    <td><? echo $row_2["school1"]. $row_2["school2"]; ?>　<? echo $row_2["school3"]; ?>学部・学科</td>
  </tr>
  <tr>
    <th scope="row">TOEIC</th>
    <td><? echo $row_2["toeic"]; ?>点</td>
  </tr>
  <tr>
    <th scope="row">TPEFL</th>
    <td><? echo $row_2["tpefl"]; ?>点</td>
  </tr>
  <tr>
    <th scope="row">資格</th>
    <td><? echo $qua; ?></td>
  </tr>
  <tr>
    <th scope="row">現（前）年収</th>
    <td><? echo $row_2["ann"]; ?>万円</td>
  </tr>
  <tr>
    <th scope="row">職歴</th>
    <td><? echo $row_2["career1_y"]; ?>年
	<? echo $row_2["career1_m"]; ?>月　〜　
    <? echo $row_2["career2_y"]; ?>年
	<? echo $row_2["career2_m"]; ?>月</td>
  </tr>
  <tr>
    <th scope="row">社名</th>
    <td>
    <? echo $row_2["job1"]; ?><br />
    <? echo $row_2["job2"]; ?><br />
    <? echo $row_2["job3"]; ?><br />
    <? echo $row_2["job4"]; ?><br />
    <? echo $row_2["job5"]; ?><br />
    <? echo $row_2["job6"]; ?><br />
    <? echo $row_2["job7"]; ?><br />
    <? echo $row_2["job8"]; ?><br />
    <? echo $row_2["job9"]; ?><br />
    <? echo $row_2["job10"]; ?><br /></td>
  </tr>
  <tr>
    <th scope="row">自己PR</th>
    <td><? echo $pr1; ?></td>
  </tr>
  <tr>
    <th scope="row">スキルPR</th>
    <td><? echo $pr2; ?></td>
  </tr>
  <tr>
    <th scope="row">職務経歴</th>
    <td><? echo $job_career; ?></td>
  </tr>
   <tr>
     <th scope="row"><span class="style1">※</span>志望動機</th>
	 <td><? echo $err1; ?><textarea name="pr3" cols="50" rows="5" id="pr3"></textarea></td>
   </tr>
   <tr>
    <th colspan="2" scope="row"><input type="submit" value="応募する"></th>
    </tr>
</table>
</form>


<? } else { ?>

<?



//メール設定
$Mail_company = $row_3["mail_address"];
$Mail_mem = $row["mail_address"];
$Mail_sub = "sangi.w07011@gmail.com";
$Mail_sub2 = "info@airshipjp.com";


$pr3_m = $_POST["pr3"];

#文字コードの設定
mb_internal_encoding("utf-8");
mb_language('Japanese');

//テキスト変化
$qua = stripslashes($row_2["qua"]);
$pr1 = stripslashes($row_2["pr1"]);
$pr2 = stripslashes($row_2["pr2"]);
$job_career = stripslashes($row_2["job_career"]);
$pr3 = stripslashes($pr3_m);

//変換REPLACE
$qua = str_replace("<br>", "\n ", $qua);
$pr1 = str_replace("<br>", "\n ", $pr1);
$pr2 = str_replace("<br>", "\n ", $pr2);
$job_career = str_replace("<br>", "\n ", $job_career);
$pr3 = str_replace("<br>", "\n ", $pr3);

//メールセット
$subject = "求人応募完了のお知らせ";
$meg  = "応募内容。\n\n";
$meg  .= "【お名前】:".$row["name"]."\n\n";
$meg  .= "【フリガナ】:".$row["furigana"]."\n\n";
$meg  .= "【生年月日】:"."\n".$row_2["a_d"] . "年" .$row_2["month"] . "月". $row_2["day"] ."日". "\n\n";
$meg  .= "【性別】:".$row_2["gend"]."\n\n";
$meg  .= "【メールアドレス】:".$row["mail_address"]."\n\n";
$meg  .= "【電話番号】:".$row_2["tel"]."\n\n";
$meg  .= "【現住所】:"."〒".$row_2["post"] . "\n".$row_2["prefecture"].$row_2["cities"]."\n\n";
$meg  .= "【最終学歴】:".$row_2["school1"].$row_2["school2"].$row_2["school3"]."\n\n";
$meg  .= "【TOEIC】:".$row_2["toeic"] ."点"."\n\n";
$meg  .= "【TPEFL】:".$row_2["tpefl"] ."点"."\n\n";
$meg  .= "【資格】:".$tel."\n\n";
$meg  .= "【現（前）年収】:".$row_2["ann"] ."万円"."\n\n";
$meg  .= "【職歴】:".$row_2["career1_y"] ."年".$row_2["career1_m"] ."月～".$row_2["career2_y"] ."年".$row_2["career2_m"] ."月"."\n\n";
$meg  .= "【社名 1】:".$row_2["job1"]."\n\n";
$meg  .= "【社名 2】:".$row_2["job2"]."\n\n";
$meg  .= "【社名 3】:".$row_2["job3"]."\n\n";
$meg  .= "【社名 4】:".$row_2["job4"]."\n\n";
$meg  .= "【社名 5】:".$row_2["job5"]."\n\n";
$meg  .= "【社名 6】:".$row_2["job6"]."\n\n";
$meg  .= "【社名 7】:".$row_2["job7"]."\n\n";
$meg  .= "【社名 8】:".$row_2["job8"]."\n\n";
$meg  .= "【社名 9】:".$row_2["job9"]."\n\n";
$meg  .= "【社名 10】:".$row_2["job10"]."\n\n";
$meg  .= "【自己PR】:"."\n".$pr1."\n";
$meg  .= "【スキルPR】:"."\n".$pr2."\n";
$meg  .= "【職務経歴】:"."\n".$job_career."\n";
$meg  .= "【志望動機】:"."\n".$pr3."\n";


/*メール配信処理プログラム
======================================================================*/
mb_send_mail($Mail_company,$subject,$meg,"From:".$Mail_company);
mb_send_mail($Mail_mem,$subject,$meg,"From:".$Mail_mem);
mb_send_mail($Mail_sub,$subject,$meg,"From:".$Mail_sub);
mb_send_mail($Mail_sub2,$subject,$meg,"From:".$Mail_sub2);

?>

<p>応募が完了致しました。<br />
求人担当者より連絡させて頂きます。</p>

<? } ?>

