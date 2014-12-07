<?php 
class header{


#Beginin of the header section	
	public function pageheader(){
	
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"><head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php

	if(isset($_GET['add'])){
	echo 'Add Farmers';
	}
	elseif(isset($_GET['viewcat'])){
	
	echo 'View Farmers';
	
	}elseif(isset($_GET['search'])){
	
	
	echo 'Search for Farmers';
	
	}elseif(isset($_GET['idd'])){
	
	echo 'Farmers';
	
	}
	else{
	$title = 'home';
	echo $title;
	}
	
	?>
	</title>

	<link rel="stylesheet" href="http://localhost/mk/modules/css/style.css" type="text/css" media="screen">	
	<link rel="stylesheet" id="superfish-css" href="http://localhost/mk/modules/css/superfish.css" type="text/css" media="all">
	<link rel="stylesheet" id="fancybox-css" href="http://localhost/mk/modules/css/jquery.css" type="text/css" media="all">
	<link rel="stylesheet" id="fancybox-css" href="http://localhost/mk/modules/css/farm.css" type="text/css" media="all">
	<script type="text/javascript" src="http://localhost/mk/modules/js/jquery.js"></script>

</head>

<body>
<div id="header">
	<div class="top">
		<div class="inside clearfix">	
			<div id="topNav">
			<div class="menu-top-container">
			 <ul id="menu-top" class="sf-menu sf-js-enabled sf-shadow"><li class="menu-item"><a href="#">About</a></li>
<li class="menu-item"><a href="#">Archives</a></li>
<li class="menu-item"><a href="#">Advanced Search</a></li>
</ul>
</div>
</div>	
			 
		</div>
	</div>
	<div class="bottom clearfix">			
				<div id="logo" style="margin-left:-50px;">
			<div id="wrapper">

			<h1 class="logo"><a href="#"><img src="http://localhost/mk/modules/images/logo.png" alt="mk-logo"></a></h1>
 
  
	 
			 
			</div>
			
		</div>
		<div id="headerBannerAd"></div>	
	
	</div>
	<div id="mainNav" class="clearfix">							
		<div class="menu-main-nav-container"><ul id="menu-main-nav" class="sf-menu sf-js-enabled sf-shadow">
<li class="menu-item <?php if(isset($title)){echo 'current-menu-item'; }?>"><a href="http://localhost/mk/">Home</a></li>
<li class="menu-item <?php if(isset($_GET['add'])){echo 'current-menu-item'; }?>" ><a href="?add">Add Farmers</a></li>
<li class="menu-item <?php if(isset($_GET['viewcat'])|| $_GET['msg']){echo 'current-menu-item'; }?>" > <a href="?viewcat">View Farmers</a></li>
<li class="menu-item <?php if(isset($_GET['send'])|| $_GET['msg']){echo 'current-menu-item'; }?>" > <a href="?sms">Send SMS</a></li>
<li class="menu-item"><a href="#">About Us</a></li>
<li class="menu-item <?php if(isset($_GET['search'])){echo 'current-menu-item'; }?> "><a href="?search">Advanced Search</a></li>
<li class="menu-item"><a href="http://localhost/mk/logout.php" class="sign-link">Sign Out</a></li>
</ul>
			 </div>			
		  </div>		
	  </div>

 	
	
<?php
	}
	


#footer Section Begins

	public function pagefooter(){
?>
 

</div>
</div>
	<div id="footer">
		<div class="inside">			
		<div class="main clearfix">
				
		<div class="secondary clearfix">
									<div class="left">&copy <?php echo date('Y'); ?> <a href="#"><strong>&nbsp;Makungula&nbsp;</strong></a> All Rights Reserved.</div>
			<div class="right"><a href="#" title="title"><strong>AGINSBA</strong></a></div>
		</div><!-- end footer secondary-->
</div>
		</div>	
							
				
	</div><!-- end footer -->	

 
		<!--jQuery library -->
	<script type="text/javascript" src="http://localhost/mk/js/js/jquery.min.js"></script>
		<script type="text/javascript" src="http://localhost/mk/js/jquery.js"></script>
	<script type="text/javascript" src="http://localhost/mk/js/lib/jquery-1.9.0.min.js"></script>
	 
	    <!-- FancyBox main JS and CSS files -->
	<script type="text/javascript" src="http://localhost/mk/js/source/jquery.fancybox.js?v=2.1.4"></script>
	<link rel="stylesheet" type="text/css" href="http://localhost/mk/js/source/jquery.fancybox.css?v=2.1.4" media="screen" />
	
		<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="http://localhost/mk/js/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="http://localhost/mk/js/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>


	<!-- JavaScript -->
	<script type="text/javascript">	
	  jQuery.noConflict()(function(){
		jQuery('.fancybox').fancybox();   
	
			jQuery('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});
			
			 
    jQuery(".table").hide();
	 
	    jQuery(".search_button").click(function() {
	        // getting the value that user typed
	        var searchString    = $("#search_box").val();
          var searchString1    = $("#select_box").val();
          var data            = 'search='+ searchString + '&&' + 'network='+ searchString1 ;
      
	        // forming the queryString
	        
	         
	        // if searchString is not empty
	        if(searchString) {
         
	            // ajax call
	            jQuery.ajax({
	                type: "POST",
                    url: "do_search.php",
	                data: data,
	                beforeSend: function(html) { // this happens before actual call
	                 jQuery("#results").html('');
                     jQuery(".table").hide();
	                 jQuery("#searchresults").show();
	                 jQuery(".word").html(searchString);
	                 jQuery("#load").html('<img src="loading.gif" align="absmiddle">&nbsp;Loading Results...');
               },
               success: function(html){ // this happens after we get results
                    jQuery("#results").show();
                   jQuery("#results").append(html);
                   jQuery(".table").show();
                   jQuery("#load").hide();

	              }
	            });   
	        }
	        return false;
	    });


	});
		 
		</script>					
	<!--- End JavaScript-->
	</body>
</html>
<?php

}

}
?>