<? session_start(); ?>
<? include("connection.php"); ?>
<? include("break.php"); ?>

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
<?
/*========会員情報表示用=============================================*/
?>
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
    <td>西暦<? echo $row_2["a_d"] ?>年　<? echo $row_2["month"] ?>月　<? echo $row_2["day"] ?>日</td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>性別</th>
    <td>
    <?  
		if($row_2["gend"] == 1)
		{ echo "男性"; }
		else if($row_2["gend"] == 2)
		{ echo "女性"; }
	?>
    </td>
  </tr>
  <tr>
    <th scope="row">メールアドレス</th>
    <td><? echo $row["mail_address"]; ?></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>電話番号</th>
    <td><? echo $row_2["tel"]; ?></td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>現住所</th>
    <td>〒<? echo $row_2["post"]; ?><br />
    <? echo $row_2["prefecture"]; ?><br />
    <? echo $row_2["cities"]; ?>
    </td>
  </tr>
  <tr>
    <th scope="row"><span class="style1">※</span>最終学歴</th>
    <td><? echo $row_2["school1"]. $row_2["school2"]; ?>　<? echo $row_2["school3"] . "学部・学科"; ?></td>
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
    <? echo $row_2["job10"]; ?><br />
    </td>
  </tr>
  <tr>
    <th scope="row">自己PR</th>
    <td><? echo $pr1 ; ?></td>
  </tr>
  <tr>
    <th scope="row">スキルPR</th>
    <td><? echo $pr2; ?></td>
  </tr>
  <tr>
    <th scope="row">職務経歴</th>
    <td><? echo $job_career; ?></td>
  </tr>
</table>
<br />
<br />

<a href="/php/mem/mem_refistration2.php">詳細情報編集</a>