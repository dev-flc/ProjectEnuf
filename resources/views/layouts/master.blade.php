<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	{!!Html::style('css/app.css')!!}
  {!!Html::style('css/index.css')!!}
  {!!Html::script('js/jquery-1.12.3.min.js')!!}
  {!!Html::script('js/bootstrap.min.js')!!}
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
      <a class="navbar-brand" href="#">Alumno</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
        <li><a href="producto">Productos</a></li>
        <li><a href="dashboards">Dashboards</a></li>
        <li><a href="marca">Marcas</a></li>
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
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li>
        <img class="img-circle" width="45" height="45" alt="" src="" />
      </li>
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">perfil</a></li>
             <li role="separator" class="divider"></li>
            <li><a href="cerrar.php">salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br>
<br>
<br>
<!-- fin nav -->
<!-- Inicio Contenido-->
<nav class="container">
	@yield('contenido')
</nav>
<!-- Fin Contenido-->


</body>
</html>