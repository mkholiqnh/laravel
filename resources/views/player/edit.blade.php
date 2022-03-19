<!DOCTYPE html>
<html>
<head>
	<title>Edit Player</title>
</head>
<body>
 
    <h3>Edit Player</h3>
	<a href="/"> Home</a> | 
	<a href="/player"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($player as $p)
	<form action="/player/update" method="post">
		{{ csrf_field() }}
		<input type="input" name="id" value="{{ $p->id }}" readonly="readonly"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>		
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>