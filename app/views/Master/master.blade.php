<html>
	<head>
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	</head>
    <body>
    	<nav class="navbar navbar-default">
        @section('navbar')
            
        @show
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>