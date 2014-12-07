<?php

define('SQL_HOST','localhost');
define('SQL_USER','cmsuser');
define('SQL_PASS','cmspass');
define('SQL_DB','cms_mk_db');
$conn = mysql_connect(SQL_HOST, SQL_USER, SQL_PASS)
or die('Could not connect to the database; ' . mysql_error());
mysql_select_db(SQL_DB, $conn)
or die('Could not select database; ' . mysql_error());

require_once 'Excel/reader.php';
$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('CP1251');
$data->read('mask.xls');
 
for ($x = 2; $x <= count($data->sheets[0]["cells"]); $x++) {
	$cat_id =51;
	$author = 2;
	$phone = $data->sheets[0]["cells"][$x][5];
    $name = $data->sheets[0]["cells"][$x][1];
    $gender = $data->sheets[0]["cells"][$x][2];
    $sub = $data->sheets[0]["cells"][$x][3];
	$dis = $data->sheets[0]["cells"][$x][4];
	$today = date("Y-m-d H:i:s", time());
	
    $sql = "INSERT INTO farms_records (cat_id, author_id, tel_no, names,gender,sub,district,date_submitted) 
        VALUES ('$cat_id','$author','$phone','$name','$gender','$sub','$dis','$today')";
    echo $sql."\n";
    mysql_query($sql);
}
?>