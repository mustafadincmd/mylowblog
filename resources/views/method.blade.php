<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="verify" method="POST">
		{{ csrf_field() }}
		<input type="text" name="dsa">
		<input type="text" name="asd">	
		<input type="submit" name="send">
	</form>

</body>
</html>