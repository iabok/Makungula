<?php
 session_start();
 ini_set('display_errors','0');
require_once '../includes/conn.php';


#Delete-------------------------------------------------------------------
		if(isset($_POST['delete']) and isset($_POST['farm_id'])){
			$sql2 = "SELECT * FROM farms_records WHERE farmers_id = " . $_POST['farm_id'];
			$result1 = mysql_query($sql2,$conn);
			$num = mysql_num_rows($result1);
				if($num=='0'){
				echo'<div id="error2">';
				echo'<span style=" font-size:16px;">Cannot Delete. Farmer Doesnot Exist.!</span><br>';
				echo'</div>';
				}else{
						echo'<br>';
						if ($row = mysql_fetch_array($result1)) {
								extract($row);
 
									
												$sql = "DELETE FROM farms_records " .
												"WHERE farmers_id=" . $_POST['farm_id'];
												mysql_query($sql)
												or die('Could not remove farmer; ' . mysql_error());
									
										echo'<div id="message2">';
										echo '<span style="font-size:14px; margin-left:150px; font-family:calibri">The Farmer  Has Been Deleted Successful.!</span><br>';
										echo'</div>';
										
										
										}
									
									}
								
								}
							
							
						
						

#End of delete------------------------------------------------------------------------
 
	
#Edit-----------------------------------------------------------------------------									
		if(isset($_GET['edit'])){
			$sql4 = "SELECT * FROM farms_records WHERE farmers_id = " . $_GET['edit'];
			$res = mysql_query($sql4,$conn);
			$num = mysql_num_rows($res);
			if($num=='0'){
			echo'<div id="error2">';
			echo'<span style="font-size:16px;">Cannot Edit. Farmer Doesnot Exist.!</span><br>';
			echo'</div>';
			}else{
						echo'<br>';
						if ($rw = mysql_fetch_array($res)) {
						extract($rw);
$tel_num = $rw['tel_no'];
$keyword = $rw['keyword'];
$names = $rw['names'];
$sub = $rw['sub'];
$district = $rw['district'];
$network = $rw['network'];
$farm_id = $_GET['farm_id'];
$cat_id = $rw['cat_id'];
$authorid = $rw['author_id'];

 
	echo'<form action="modify.php" id="form-bg-farm"  method="POST" enctype="multipart/form-data">';
echo "<div class='farmer-position'> ";
					echo'<div id="pageHead">';
									echo'<h1 style="font-size:25px; margin-left:20px;  font-weight:normal; color:#363636;"><img src="img/edit.png"/>&nbsp;Edit Farmer</h1>';					 
					echo'</div>';
		echo'<div>';
			echo'<label for="tel_num"><span style="color:#60696d; font-size:14px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">Telephone Number:</span>';
			echo'<input name="tel_num" id="user_location" type="text" required="required" value="'.$tel_num.'" /></label>';
		echo'</div>';
        
		echo'<div>';
			echo'<label for="keyword"><span style="color:#60696d; font-size:14px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">Keyword</span>';
			echo'<select name="keyword" id="position">';
				echo'<option>'.$keyword.'</option>';
				echo'<option>Mulimisa</option>';
				echo'<option>Muhingisa</option>';
			echo'</select></label>';
		echo'</div>';
        echo'<div>';
			echo'<label for="names"><span style="color:#60696d; font-size:14px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">Names:</span>';
			echo'<input name="names" id="user_location" type="text" required="required" value="'.$names.'" /></label>';
		echo'</div>';

        echo'<div>';
			echo'<label for="names"><span style="color:#60696d; font-size:14px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">Sub-County:</span>';
			echo'<input name="sub" id="user_location" type="text" required="required" value="'.$sub.'" /></label>';
		echo'</div>';
		
		echo'<div>';
			echo'<label for="district"><span style="color:#60696d; font-size:14px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">District:</span>';
			echo'<input name="district" id="district" type="text" required="required" value="'.$district.'" /></label>';
		echo'</div>';
		
		
		echo'<div>';
			echo'<label for="network"><span style="color:#60696d; font-size:14px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">Network';
			echo'<select name="network" id="house_type">';
				echo'<option>'.$network.'</option>';
				echo'<option>MTN</option>';
				echo'<option>Orange</option>';
				echo'<option>Airtel</option>';
				echo'<option>Warid</option>';
				echo'<option>UTL</option>';
				 
				 
			echo'</select></label>';
		echo'</div>';

		echo'<div>';
            echo'<input type="hidden" name="author_id" id="qnu" class="email1" value="'. $author_id .  '">';
            echo'<input type="hidden" name="farm_id" id="qnu" class="email1" value="'. $_GET['edit'] .  '">';
			echo'<input type="submit" name="submit" id="send" value="Save Changes" />';
			echo'</form>';
			
      				echo '<form action="modify.php" method="POST">';
							echo'<span style="color:#5e5e5e; font-size:16px; font-weight:bold; margin-top:20px; font-family:Arial;">OR:</span>&nbsp;';
							echo'<label for="nm"><span style="color:#5e5e5e; font-size:20px; font-weight:normal; ">Delete Farmer:</span>&nbsp;<br>';
						           echo'<input type="hidden" name="farm_id" id="qnu" class="email1" value="'. $_GET['edit'] .  '">';
									echo'<input type="submit" name="delete" id="delete" value="Delete">';
									echo'</label>';
							echo '</form>';
		echo'</div>';
    echo'</div>';

	
	
	
					 
 			
					}
				
				
				}
			
			
			}

