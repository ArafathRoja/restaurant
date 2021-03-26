<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sample Website</title>
	<style>
		.sidenav {
		  width: 180px;
		  position: fixed;
		  z-index: 1;
		  top: 55px;
		  background: #bbeabf;
		  overflow-x: hidden;
		  padding: 8px 0;
		  height: 100%;
		}

		.sidenav a {
		  padding: 6px 8px 6px 16px;
		  text-decoration: none;
		  font-size: 25px;
		  color: #2196F3;
		  display: block;
		  margin-top: 20px;
		}

		.sidenav a:hover {
		  color: #064579;
	}
	.header {
		position: fixed;
		height: auto;
		width: 100%;
		top: 0;
		z-index: 100
	}

	.navbar a {
	  float: left;
	  display: block;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	  font-size: 17px;
	}

	.navbar a:hover {
	  background: #ddd;
	  color: black;
	}
	.main {
	  margin-top: 25%;
	  padding: 20px;
	  margin-left: 10%;
	  height: 1500px; /* Used in this example to enable scrolling */
	}
	body {margin:0;}

	/*.header {
		position: fixed;
		margin-bottom: 25px;
	}*/
	// .main {
		
		// margin-top: 10%;
		// margin-left: 10%;
		// margin-bottom: 25px;
	// }
	</style>

   <script type="text/javascript" charset="utf8" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">
   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>
</head>
<body>
	<div class="header">
		<header >
			<nav class="navbar navbar-expand-lg navbar-light" style="background:#1c1c1d;">
				<a class="navbar-brand text-white" href="/">Restaurant</a>
				<span class="navbar-toggler-icon"></span>
				</button>
				<!--<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ml-auto">
						<a class="nav-item nav-link btn-info text-white" href="/">Add New</a>
						<a class="nav-item nav-link btn-info ml-3 text-white" href="/record">View Records</a>
					</div>
				</div>-->
			</nav>

		</header>
	</div>
	<div class="sidenav">
	  <a href="{{ url('/') }}">Home</a>
	  
	</div>
	<div class="mt-5 mb-3 main">
		@yield('content')
	</div>
	<footer class="container"></footer>
</body>
</html>