<?php
class pagecontents{

#Begin of loging form.......

		public function logform(){

?><div id="wrapper">
	<div id="logform-container">
		
		<div class="page-header">
		<?php 
		
	if(isset($_GET['failed'])){
		echo'<div id="themessage">';
		echo "<span style='position:relative; top:0px; color:#ff0505;'>You username or password is incorrect.!</span><br>";
		echo'</div><br>';
		
		}
		?>
				<h2>Sign in</h2>
		<div id="border-bottom"></div>
			</div>

	<form method="post" action="http://localhost/mk/controllers/auth_user.php">
      <div class="user-pos">
			  <!--<span class="span-1"></span>-->
				<div class="clearfix">
				<label for="uName"><span style="font-size:12px;">Username:</span>
					<input type="text" name="uName" id="uName"  class="ccm-input-text">
				</label>
				</div>
				 
				<div class="clearfix">
				<label for="uPassword"><span style="font-size:12px;">Password:</span>
					<input type="password" name="uPassword" id="uPassword" class="ccm-input-text" />
				</label>
				</div>
			<div class="span-1">
				<div class="actions">
				<input type="submit" id="fm-submit"   name="submit" value="Sign In" /></div>
			</div>
		</div>
			</form>
		<br><br>
		<div class="page-header2">
				<h2>Forgot your Password</h2>
		<div id="border-bottom"></div>
			</div>

		<p style="font-size:12px;">
		Click here to reset
 
</p>
	</div>
	<div id="space"></div>
</div><br><br>

</div>	 


<?php	
	}#End of function logform.
	

#Begining of main Dashboard menus

		public function content(){
		
		?>
<div id="middle">
	<div id="main" class="clearfix">		
								 
		<div id="content" class="twoThird clearfix">
			
			<div id="pageHead">
									<h1>Home</h1>
					
							</div>
			
					<div class="post clearfix withThumb featured">										
																		
					    		<img src="modules/images/gm-275x275.jpg" class="postThumb wp-post-image" alt="General Motors Flint Plant" title="General Motors Flint Plant" height="275" width="275">			    	
												<div class="inside">
							<div class="metaCat"><a href="#" title="business" rel="category">About the system</a></div>
							<h1><a href="#" rel="bookmark">SMS platform/Mobile Learning</a></h1>										
							<p>This system is all about messaging farmers both audio and text messages via their mobile phones in different agricultural aspects and community banking. This is expected to engage farmers in mobile learning through the messages sent via their mobile phones overcoming the barriers of face to face communication.</p>
							</div>																				
			    </div>	
		
					<div class="post clearfix withThumb ">										
  
					<div id="pageHead">
									<h1>Add Farmers</h1>
									<!--<div id="fm-border"></div>-->
					
							</div>	
							<div class="bg-farmers">
							
				<?php
				
				echo'<form action="farmers/func.php" id="form-bg-farmer"  method="POST" enctype="multipart/form-data">';
echo "<div class='farmer-position'> ";

		echo'<div>';
			echo'<label for="tel_num"><span style="color:#60696d; font-size:12px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">TelePhone Number(+256):</span>';
			echo'<input name="tel_num" id="user_location" type="text" required="required" /></label>';
		echo'</div>';
        
		echo'<div>';
			echo'<label for="keyword"><span style="color:#60696d; font-size:12px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">Keyword</span>';
			echo'<select name="keyword" id="position">';
				echo'<option>Muhima</option>';
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
				 
			echo'</select></label>';
		echo'</div>';

		echo'<div>';
    echo'<input type="hidden" name="qnu_id" id="qnu" class="email1" value="'. $id .  '">';
      echo'<input type="hidden" name="qnu" id="qnu" class="email1" value="'. $qns .  '">';
			echo'<input name="place_request_button" id="fm-submit" type="submit" value="Submit" />';
   	echo'</form>';   


	
				echo '<form action="farmers/?add" method="POST">';
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
									echo'<input type="hidden" name="count" id="qnu" class="email1" value="'. $count .  '">';
									echo'<input type="submit" name="submit" id="send" value="Send">';
									echo'</label>';
							echo '</form>';
							
									echo'</div>';
    echo'</div>';
				
				?>
				
				
				
				
				</div>
				
				
									<div class="post clearfix withThumb ">										
  
					<div id="pageHead">
									<h1>About AGNISBA</h1><br><br>
									<!--<div id="fm-border"></div>-->
									<p>The AGNISBA ICT department since 2007 has been in charge of developing innovative software and technologies for information dissemination and communication for integration in the agriculture sector in a number of projects aimed at improving farmers’ livelihoods in Uganda.  The development of the technologies has been under a number of projects that have been supported by Commonwealth of Learning (COL) and Innovations at Makerere Committee (I@Mak.com).</p>
					
							</div>	
						</div>
</div>							
		</div>	
 
 
 
 
 		
 
	
<?php
}	
		public function siderbar(){
		
		?>
 
<div id="sidebar">
	
<div id="archives-3" class="oneThird widget_archive sidebarBox widgetBox"><h3>Archives</h3><ul>
			<li><a href="#" title="November 2010">November 2013</a></li>
	<li><a href="#" title="October 2010">October 2013</a></li>
	<li><a href="#" title="September 2010">September 2013</a></li>
		</ul>
</div><div id="text-3" class="oneThird widget_text sidebarBox widgetBox"><h3>About Makungula</h3>
<div class="textwidget"><p>This system is all about messaging farmers both audio and text messages via their mobile phones in different agricultural aspects and community banking. This is expected to engage farmers in mobile learning through the messages sent via their mobile phones overcoming the barriers of face to face communication.</p>
<p><a href="#" target="_parent" class="button ">Read More</a></p>
               </div>
		</div>	
 
</div>        			 
	         
	 	
	
 
<?php
}#End of right contents

}
?>