
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

<body class="internal">
	@include('common.nav')

    @if (isset(Auth::user()->name))
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
    @endif