$(document).ready( function() {
 done();
});
 
function done() {
	  setTimeout( function() { 
	  updates(); 
	  done();
	  }, 200);
}
 
function updates() {
	 $.getJSON("fetch.php", function(data) {
       $("ul").empty();
	   $.each(data.result, function(){
	    $("ul").append("<li>Name: "+this['id_user']+"</li>
                            <li>Age: "+this['username']+"</li>
                            <li>Company: "+this['lain']+"</li>
                            <br />");
	   });
 });
}