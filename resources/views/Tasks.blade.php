<!DOCTYPE html>
<html>
<head>
	<title>
		Tasklist Foreach ile 
	</title>
</head>
<body>

<?php foreach ($tasks as $task): ?>
 
<h1><li> <?= $task; ?> </li></h1>

 
	<?php  endforeach; ?>


<br>
		@foreach ($tasks as $task)
	<h2>	
			<li>
				{{$task}}
			</li>
	</h2>	
		@endforeach

<br>
<br>



</body>
</html>