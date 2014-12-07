/* 
 * javascript Code
 *  
 */


/* ---------------------------- */
/* XMLHTTPRequest Enable */
/* ---------------------------- */
function createObject() {
var request_type;
var browser = navigator.appName;
if(browser == "Microsoft Internet Explorer"){
request_type = new ActiveXObject("Microsoft.XMLHTTP");
}else{
request_type = new XMLHttpRequest();
}
return request_type;
}

var http = createObject();


 
/* -------------------------- */
/* INSERT */
/* -------------------------- */
/* Required: var nocache is a random number to add to request. This value solve an Internet Explorer cache issue */
var nocache = 0;
function album_insert() {
// Optional: Show a waiting message in the layer with ID login_response
document.getElementById('insert_response').innerHTML = "Just a second..."
// Required: verify that all fileds is not empty. Use encodeURI() to solve some issues about character encoding.
var name= encodeURI(document.getElementById('name').value);
// Set te random number to add to URL request
nocache = Math.random();
// Pass the login variables like URL variable
http.open('get', 'http://localhost/cms2/downloads/includes/album_insert.php?name='+name+'&nocache = '+nocache);
http.onreadystatechange = insertReply;
http.send(null);
}
function insertReply() {
$('#name').hide();
if(http.readyState == 4){ 
var response = http.responseText;
// else if login is ok show a message: "Site added+ site URL".
document.getElementById('insert_response').innerHTML = '<span style="position:relative; top:2px;"><img src="http://localhost/cms2/downloads/images/check.png" width="15" height="15"/></span> Added successfully'+response;
}

}

        
			 
             
			 
			
			 

 
			 
			 
