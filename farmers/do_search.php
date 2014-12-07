<?php
 
	include('db.php');
	 
	
 
       
		$network_id = $_POST['network'];

		 
	    // here you would normally include some database connection
	    $db = new db();
	    // never trust what user wrote! We must ALWAYS sanitize user input
	    $word = mysql_real_escape_string($_POST['search']);

	    
	    // build your search query to the database
	    $sql = "SELECT * FROM farms_records WHERE ". $network_id ." LIKE '%" . $word . "%' ORDER BY farmers_id LIMIT 10";
	    // get results
	    $row = $db->select_list($sql);

	    if(count($row)) {
	        $end_result = '';
	        foreach($row as $r) {

	            $result         = 	 '<table class="view_table"><tr><td><input type="checkbox"/></td><td><a class="fancybox fancybox.iframe" id="edit-fm" href="modify.php?edit='. $r['farmers_id'] . '">Edit</a></td><td>(+256)'.$r[tel_no]. '</td> <td >'.$r[keyword]. '</td> <td >'.$r[names]. '</td><td >'.$r[sub]. '</td><td >'.$r[district]. '</td><td >'.$r[network]. '</td></tr></table>';  
					  
					 
					 
                     
	            

	            // we will use this to bold the search word in result
	            $bold           = '<span class="found">' . $word . '</span>';   

	            $end_result     .= '<li>' . str_ireplace($word, $bold, $result) . '</li><br>';   

	        }
	        echo $end_result;
	    } 
		else {
	        echo '<li class="nofound">No results found</li>';
	    }
	 
	 
	
 
	?>
	<style type="text/css">



.highlight{
background-color: #fff;
 
color: #fff;

}
	</style>
 