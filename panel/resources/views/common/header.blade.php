
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Overwatch - {{ $pageName }}</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

	<!-- CSS -->
	<link href="./css/app.css" rel="stylesheet">
	<link href="./fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
	@include('common.nav')
	<section id="banner" class="banner col-sm-12">
		<div class="ana">
			<div class="container">
				<div class="row">
					<div class="logo-section">
						<img src="./images/logo.png" alt="" class="img-responsive" />
						<h2>SRBOOSTING</h2>
					</div>
					<div class="page-title">	<span class="page-title-top-line"></span>
						<h1>{{ $pageName }}</h1>
					</div>
				</div>
			</div>
			<div class="left-side">
				<a href="./">
					<img src="./images/logo-main.png" alt="" class="img-responsive" />
				</a>
			</div>
			<div class="right-side">
				<!--Right Menu -->
				<div class="navbar-header pull-right">
					<!--<a id="nav-expander" class="nav-expander fixed"> -->
					<a id="nav-expander" class="">
						<img src="./images/right-menu.png" alt="" class="img-responsive" />
					</a>
				</div>
			</div>
		</div>
	</section>