<!DOCTYPE html>
<html>
<head>
	<title>Edit Playing</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

 
    <h3>Edit Playing</h3>
	<a href="/"> Home</a> | 
	<a href="/playing"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($playing as $p)
	<form action="/playing/update" method="post">
		{{ csrf_field() }}
		<input type="input" name="id" value="{{ $p->id }}" readonly="readonly"> <br/>
		ID Player <input type="text" required="required" name="player_id" value="{{ $p->player_id }}"> <br/>
		Start Time <input type="date" required="required" name="start_time" value="{{ $p->start_time }}"> <br/>
		Score <input type="text" required="required" name="score" value="{{ $p->score }}"> <br/>	
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
	
 
</body>
</html>