<?php
class farmcontents{


#Begin of loging form.......

public function addfarmers(){
?>
<div id="middle">
	<div id="main" class="clearfix">		
								 
					<div id="pageHead">
									<h1 style="font-size:30px;">Add Farmers</h1>
									<!--<div id="fm-border"></div>-->
					</div>
							<!--<div class="bg-farmers">-->
							
				<?php
					$count=$_POST['nm'];
				
				if($count==0){	
				echo'<form action="func.php" id="form-bg-farmer"  method="POST" enctype="multipart/form-data">';
echo "<div class='farmer-position'> ";

		echo'<div>';
			echo'<label for="tel_num"><span style="color:#60696d; font-size:12px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">TelePhone Number(+256):</span>';
			echo'<input name="tel_num" id="user_location" type="text" required="required" /></label>';
		echo'</div>';
        
		echo'<div>';
			echo'<label for="keyword"><span style="color:#60696d; font-size:12px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">Keyword</span>';
			echo'<select name="keyword" id="position">';
				echo'<option>Mulimisa</option>';
				echo'<option>Muhingisa</option>';
			echo'</select></label>';
		echo'</div>';

		
		 echo'<div>';
			echo'<label for="names"><span style="color:#60696d; font-size:12px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">Names:</span>';
			echo'<input name="names" id="user_location" type="text" required="required" /></label>';
		echo'</div>';
		
        echo'<div>';
			echo'<label for="names"><span style="color:#60696d; font-size:12px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">Sub-County:</span>';
			echo'<input name="sub" id="user_location" type="text" required="required" /></label>';
		echo'</div>';
		
		echo'<div>';
			echo'<label for="district"><span style="color:#60696d; font-size:12px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">District:</span>';
			echo'<input name="district" id="district" type="text" required="required" /></label>';
		echo'</div>';
		
		
		echo'<div>';
			echo'<label for="network"><span style="color:#60696d; font-size:12px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">Network';
			echo'<select name="network" id="house_type">';
				echo'<option>MTN</option>';
				echo'<option>Orange</option>';
				echo'<option>Airtel</option>';
				echo'<option>Warid</option>';
				echo'<option>UTL</option>';
				 
			echo'</select></label>';
		echo'</div>';

		echo'<div>';
    echo'<input type="hidden" name="qnu_id" id="qnu" class="email1" value="'. $id .  '">';
      echo'<input type="hidden" name="qnu" id="qnu" class="email1" value="'. $qns .  '">';
			echo'<input name="place_request_button" id="fm-submit" type="submit" value="Submit" />';
   	echo'</form>';   


	
				echo '<form action="" method="POST">';
							echo'<span style="color:#5e5e5e; font-size:16px; font-weight:bold; margin-top:20px; font-family:Arial;">OR:</span>&nbsp;';
							echo'<label for="nm"><span style="color:#5e5e5e; font-size:12px; font-family:Arial;">Select the number of Farmers:</span>&nbsp;';
							$count;
							echo'<select name="nm" id="count">';
							for($count=2; $count<=10; $count++){
							echo'<option>';
							echo $count;
							echo'</option>';	
							}
							echo'</select>';
							echo'</label>';
							echo'<label ><span style="color:#5e5e5e; font-size:12px; font-family:Arial;">Submit the number:</span><Br>';
 
									echo'<input type="submit" name="submit" id="send" value="Send">';
									echo'</label>';
							echo '</form>';
							
				}			
		elseif(isset($_POST['nm'])){
			$i;
			$count =$_POST['nm'];
			 
					echo'<form action="func.php"    method="POST" enctype="multipart/form-data">';
				echo'<table class="datatable">';
				echo'<tr>';
                    echo'<th scope="col">Telephone Number</th>';
                    echo'<th scope="col">Key Word</th>';
                    echo'<th scope="col">Name</th>';
                    echo'<th scope="col">Sub-county</th>';
                    echo'<th scope="col">District</th>';
					echo'<th scope="col">Network</th>';
                    echo'</tr>';
					for ($i = 1; $i <= $count; $i++)
{
                    		
					echo'<tr>';
                    echo'<td ><input type="text" name="telnu_'.$i. '" required="required"></td>';
					echo'<td><select name="key_'.$i.'">';
					echo'<option>';
					echo'Mulimisa';
					echo'</option>';
					echo'<option>';
					echo'Muhingisa';
					echo'</option>';
					echo'</select>';
					echo'</td>';
					
					echo'<td><input type="text" name="names_'.$i. '" required="required"></td>';
					echo'<td><input type="text" name="sub_'.$i. '" required="required"></td>';
					echo'<td><input type="text" name="district_'.$i. '" required="required"></td>';
					echo'<td><select name="network_'.$i.'" required="required">';
					echo'<option>';
					echo'MTN';
					echo'</option>';
					echo'<option>';
					echo'Orange';
					echo'</option>';	
				    echo'<option>Airtel</option>';
				    echo'<option>Warid</option>';
					echo'<option>UTL</option>';
					echo'</select>';
					echo'</td>';
                    echo'</tr>';

}

echo'</table>';
echo'<br><br>';
 echo'<input type="hidden" name="count" id="qnu" class="email1" value="'. $count .  '">';
echo'<input type="hidden" name="qnu" id="qnu" class="email1" value="'. $qns .  '">';
echo'<span style="color:#5e5e5e; font-size:20px; font-weight:normal; margin-top:20px; font-family:Arial;">Total Number of Farmers: '.$count.'</span><br>';
echo'<input type="submit" id="fm-submit" value="Submit"/>';
echo "</form>";


				echo '<form action="" method="POST">';
					echo'<div id="pos-send">';
							echo'<span style="color:#5e5e5e; font-size:16px; font-weight:bold; margin-top:20px; font-family:Arial;">OR:</span>&nbsp;';
							echo'<label for="nm"><span style="color:#5e5e5e; font-size:12px; font-family:Arial;">Select the number of Farmers:</span>&nbsp;';
							$count;
							echo'<select name="nm" id="count">';
							for($count=2; $count<=10; $count++){
							echo'<option>';
							echo $count;
							echo'</option>';	
							}
							echo'</select>';
							echo'</label>';
							echo'<label ><span style="color:#5e5e5e; font-size:12px; font-family:Arial;">Submit the number:</span><Br>';
 
									echo'<input type="submit" name="submit" id="send" value="Send">';
									echo'</label>';
							echo '</form>';
					echo'</div>';

}
							
									echo'</div>';
    echo'</div>';
				
			?>
				
				
				
	</div>
</div>	
 						
		<!--</div>-->	
 
	<?php
					#End of code...of Add farmers-------------
						}#End.
#-----------------------------------------------------------------------------


public function viewfarmers(){
 
?>

<div id="middle">
	<div id="main" class="clearfix">		
								 
					<div id="pageHead">
									<h1 style="font-size:30px;">Select to send SMS</h1>
									<!--<div id="fm-border"></div>-->
					</div>
					<?php
					if(isset($_GET['msg'])){
							echo'<div id="message2">';
							echo '<span style="font-size:14px; margin-left:150px; font-family:calibri">'.$_GET['msg'].'!</span><br>';
							echo'</div>';
					
					}
 #pagination starts------------------
					$query_pag_num = "SELECT COUNT(*) AS count FROM farms_records WHERE cat_id="$_GET['cat_id'];
					$result_pag_num = mysql_query($query_pag_num);
					$rw = mysql_fetch_array($result_pag_num);
					$db_count = $rw['count'];
					$pages = new Paginator;
					$pages->limit=1;
					$pages->items_total = $db_count;
					$pages->mid_range = 7;
					$pages->paginate();
					
				#End of pagination----------
				
							$sql = "SELECT ar.*, usr.name " .
							"FROM farms_records ar " .
							"LEFT OUTER JOIN mk_users usr " .
							"ON ar.author_id = usr.user_id " .
							"WHEERE ar.cat_id=".$_GET['cat_id']."ORDER BY ar.farmers_id DESC $pages->limit";
							$result = mysql_query($sql)or die (mysql_error());
 
 		function nums(){
		
							$sql = "SELECT ar.*, usr.name " .
							"FROM farms_records ar " .
							"LEFT OUTER JOIN mk_users usr " .
							"ON ar.author_id = usr.user_id " .
							"WHEERE ar.cat_id=".$_GET['cat_id']."ORDER BY ar.farmers_id DESC $pages->limit";
							$result = mysql_query($sql)or die (mysql_error());
					
					
							while ($rw = mysql_fetch_assoc($result)) {
										$nums [] = array(
													'id'=>$rw['tel_no'],
		 
											
											);#End of Array album
												
											
							}#End of while Loop

					return $nums;
					}

if(isset($_POST['sms'])){
					/** 
		Construct a message like this
		$sms_object = new SendSMS($receiver_number, $sender_name, $message_to_be_sent)
	*/
	
	$message = $_POST['msg'];
	$sender = $_SESSION['cmsuser'];
	
	 

                             $sms = nums();					 
	
							 
								foreach($sms as $key=>$num)
							{
							
							 
							 	$numb='256'.$num['id'];
				 
								  $sms_object = new SendSMS($numb, $sender, $message);
								  $send_message = $sms_object->sendSMS();
					
					
					
					
					
					
					}
					 

	if($send_message === true){
		echo "Message sent";
	}
	else{
	
		echo"Message Not Sent";
	
	}
	

	
					
					}	

 if(isset($_POST['submit'])==0){
 
 	echo'<form action=""    method="POST" enctype="multipart/form-data">';
echo'<table class="view_table">';
echo'<tr>';
                    echo'<th scope="col">Select</th>';
                    echo'<th scope="col"><img src="img/edit.png"/></th>';
                    echo'<th scope="col">Telephone Number</th>';
                    echo'<th scope="col">Key Word</th>';
                    echo'<th scope="col">Names</th>';
                    echo'<th scope="col">Sub-County</th>';
                    echo'<th scope="col">District</th>';
                    echo'<th scope="col">Network</th>';
                    echo'</tr>';
echo'</table>';
while ($row = mysql_fetch_array($result)) {
extract($row);
 
echo '<table class="view_table">';
echo '<tr><td><input type="checkbox" name="nums[]" value="'.$row['tel_no'].'"></td>';
echo'<td><a class="fancybox fancybox.iframe" id="edit-fm" href="modify.php?edit='. $row['farmers_id'] . '">Edit</a></td>';
echo '<td>(+256)'.$row['tel_no']. '</td>';
echo'<td>'.$row['keyword']. '</td>';
echo '<td>'.$row['names']. '</td>';
echo '<td>'.$row['sub']. '</td>';
echo'<td>'.$row['district']. '</td>';
echo'<td>'.$row['network']. '</td>';
echo'</tr></table>';
 
 



}

 

							echo'<label ><span style="color:#5e5e5e; font-size:12px; font-family:Arial;">Add Numbers:</span><Br>';
 
									echo'<input type="submit"  name="submit" id="send" value="Add">';
									echo'</label>';
							echo '</form>';

 					echo'<div class="pagination clearfix">';
					echo'<div class="wp-pagenavi">';
					echo' '. $pages->display_pages().' ';
                    echo "<span class=\"paginate_count\"><span class=\"pages\">Page: $pages->current_page of $pages->num_pages\n</span></span>";
					echo'</div>';
					echo'</div>';
					
					}
					
				elseif(count(($_POST['nums']))>0){
				
				echo'<form action="" method="POST">';
				
				echo '<div class="numb">';
				echo '<label for name="name">Telphone Numbers:<br><br>';
				echo '<textarea id="num" name="nu[]">';
					
					
						 if(count(($_POST['nums']))>0)

							{
								 
								foreach($_POST['nums'] as $key=>$num)
							{
							
							echo $num.'&nbsp;';
							 
					
					
					
					}
					
					}
					echo '</textarea>';
					echo'</div>';
					
					
					echo '<div class="msg-body">';
					
					echo '<label for name="name">Message:<br><br>';
						echo '<textarea id="msg-body" name="msg">';
						
						echo '</textarea>';
						
					echo '</div>';
					
					
					echo'<label ><span style="color:#5e5e5e; font-size:12px; font-family:Arial;"></span><Br>';
 
									echo'<input type="submit" name="sms" id="send" value="Submit"/>';
					echo'</label>';
					
										
					echo'</form>';
					
					


					

					}
					
					
					


					
					
					
					
					
					
					
				
					
									echo'</div>';
									
									
    echo'</div>';
	
	
 
}

public function search(){
?>
<div id="middle">
	<div id="main" class="clearfix">		
								 
					<div id="pageHead">
									<h1 style="font-size:30px;">Search Farmers</h1>
									<!--<div id="fm-border"></div>-->
					</div>
			<div id="container">
	<div style="margin:20px auto; text-align: center;">
	<form method="post" action="#" id="pos-form">
	<label>
	<input type="text" name="search" id="search_box"  class='search_box' placeholder="Enter a Search word"/>
 </label>
  Search by:
<select name="network" id="select_box">
<option>names</option>
<option>network</option>
<option>district</option>
</select>
 <label>
	<input type="submit" id="searchsubmit"  value="Search" class="search_button" /><br />
	</label>
    </form>
    </div>     
	<div>

  <div class="table" >
  <div id="searchresults">Search results for <span class="word"></span></div><br><?php
  
echo'<table class="view_table">';
echo'<tr>';
                    echo'<th scope="col">Select</th>';
                    echo'<th scope="col"><img src="img/edit.png"/></th>';
                    echo'<th scope="col">Telephone Number</th>';
                    echo'<th scope="col">Key Word</th>';
                    echo'<th scope="col">Names</th>';
                    echo'<th scope="col">Sub-County</th>';
                    echo'<th scope="col">District</th>';
                    echo'<th scope="col">Network</th>';
                    echo'</tr>';

 

echo'</table>';

   ?></div>
	<div id="load"></div>
 	<ul id="results" class="update"> 
 	</ul>
 	</div>
	<div class="space"></div>
 	</div>

</div>
</div>
<?php
}					
						
						
 
