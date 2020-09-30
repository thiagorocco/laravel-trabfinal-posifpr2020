<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
		<link href="/css/app.css" rel="stylesheet">
		<link href="/css/custom.css" rel="stylesheet">
		<title>Controle de Séries Assistidas</title>
	</head>
	<body>
		<div class="container">
		
			<nav class="navbar navbar-default">
				<div class="container-fluid">
				
					<div class="navbar-header">
						<h1 class="text-dark">Controle de Séries Assistidas</h1>
					</div>
						
						<ul class="nav navbar-expand navbar-right">
							<li><a href="{{action('SeriesController@listar')}}" class="bg bg-secondary text-light btn m-1">Listar Séries</a></li>
							<li><a href="{{action('SeriesController@nova')}}" class="bg bg-warning text-dark btn m-1">Adicionar Série</a>
							</li>
								<a href="\home" class="bg bg-danger text-light btn m-1">PAINEL DE CONTROLE</a>
							</li>
						</ul>
				</div>
			</nav>
				@yield('conteudo')
			<footer class="footer bg-secondary p-3 text-center text-warning mt-1">
				Projeto de Laravel - Pós IFPR 2020
			</footer>
		</div>	
	</body>
</html>