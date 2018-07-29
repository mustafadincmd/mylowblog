

	<title>Create Post</title>


<form action='/insert' method='post'>
	{{crsf_field()}}
	<input type="text" name="isim">
	<input type="text" name="soyisim">

	<input type="submit" name="gonder">
	
</form>