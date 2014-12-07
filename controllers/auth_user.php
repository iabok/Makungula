<?php 
require_once '../includes/conn.php';
require_once '../includes/http.php';
// Get the client ip address
				$ipaddress = $_SERVER['REMOTE_ADDR'];
			// Function to get the client ip address


 	function get_client_ip() {
				$ipaddress = '';
				if ($_SERVER['HTTP_CLIENT_IP'])
					$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
				else if($_SERVER['HTTP_X_FORWARDED_FOR'])
					$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
				else if($_SERVER['HTTP_X_FORWARDED'])
					$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
				else if($_SERVER['HTTP_FORWARDED_FOR'])
					$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
				else if($_SERVER['HTTP_FORWARDED'])
					$ipaddress = $_SERVER['HTTP_FORWARDED'];
				else if($_SERVER['REMOTE_ADDR'])
					$ipaddress = $_SERVER['REMOTE_ADDR'];
				else
					$ipaddress = 'UNKNOWN';
			 
				return $ipaddress;
		}
  if($_SERVER['REQUEST_METHOD'] == "POST") {
  
   
    $username1 = mysql_real_escape_string($_POST['uName']);
    $password1 = mysql_real_escape_string($_POST['uPassword']);
    $result1 = mysql_query("SELECT * FROM mk_users WHERE username='$username1' AND passwd='$password1'")or die(mysql_error());
	
  }
    if(mysql_num_rows($result1) > 0) {
	


	
					session_start();
					$_SESSION['is_logged_in'] = 1;
					$_SESSION['username'] =mysql_real_escape_string($_POST['uName']);
					$_SESSION['password'] = mysql_real_escape_string($_POST['uPassword']);
					$sql1="SELECT * FROM mk_users WHERE username='".$_POST['uName']."' AND passwd='".($_POST['uPassword'])."'";
					  $query=mysql_query($sql1);
					 // $x=pg_num_rows($query);
					  $data=mysql_fetch_array($query);
					  $_SESSION['cmsuser']=$data['name'];
					  $_SESSION['access_lvl']=$data['access_lvl'];
					  $_SESSION['depart_id']=$data['depart_id'];
					  $_SESSION['user_id']=$data['user_id'];
					  
					  
					  #admin logs------------
					  $time=date("Y-m-d H:i:s", time());
					  $userid = $data['user_id'];
					  $user = $data['name'];
					  $item_name= 'Site User:'.$data['name'];
					  $action = 'logged In';
					  $ip=get_client_ip();
					  
					  
					  
							$sql3 = "INSERT INTO adminlog (time_in, user_id, username, item_name, action,ip_addr) values('".$time."','".$userid."','".$user."','".$item_name."','".$action."','".$ip."' )";
							$query=mysql_query($sql3) or die(mysql_error());
							#$_SESSION['time_sesion'] = $time;
							
							
					
					$sq="SELECT * FROM accounts WHERE user_id=".$_SESSION['user_id'];
					  $qu=mysql_query($sq);
					  $dat=mysql_fetch_array($qu);
					  $_SESSION['account'] = $dat['account_id'];
					  
					  if($dat['account_id']==1){
					  
					  redirect('../');
					  
					  break;
					  }
		  	 
						
					  if($dat['account_id']==2){
					  
					  redirect('../naads');
					  
					  break;
					  }
	  
	  
	
	}

	else{

					$tim=date("Y-m-d H:i:s", time());
					$item= 'Site User: Unknown';
					$user='0';
					$action = 'loggin Failed.!';
					$ip=get_client_ip();
								$sql3 = "INSERT INTO adminlog (time_in, user_id, username, item_name, action,pass,ip_addr) values('".$tim."','".$user."','".mysql_real_escape_string($_POST['uName'])."','".$item."','".$action."','".mysql_real_escape_string($_POST['uPassword'])."','".$ip."' )";
							    $query=mysql_query($sql3) or die(mysql_error());
							 
	
			
	
	redirect('../?failed');
	
}

	?>