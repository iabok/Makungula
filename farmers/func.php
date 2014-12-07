<?php
require_once '../includes/conn.php';
require_once '../includes/http.php';
$ans = $_POST['count'];
if ($ans==0) {
	$tel_no =  $_POST['tel_num'];
	$key = mysql_real_escape_string( $_POST['keyword']);
	$names = mysql_real_escape_string( $_POST['names']);
	$sub = mysql_real_escape_string( $_POST['sub']);
	$district = mysql_real_escape_string( $_POST['district']);
	$network = mysql_real_escape_string( $_POST['network']);
	$today = date("Y-m-d H:i:s", time());

			$sql = "INSERT INTO farms_records (tel_no , keyword , names , sub, district , network , date_submitted ) VALUES ('".$tel_no."' , '$key ' , '$names', '$sub', '$district' , '$network' , '$today')";
			$result = mysql_query($sql, $conn) or die('Could not insert data; ' . mysql_error());
			$farmid = mysql_insert_id();

			redirect('?view&&mesg=Record was added successfully'.'&& farm_id='.$farmid);



}  


 else{
 
 $ans = $_POST['count'];
/*Begining of for statement */	
for ($i=1; $i <= $ans ; ++$i) { 

	$tel_no = $_POST['telnu_'.$i];
	$key = $_POST['key_'.$i];
	$names = $_POST['names_'.$i];
	$sub = $_POST['sub_'.$i];
	$district = $_POST['district_'.$i];
	$network =$_POST['network_'.$i];
	$today = date("Y-m-d H:i:s", time());

			$sql = "INSERT INTO farms_records (tel_no, keyword , names , sub,  district , network , date_submitted ) VALUES ('".$tel_no."' , '$key ' , '$names', '$sub', '$district' , '$network' , '$today')";
			$result = mysql_query($sql, $conn) or die('Could not insert data; ' . mysql_error());

			

}
/*end of for */
			
			redirect('?view&&msg=Record was added successfully');


}
 
 

 

?>
