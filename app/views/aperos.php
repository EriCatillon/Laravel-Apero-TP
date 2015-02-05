<!doctype html>
<html lang="en">

<body>
	
	@foreach ($aperos as $apero)
	<h1>{{ $apero->title }}</h1>
    <p>{{ $apero->content }}</p>
	@endforeach
</body>
</html>
