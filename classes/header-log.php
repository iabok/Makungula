<?php 
class login{


#Beginin of the header section	
	public function log(){
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
    <title>Home</title>

<!-- insert CSS -->
<style type="text/css">@import "http://localhost/mk/modules/css/style.css";</style>
<style type="text/css">@import "http://localhost/mk/modules/css/superfish.css";</style>
<style type="text/css">@import "http://localhost/mk/modules/css/jquery.css";</style>
<style type="text/css">@import "http://localhost/mk/modules/css/content.css";</style>
<style>
#logform-container{
width:350px;
background:#f0f0f0;
border:1px solid #d8d8d8;
padding:40px;
position:relative;
left:250px;
 
}
#wrapper{

width:950px;
margin:0 auto 0 auto; 
overflow:hidden;
 
}

label {
  display: block;
  margin-bottom: 5px;
}
input[type="text"],
input[type="password"]
 {
  display: inline-block;
  height: 20px;
  padding: 4px 6px;
  margin-bottom: 9px;
  font-size: 12px;
  line-height: 20px;
  color: #555555;
  -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
          border-radius: 3px;
}
input{
  width: 206px;
}


input[type="text"],
input[type="password"]  {
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

input[type="text"]:focus,
input[type="password"]:focus{
  border-color: rgba(82, 168, 236, 0.8);
  outline: 0;
  outline: thin dotted \9;
  /* IE6-9 */
}

.sign-btn{
  width:120px;
 padding:5px 5px 5px 5px;
  margin-left:10px;
  color: #ffffff;
  position: relative;
  top:0px;
  text-indent:0px;
  font-size:14px;
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color:#49afcd; border:1px solid #fff; color:#FFFFFF;cursor:pointer;margin:10px 8px 0 0;
  font-family: 'Arial';font-weight:normal;line-height:25px;text-align:center; border-style:double; *border-width:3px ;
  *background-color: #2f96b4;
  cursor:pointer;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
  background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: linear-gradient(to bottom, #5bc0de, #2f96b4);
  background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
  background-repeat: repeat-x;
  border-color: #2f96b4 #2f96b4 #1f6377;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  *border: 0;
 
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
      -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

#fm-submit {

	font-size: 12px;
	font-family:Arial;
	background: #4a85a1;	
	*display: inline-block;	
	color: #fff!important;
	text-decoration: none;
	position: relative;
	cursor: pointer;
	width:80px;
	font-weight: bold;	
	padding: 5px 15px 5px;	
	margin: 5px 5px 5px 0px;
	border: none;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;	
}
#fm-submit:hover {
background-color: #363636!important;
}

</style>
</head>
 <body style="background:#fff; overflow:hidden;">

<div id="header">

	<div class="top">
		<div class="inside clearfix">	
		<div id="wrapper">
			<div id="topNav">
			<div class="menu-top-container">
</div>	
</div>
</div>	
			 
		</div>
	</div>
	<div class="bottom clearfix">			
				<div id="logo" style="margin-left:150px;">
			<div id="wrapper">			
			<h1 class="logo"><a href="#"><img src="http://localhost/mk/modules/images/logo.png" alt="mk-logo"></a></h1>
			</div>
			
		</div>
		<div id="headerBannerAd"></div>	
	
	</div>
 
	
<?php
	}
	


#footer Section Begins

	public function pagefooter(){
?>
 
 
 

</body>
</html>
<?php

}

}
?>