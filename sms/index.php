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
require_once '../includes/conn.php';

#contains the function that handles url redirects.
require_once '../includes/http.php';

#import of neccessary funtions and librarys
include('../classes/cms-header.php');
include('../classes/header-log.php');
include('../classes/contents.php');
include('classes/paginator.class.php');
include('classes/farm-contents.php');

#Creation of objects
$page = new header();
$log= new login();
$pages = new pagecontents();
$farm = new farmcontents();

 

	if(!($_SESSION['cmsuser'])){
			#header section-----
				echo $log->log();
				
					#Loads the login form when there is no user session available.
			      echo $pages->logform();

			echo $log->pagefooter();
			
			break;
			}
			
	
		else{
			#header section-----	
					$_GET['idd']='Farmers';
				
				echo $page->pageheader();

				  #Loads main cotents of the page-----------------------------------
				  
				   #echo $pages->dashmenus();
				   if(isset($_GET['add']) || ($_GET['mesg'])){
			            echo $farm->addfarmers();
				   }
				   
				   elseif(isset($_GET['view']) ||($_GET['msg'])){
				   
						echo $farm->viewfarmers();
				   }
				   
				   elseif(isset($_GET['search'])){
						echo $farm->search();
				   }
				   else{
				       
						echo $farm->viewfarmers();
				   }
				   
				   
				   #footer Section------
                   echo $page->pagefooter();


			
			}
			

#@All Rights Reserved.
####################################################
############This code was written by Abok Isaac#####
####################################################
?>