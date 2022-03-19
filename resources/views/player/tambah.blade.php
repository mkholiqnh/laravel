<!DOCTYPE html>
<html>
<head>
	<title>Tambah Player</title>
</head>
<body>

	<h3>Data Player</h3>
	<a href="/"> Home</a> | 
	<a href="/player"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/player/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>