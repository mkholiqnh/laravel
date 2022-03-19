<!DOCTYPE html>
<html>
<head>
	<title>Tambah Playing</title>
</head>
<body>

	<h3>Data Playing</h3>
	<a href="/"> Home</a> | 
	<a href="/playing"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/playing/store" method="post">
		{{ csrf_field() }}
		ID Player <input type="text" name="player_id" required="required"> <br/>
		Start Time <input type="date" name="start_time" required="required"> <br/>	
		Score <input type="text" name="score" required="required"> <br/>		
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>