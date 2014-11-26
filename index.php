<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Buku Tamu</title>

  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/foundation.css" />
    <script src="'$base_url()'/jquery-latest.js"></script>
    
	

<script type="text/javascript" >
$(function() {
$(".submit_button").click(function() {

var boxval = $("#content").val();
var dataString = 'content='+ boxval;

if(boxval=='')
{
alert("Please Enter Some Text");
}
else
{
$("#flash").show();
$("#flash").fadeIn(400).html('<img src="ajax-loader.gif" align="absmiddle"> <span class="loading">Loading Comment...</span>');

$.ajax({
type: "POST",
url: "load.php",
data: dataString,
cache: false,
success: function(html){
$("ol#update").prepend(html);
$("ol#update li:first").slideDown("slow");
document.getElementById('content').value='';
document.getElementById('content').focus();
$("#flash").hide();
}
});
} return false;
});
});
</script>


</head>
<body>

	<div class="row">
		<div class="large-12 columns">
			<h2>Buku Tamu</h2>
			<p>This is version 4.1.2.</p>
			<hr />
		</div>
	</div>

	<div class="row">
		

		<div class="large-4 columns">
			<h4>Isi Data Anda</h4>
			<div class="input">	
			<table>
				<form  method="post" name="form" action="">
				<textarea style="width:280px; font-size:14px; height:60px; font-weight:bold; resize:none;" name="content" id="content" ></textarea><br />
				<input type="submit" value="Post" name="submit" class="submit_button"/>
				</form>
			</table>
			</div>
		</div>

		<div class="large-8 columns">
			<h4>List Tamu</h4>
		<hr />

		<div id="flash"></div>
		<ol id="update" class="timeline">
		</ol>
		

		</div>
	</div>

 
</body>
</html>