<!DOCTYPE html>
<html>
<head>
	<title>Playing</title>
</head>
<body>
 
	<h3>Data Playing</h3>
	<a href="/"> Home</a> | 
	<a href="/playing/tambah"> + Tambah Playing Baru</a>
	
	<br/>
	<br/>
 
	<table border=1>
		<tr>
			<th>ID</th>
			<th>ID Player</th>
			<th>Start Time</th>
			<th>Score</th>
		</tr>
		@foreach($playing as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->player_id }}</td>
			<td>{{ $p->start_time }}</td>
			<td>{{ $p->score }}</td>
			<td>
				<a href="/playing/edit/{{ $p->id }}" class="btn btn-warning btn-sm">Edit</a>
				|
				<a href="/playing/hapus/{{ $p->id }}" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	
 
</body>
</html>