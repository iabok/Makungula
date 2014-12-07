<?php

class naads{


#Begin of loging form.......

public function create_cat(){

?>
<div id="middle">
	<div id="main" class="clearfix">
		<div id="pageHead">
			<h1>Create Categories</h1>
		</div>

<?php

		function albs(){
				
				$count;
				
				if($count==0){
					
							echo '<form action="functions/trans-files.php" method="POST" enctype="multipart/form-data">';
							echo'<label><span style="color:#5e5e5e; font-size:14px; font-family:calibri;">Name:</span><Br><Br>';
								echo'<input type="text" class="title" name="cat_name" maxlength="55" value="'.$title.'"> ';
								echo'</label>';
 
								echo'<label><span style="color:#5e5e5e; font-size:14px; font-family:calibri;">Description:</span><Br><Br>';
									echo'<textarea type="text" id="body" class="descr" name="cat_description" rows="5" cols="25">';
								echo'</textarea>';
								 echo'</label><br>';
							echo'<label ><span style="color:#5e5e5e; font-size:14px; font-family:calibri;">Submit the Category:</span><br>';
									echo'<br><input type="submit" name="action" id="file-submit" value="Create">';
									echo'</label>';
							echo '</form>';
							 
						echo'</div>';
									
				
				
				}
			
 
	
}


														$query_pag_num = "SELECT COUNT(*) AS count FROM naads_category ";
														$result_pag_num = mysql_query($query_pag_num);
														$rw = mysql_fetch_array($result_pag_num);
														$db_count = $rw['count'];
														
										if($db_count == 10){

# End of the Trim Body funciton
		function get_cat(){
		
			 $sql = "SELECT alb.cat_id, alb.date_submitted, alb.name, LEFT( alb.description, 50 ) AS description, COUNT(frm.farmers_id) as farm_count
                    FROM naads_category alb LEFT OUTER JOIN naads_records frm ON alb.cat_id = frm.cat_id GROUP BY alb.cat_id ORDER BY alb.date_submitted DESC";
			        $result = mysql_query($sql) or die (mysql_error());
					$num = mysql_num_rows($result);
					
					
							while ($cat_row = mysql_fetch_assoc($result)) {
										$category [] = array(
													'id'=>$cat_row['cat_id'],
													'date'=>$cat_row['date_submitted'],
													'name'=>$cat_row['name'],
													'description'=>$cat_row['description'],
													'count'=>$cat_row['farm_count']
											
											);#End of Array album
												
											
							}#End of while Loop

					return $category;
					
	}#End of Get Albums---------------------------------------------------------------------
	
 


											echo'<p><span  style="color:#638ebc; position:relative;  top:-10px; left:20px;  font-size:30px; font-family:calibri;">Total No. of  categories&nbsp;('.$db_count.')</span></span>';
											echo'</div>';
											echo'<div id="albm-body">';
											
												if(isset($_GET['mesg'])){
														echo'<div id="success3">';
														echo $_GET['mesg'];
														echo'</div>';
														
														}
											 
										$category = get_cat();
										
										#Displaying the lists of albums--------------------------------------------

												if(empty($category)){
												
													echo'<p class="alb-num">You Don\'t have any Category </p><br><br>';

											}#End of if
												else{
												
													foreach($category as $cat){
													echo'<div id="album">';
													echo'<ul>';
													echo'<li>';
													echo '<p><h2><a id="alb-link" href="famers/?view&cat_id='. $cat['id'].'" title="'.$cat['name'].'">' .$cat['name'].'</a>&nbsp;('.$cat['count'].'&nbsp;Farmers)<br><br>
														</h2></p>';
													echo'</li>';
													echo'</ul>';
													echo'</div>';
													
													
												
												}#End of For
												
																			echo '<p><span  style="color:#7396FF; position:relative; text-decoration:underline;  top:-10px; left:20px;  font-size:20px; font-family:calibri;"><a id="alb-link" href="?cat_id='. $cat['id'].'" title="'.$cat['name'].'">You have Reached your maximum</a></span><br><br>
														</h2></p>';	
											}#End of else
					}else{
					
					if(isset($_GET['messages'])){
					echo'<div id="error3">';
					echo $_GET['messages'];
					echo'</div>';
					
					}
				
		           echo'<div class="create">';
			   		echo'<div class="file-bg-header">';
					echo'<h1 style="text-decoration:underline; position:relative; top:0px; left:0px; font-size:14px;">Create Category</h1>';
					echo'</div>';
					
						echo albs();
				
			
				 
					}
	echo'</div>';
					#Displays the form for adding Bible quotes.-----------------------------------------------
					

					
					
					
					#echo'<div class="audio-attach-bg">';
						#The following code displays the Attachement files

 
			
 ?>
 		</div>
</div>
<?php
 
	
					#End of code...
						}#End.

	
	
public function viewcat(){

function trimBody($theText, $lmt=450, $s_chr="\n", $s_cnt=1) {
$pos = 0;
$trimmed = FALSE;
for ($i = 1; $i <= $s_cnt; $i++) {
if ($tmp = strpos($theText, $s_chr, $pos+1)) {
$pos = $tmp;
$trimmed = TRUE;
} else {
$pos = strlen($theText) - 2;
$trimmed = FALSE;
break;
}
}
$theText = substr($theText, 0, $pos);
if (strlen($theText) > $lmt) {
$theText = substr($theText, 0, $lmt);
$theText = substr($theText, 0, strrpos($theText,' '));
$trimmed = TRUE;
}
if ($trimmed) $theText .= '...';
return $theText;
}

?>
<div id="middle">
	<div id="main" class="clearfix">
		<div id="pageHead">
			<h1>View Categories</h1>
		</div>

<?php
# End of the Trim Body funciton
		function get_cat(){
		
			 $sql = "SELECT alb.cat_id, alb.date_submitted, alb.name, LEFT( alb.description, 50 ) AS description, COUNT(frm.farmers_id) as farm_count
                    FROM mk_category alb LEFT OUTER JOIN farms_records frm ON alb.cat_id = frm.cat_id GROUP BY alb.cat_id ORDER BY alb.date_submitted DESC";
			        $result = mysql_query($sql) or die (mysql_error());
					$num = mysql_num_rows($result);
					
					
							while ($cat_row = mysql_fetch_assoc($result)) {
										$category [] = array(
													'id'=>$cat_row['cat_id'],
													'date'=>$cat_row['date_submitted'],
													'name'=>$cat_row['name'],
													'description'=>$cat_row['description'],
													'count'=>$cat_row['farm_count']
											
											);#End of Array album
												
											
							}#End of while Loop

					return $category;
					
	}#End of Get Albums---------------------------------------------------------------------




 

 
 

	echo'<div id="right-content">';

		echo'<div class="review-content">';
					echo'<div id="audio-bg">'; 
					
					
					if(isset($_GET['messages'])){
					echo'<div id="error3">';
					echo $_GET['messages'];
					echo'</div>';
					
					}
				
			#mysqlquery-----------------------------------------------begins
					echo'<br>';	
											echo'<div class="list-content">';
											echo'<div class="pos-note">';
														$query_pag_num = "SELECT COUNT(*) AS count FROM naads_category ";
														$result_pag_num = mysql_query($query_pag_num);
														$rw = mysql_fetch_array($result_pag_num);
														$db_count = $rw['count'];
											#echo'<p><span  style="color:#638ebc; position:relative;  top:-10px; left:20px;  font-size:30px; font-family:calibri;">Total No. of  categories&nbsp;('.$db_count.')</span></span>';
											echo'</div>';
											echo'<div id="albm-body">';
											
												if(isset($_GET['mesg'])){
														echo'<div id="success3">';
														echo $_GET['mesg'];
														echo'</div>';
														
														}
											 
										$category = get_cat();
										
										#Displaying the lists of albums--------------------------------------------

												if(empty($category)){
												
													echo'<p class="alb-num">You Don\'t have any Category </p><br><br>';

											}#End of if
												else{
												
													foreach($category as $cat){
													echo'<div id="album">';
													echo'<ul>';
													echo'<li>';
													echo '<p><h2><a id="alb-link" href="?view&cat_id='. $cat['id'].'" title="'.$cat['name'].'">' .$cat['name'].'</a>&nbsp;('.$cat['count'].'&nbsp;Members)<br><br>
														</h2></p>';
													echo'</li>';
													echo'</ul>';
													echo'</div>';
													
													
												
												}#End of For
												
												
									#echo '<p><span  style="color:#7396FF; position:relative; text-decoration:underline;  top:-10px; left:20px;  font-size:20px; font-family:calibri;"><a id="alb-link" href="?cat_id='. $cat['id'].'" title="'.$cat['name'].'">Create More Categories</a></span><br><br>
														#</h2></p>';
											}#End of else
											echo'</div>';
											
											echo'</div>';
									echo'</div>';
						echo'</div>';
				echo'</div>';
		echo'</div>';
	
	?>
	
	</div>
	</div>
	<?php
					#End of code...
						}#End.
	

	

#Begining of main Dashboard menus

