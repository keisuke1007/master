<?php session_start(); ?>
<?php include("../connection.php") ;?>
<?php include("../break.php") ;?>
<style type="text/css">
<!--
.style1 {color: #CB070D}
-->
</style>

<?
header ("Content-type: text/html; charset=utf-8");

/*=========データセット============================*/

//$checkbox = $_REQUEST["treatment"];
//for($i=0; $i<sizeof($checkbox); $i++){
//$treatment =  "${checkbox[$i]}<br>";
//}


/*データベース読み込み
==================================================================================
*/
$get_key = $_SESSION["com_id"];
$sql = "SELECT * FROM company_basic WHERE id='" . $get_key . "'";
$res = mysql_query($sql, $conn);

//取得した変更データを取り出し
$row = mysql_fetch_array($res);


$company_name = $row["company_name"];
$company_name_furigana = $row["company_name_furigana"];
$company_pr = $_POST["company_pr"];
$delegate = $_POST["delegate"];
$person = $_POST["person"];
$establishment1 = $_POST["establishment1"];
$establishment2 = $_POST["establishment2"];
$capital = $_POST["capital"];
$number_of_employees = $_POST["number_of_employees"];
$post = $_POST["post"];
$prefecture = $_POST["prefecture"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$mail_address = $_POST["mail_address"];
$tel = $_POST["tel"];
$title = $_POST["title"];
$job_opening = $_POST["job_opening"];
$job_category = $_POST["job_category"];
$treatment = $_POST["treatment"];
$e_status = $_POST["e_status"];
$background = $_POST["background"];
$description = $_POST["description"];
$location = $_POST["location"];
$time = $_POST["time"];
$requirements = $_POST["requirements"];
$salary = $_POST["salary"];
$bonus = $_POST["bonus"];
$employed_persons = $_POST["employed_persons"];
$welfare = $_POST["welfare"];
$process = $_POST["process"];
$freedom1 = $_POST["freedom1"];
$freedom2 = $_POST["freedom2"];
$freedom3 = $_POST["freedom3"];
$freedom4 = $_POST["freedom4"];
$freedom5 = $_POST["freedom5"];
    
$image1 = $_POST["image1"];
$image2 = $_POST["image2"];
$image3 = $_POST["image3"];

//登録時間の取得
$datetime = date("Ymd");




//データ入力
$sql = "UPDATE company SET " . "datetime = '" . $datetime . "'," . "company_name = '" . $company_name . "'," . "company_name_furigana = '" . $company_name_furigana . "'," . "company_pr = '" . $company_pr . "'," . "delegate = '" . $delegate . "'," . "person = '" . $person . "'," . "establishment1 = '" . $establishment1 . "'," . "establishment2 = '" . $establishment2 . "'," . "capital = '" . $capital . "'," . "number_of_employees = '" . $number_of_employees . "'," . "post = '" . $post . "'," . "prefecture = '" . $prefecture . "'," . "address1 = '" . $address1 . "'," . "address2 = '" . $address2 . "'," . "mail_address = '" . $mail_address . "'," . "tel = '" . $tel . "'," . "title = '" . $title . "'," . "job_opening = '" . $job_opening . "'," . "job_category = '" . $job_category . "'," . "treatment = '" . $treatment . "'," . "e_status = '" . $e_status . "'," . "background = '" . $background . "'," . "image1 = '" . $image1 . "'," . "image2 = '" . $image2 . "'," . "image3 = '" . $image3 . "'," . "description = '" . $description . "'," . "location = '" . $location . "'," . "time = '" . $time . "'," . "requirements = '" . $requirements . "'," . "salary = '" . $salary . "'," . "bonus = '" . $bonus . "'," . "employed_persons = '" . $employed_persons . "'," . "welfare = '" . $welfare . "'," . "process = '" . $process . "'," . "freedom1 = '" . $freedom1 . "'," . "freedom2 = '" . $freedom2 . "'," . "freedom3 = '" . $freedom3 . "'," . "freedom4 = '" . $freedom4 . "'," . "freedom5 = '" . $freedom5 . "' WHERE id = '" . $get_key . "'";
mysql_query($sql, $conn) or die("登録できませんでした" . "<br>". $sql);


/*
$sql = "INSERT INTO company(datetime,company_name,company_name_furigana,company_pr,delegate,person,establishment1,establishment2,capital,number_of_employees,post,prefecture,address1,address2,mail_address,tel,title,job_opening,job_category,treatment,e_status,background,image1,image2,image3,description,location,time,requirements,salary,bonus,employed_persons,welfare,process,freedom1,freedom2,freedom3,freedom4,freedom5) 
VALUES('$datetime,'$company_name','$company_name_furigana','$company_pr','$delegate','$person','$establishment1','$establishment2','$capital','$number_of_employees','$post','$prefecture','$address1','$address2','$mail_address','$tel','$title','$job_opening','$job_category','$treatment','$e_status','$background','$image1','$image2','$image3','$description','$location','$time','$requirements','$salary','$bonus','$employed_persons','$welfare','$process','$freedom1','$freedom2','$freedom3','$freedom4','$freedom5')";
mysql_query($sql, $conn) or die("登録できませんでした" . "<br>". $sql);
*/	
	
echo ("登録しました" . "<br>");
?>