 #End of right contents

}
 class SendSMS{
        public function __construct($telephoneNumbers, $sender, $message){
            $this->messageToSend = $message;
            $this->phoneNumbers = $telephoneNumbers;
            $this->senderName = $sender;
//            $this->sendSMS($this->phoneNumbers, $this->senderName, $this->messageToSend);
        }

        /**
         * @param phoneNumbers
         * @param senderName
         * @param messageToSend
         */
        public function sendSMS(){
            $phoneNumbers = urlencode($this->phoneNumbers);
            $senderName = ucwords(urlencode($this->senderName));
            $messageToSend = urlencode($this->messageToSend);
            //Attempt to send Message
            try{
                $sendMessageUrl = "http://smsplus1.routesms.com:80/bulksms/bulksms?username=aisba&password=km7s1f&type=0&dlr=1&destination=".$phoneNumbers."&source=".$senderName."&message=".$messageToSend;
                $parse_url = file($sendMessageUrl);
                $sent = strpos($parse_url[0], "1701");
                if($sent !== false){
                    return true;
                }else{
                    return ($parse_url[0]);
                }
            }catch (Exception $e){
                echo 'Error encountered: ', $e->getMessage(), " at Line: ", $e->getLine();
            }
        }

        /**
         * @param phoneNumbers
         */
        public function addCountryCode($phoneNumbers){
            $numbers = "256".$phoneNumbers;
            return $numbers;
        }
     
    }
?>