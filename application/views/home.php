<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#infosearch').on('submit', function(){
				$.post(
					$('#infosearch').attr('action'),
					$('#infosearch').serialize(),
					function(output){
						//alert("works")
						//console.log(output);
						for (var i=0; i < output.length; i++){
						$('.table').append('<tr><td>'+output[i]['first_name']+'</td><td>'+output[i]['last_name']+'</td><td>'+output[i]['email']+'</td></tr>');
						}
					}, "json"
				);
				return false;
			});
		});
	</script>
</head>
<body>
	<div id="container">
		<form id= "infosearch" action="/search/search_info" method="post">
			<label>E-mail</label><input type="text" name="search" placeholder="Search">
			<input type="submit" name="submit" value="submit">
		</form>
		<div id="body">
		<table class ="table">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>E-mail</th>
			</tr>
		</table>
		</div>
		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	</div>
</body>
</html>