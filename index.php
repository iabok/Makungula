<?php
ini_set('display_errors','0');
####################################################
############This code was written by Abok Isaac#####
####################################################
#@All Rights Reserved.

#Start of session
session_start(); 
####################################
#session_unset();
#session_destroy();

#connectin to the database;
require_once 'includes/conn.php';

#contains the function that handles url redirects.
require_once 'includes/http.php';

#import of neccessary funtions and librarys
include('classes/cms-header.php');
include('classes/header-log.php');
include('classes/contents.php');

#Creation of objects
$page = new header();
$log= new login();
$pages = new pagecontents();

			#Handling of redirects-----------
		
			if(isset($_GET['add'])){
			redirect('farmers/?add');
			}
			
			if(isset($_GET['view'])){
			redirect('farmers/?view');
			}
			
			if(isset($_GET['sms'])){
			redirect('sms?view');
			}

			if(isset($_GET['search'])){
			redirect('farmers/?search');
			}				
 
#checking weather a session is available---------------------------------

	if(!($_SESSION['cmsuser'])){
			#header section-----
				echo $log->log();
				
					#Loads the login form when there is no user session available.
			      echo $pages->logform();

			echo $log->pagefooter();
			}
			
			
		else{
			#header section-----	
				echo $page->pageheader();

				  #Loads main cotents of the page-----------------------------------
				  
				   #echo $pages->dashmenus();
			       echo $pages->content();
				   echo $pages->siderbar();
				   
				   #footer Section------
                   echo $page->pagefooter();


			
			}
			
			
			
			




#@All Rights Reserved.
####################################################
############This code was written by Abok Isaac#####
####################################################
?>