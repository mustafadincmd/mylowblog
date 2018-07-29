

	<title>Create Post</title>


<form action='/insert' method='post'>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<input type="text" name="isim">

	<input type="text" name="soyisim">

	<input type="submit" name="gonder">
	
</form>