		public function dashcontents(){
		 

?>
				 			
				

			
								    	
		</div>	
		<div id="sidebar">
    <div id="ttrust_mini_feature-10" class="miniFeature32 oneFourth oneFourth widget_ttrust_mini_feature sidebarBox widgetBox">				
		<img src="http://localhost/mk/naads/images/heart_32.png" class="icon" alt="Naads" height="32" width="32">
				
		<h3>Projects</h3>		<p>Comming Soon.!!!</p>
<p><a href="" target="_parent" class="button ">Read More</a></p>
		</div>	
		
					<div id="ttrust_recent_posts-5" class="oneFourth ttrust_recent_posts sidebarBox widgetBox">	<h3>Others Categories</h3>		
						
		
			<ul class="widgetList">
			<?php

				function get_cat(){
		
			 $sql = "SELECT alb.cat_id, alb.date_submitted, alb.name, LEFT( alb.description, 50 ) AS description, COUNT(frm.farmers_id) as farm_count
                    FROM naads_category alb LEFT OUTER JOIN naads_records frm ON alb.cat_id = frm.cat_id GROUP BY alb.cat_id ORDER BY alb.date_submitted DESC LIMIT 5";
			        $result = mysql_query($sql) or die (mysql_error());
					$num = mysql_num_rows($result);
					
					
							while ($cat_row = mysql_fetch_assoc($result)) {
										$category [] = array(
													'id'=>$cat_row['cat_id'],
													'date'=>$cat_row['date_submitted'],
													'name'=>$cat_row['name'],
													'description'=>$cat_row['description'],
													'count'=>$cat_row['farm_count']
											
											);#End of Array album
												
											
							}#End of while Loop

					return $category;
					
	}#End of Get categorries-------------------------------------------------------------------------------------------------------------


										$category = get_cat();
										
										#Displaying the lists of albums--------------------------------------------

												if(empty($category)){
												
													echo'<p class="alb-num">You Don\'t have any Category </p><br><br>';

											}#End of if
												else{
												
													foreach($category as $cat){
													 
 
													echo'<li>';
													echo '<h2><a id="alb-link" href="?cat_id='. $cat['id'].'" title="'.$cat['name'].'">' .$cat['name'].'</a>&nbsp;('.$cat['count'].'&nbsp;Farmers)<br><br>
														</h2>';
													echo'</li>';
													 
													
													
												
												}#End of For
												}
												
												
										
												?>
			</div>		
		</div><!-- end sidebar -->	
	</div>			
</div>
<?php

}#End of function dashcontents
 

}

?>