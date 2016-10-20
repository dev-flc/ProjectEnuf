<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	{!!Html::style('css/app.css')!!}
  {!!Html::script('js/jquery-1.12.3.min.js')!!}
  {!!Html::script('js/bootstrap.min.js')!!}
  <link rel="icon" href="../../favicon.ico">
  <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
</head>
<body>
<!-- inicio nav -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ENUF</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
        <li><a href="producto">Quienes Somos...?</a></li>
        <li><a href="producto">Contactanos</a></li>
        <!--
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">link</a></li>  
          </ul>
        </li>
        -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="#">Registrarme</a></li>
       <li><a href="#">Iniciar Sesion</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  
</nav>
<br />
<br />
<!-- fin nav -->
<!-- Inicio Contenido-->


	@yield('contenido')
<!-- Fin Contenido-->


</body>
</html>