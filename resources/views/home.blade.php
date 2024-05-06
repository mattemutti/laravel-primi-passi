<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ILLaravel</title>
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="antialiased">

<h1 class="text-center p-4 text-danger" >Ciao Laravel</h1>
	
<div class="container">
	<div class="row justify-content-center">
		<div class="col-2 text-center">
			<div class="p-5" >{{$name}}</div>
			@foreach ($colors as $color)
			<div class="card text-center p-4 m-2">
				{{ $color}}
			</div>
			@endforeach
		</div>
	</div>
</div>
</div>
</body>
</html>