<?php
require_once 'includes/conn.php';
require_once 'includes/http.php';
session_start();
$id = $_SESSION['account'];
				$action="Logged Out";
				$sql = "UPDATE adminlog " .
						"SET action='".mysql_real_escape_string($action)."', time_out='" .
						date("Y-m-d H:i:s", time()) . "' " ."WHERE user_id=" . $_SESSION['user_id'];
						     mysql_query($sql) or die(mysql_error());
						
						session_unset();
						session_destroy();
						
							if(($id == 1)){
								redirect('');
                                  } 	
							if(($id == 2)){
								  redirect('naads');
                              }
								  
                   
										
						

?>