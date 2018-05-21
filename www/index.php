<!DOCTYPE html>
<html>
<head>
	<title>LAMP Server</title>
</head>
<body>
	<h1>Bienvenue sur LAMP server</h1>
	<h2>Un projet permettant d'encapsuler vos applications web, à l'aide de Docker et d'Apache + MySQL + phpMyAdmin</h2>
	<a href="https://github.com/corentindechomet/LAMP/blob/master/README.md" target="_blank" class="button">Comment ça marche ?</a>
	<a href="http://localhost:8080/" target="_blank" class="button">Gérez vos bases de données</a>
	<p>Projet conçu par <a href="http://corentindechomet.fr" target="_blank">Corentin Déchomet</a></p>
</body>
</html>

<style>
 	@import url('https://fonts.googleapis.com/css?family=Roboto');
	body {
		background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
		background-repeat: no-repeat;
		height: 100vh;
		color: white;
		text-align: center;
		overflow-y: hidden;
    	font-family: 'Roboto', sans-serif;
	}
	h1 {
		margin-top: 30vh;
		font-size: 100px;
		margin-bottom: 0;
	}
	h2 {
		font-weight: 400;
		margin-bottom: 100px;
	}
	a.button {
		background: transparent;
		border: 1px solid white;
		border-radius: 0;
		color: white;
		padding: 20px;
		cursor: pointer;
		transition: all 0.2s ease;
		text-decoration: none;
		margin-right: 15px;
	}
	a.button:hover {
		background-color: white;
		color: black;
	}
	a {
		color: white;
	}
	p {
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
	}
</style>