<!DOCTYPE html>
<html>
<head>
	<title>Player</title>
</head>
<body>
 
	<h3>Data Player</h3>
	<a href="/"> Home</a> | 
	<a href="/player/tambah"> + Tambah Player Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama</th>			
		</tr>
		@foreach($player as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->nama }}</td>
			<td>
				<a href="/player/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/player/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table> 
</body>
</html>