#End of Edit------------------------------------------------------------------------------------------------




			
#Update after editing---------------------------------------------------------------------------------------------------------------------		

		if (isset($_POST['submit'])){
								 
							$sql = "UPDATE farms_records " .
								"SET tel_no='" .$_POST['tel_num'] ."', author_id='" . mysql_escape_string($_POST['author'] )."',keyword='" . mysql_escape_string( $_POST['keyword']) ."', 
								names='" . mysql_escape_string( $_POST['names']) ."', sub='" . mysql_escape_string( $_POST['sub']) ."',district='" . mysql_escape_string( $_POST['district']) ."',
								network='" . mysql_escape_string( $_POST['network']) ."',date_modified='" .date("Y-m-d H:i:s", time()). "' " ." WHERE farmers_id=".$_POST['farm_id']; 
								mysql_query($sql) or die('Could not update records; ' . mysql_error());
				echo'<div id="message2">';
					echo '<span style="font-size:14px; margin-left:150px; font-family:calibri">Farmer\'s records has been updated successful.!</span>';
			echo'</div>';
 
			
			}
		
		
	
	
	
#End of update------------------------------------------------------------------------------------------------------------------------


 
 
 

 
 


 
		   ?>
		   <style>
#error{
background:#f7c1c1;
width:400px;
padding:10px;
border:1px solid #c92323;
margin-top:0px;
position:relative;
left:100px;
font-family:sans-serif;
top:10px;
font-size:14px;
color:#3c3b3b;

}
</style>

 

<!--  -----------------------------------Begining-of the stylesheet-----------------------------------------  -->
<style type="text/css">@import "http://localhost/mk/modules/css/body-white.css";</style>
<style type="text/css">@import "http://localhost/mk/modules/css/farm.css";</style>
<style>
body{color:#fff;}
#pageHead{margin-top:0px;}
#message2{
background:#7dc54c;
width:700px;
padding:10px;
border:1px solid #508c28;
text-indent:50px;
font-size:14px;
font-family:sans-serif;
font-weight:normal;
margin-bottom:20px;
position:relative;
left:10px;
color:#fff;
}

#error2{
background:#f7c1c1;
width:350px;
text-indent:20px;
padding:5px 5px 5px 5px;
border:1px solid #c92323;
margin-top:0px;
position:relative;
left:150px;
top:10px;
font-size:12px;
color:#3c3b3b;

}

#theme{
	width:250px;
	height:40px;
}

#author{
	width:250px;
	height:40px;
}
 
 
input[type="text"]
 {
  display: inline-block;
  height: 30px;
  padding: 4px 6px;
  margin-bottom: 9px;
  font-size: 14px;
  line-height: 20px;
  color: #555555;
  -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
          border-radius: 3px;
}

input{
  width: 150px;
 
}

select{
  width: 100px;
}

input[type="text"]{
 
  background-color: #ffffff;
  border: 1px solid #cccccc;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
     -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
     -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
       -o-transition: border linear 0.2s, box-shadow linear 0.2s;
          transition: border linear 0.2s, box-shadow linear 0.2s;
}
.update-preview{
	margin-left:100px;

}
 #send {
	font-size: 12px;
	font-family:Arial;
	background: #5b972f;	
	*display: inline-block;	
	color: #fff!important;
	text-decoration: none;
	position: relative;
	cursor: pointer;
	width:100px;
	font-weight: bold;	
	padding: 5px 15px 5px;	
	margin: 20px 5px 20px 0px;
	border: none;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;	
}
.file-bg-header{background:#eeeeee; padding:-2px; border:1px solid #d2d2d2; width:180px; height:30px; margin-bottom:20px;  font-family:calibri; }
h3{font-size:12px; color:#787979; margin-left:40px; position:relative; top:0px; cursor:pointer; }
</style>