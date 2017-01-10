<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>About</title>
	<!-- Fonts -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:100">
	<style>
		body {
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
			color: #BOBEC5;
			display: table;
			font-weight: 100;
			font-family: 'Lato'
		}

		.container {
			text-align: center;
			display: table-cell;
			vertical-align: middle;
		}

		.content {
			text-align: center;
			display: table-cell;
			vertical-align: middle;
		}

		.content {
			text-align: center;
			display: inline-block;
		}

		.title {
			font-size: 96px;
			margin-bottom: 40px;
		}

		.quote {
			font-size: 24px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="content">
		<div class="title">This is About Me</div>
		<div class="quote">Disini akan saya tulis tentang About me</div>
		<?php foreach ($users as $users): ?>
		<li>{{$users}}</li>
	<?php endforeach ?>
	</div>
</div>

	
</body>
</html>

