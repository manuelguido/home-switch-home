<!-- Nav fixed -->
<nav class="navbar navbar-inverse navbar-expand-xl navbar-dark fixed-top">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand comfortaa" href="/"><i class="fa fa-location-arrow"></i>Home<b>Switch</b>Home</a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Buscar...">
				<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right ml-auto">
            <li class="nav-item active"><a href="/" class="nav-link"><i class="fa fa-home"></i><span></span></a></li>
            <li class="nav-item"><a href="/" class="nav-link"><i class="fa fa-book"></i><span></span></a></li>		
			<li class="nav-item"><a href="/" class="nav-link"><i class="fa fa-bell"></i><span></span></a></li>
			<li class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="{{ asset('img/img-pruebas/perfil.jpg') }}" class="avatar" alt="Avatar"> Manuel <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="/" class="dropdown-item"><i class="far fa-user-circle"></i> Perfil</a></li>
					<li><a href="/" class="dropdown-item"><i class="fa fa-star"></i> Créditos: 2</a></li>
					<li><a href="/" class="dropdown-item"><i class="fas fa-sliders-h"></i> Configuración</a></li>
					<li class="divider dropdown-divider"></li>
					<li><a href="/" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Cerrar Sesión</a></li>
				</ul>
			</li>
		</ul>
    </div>    
</nav>
        
<!-- Nav no fixed -->
<nav class="navbar navbar-inverse navbar-expand-xl navbar-dark">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="/"><i class="fa fa-location-arrow"></i>Home<b>Switch</b>Home</a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Buscar...">
				<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right ml-auto">
            <li class="nav-item active"><a href="/" class="nav-link"><i class="fa fa-home"></i><span></span></a></li>
            <li class="nav-item"><a href="/" class="nav-link"><i class="fa fa-book"></i><span></span></a></li>		
			<li class="nav-item"><a href="/" class="nav-link"><i class="fa fa-bell"></i><span></span></a></li>
			<li class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="{{ asset('img/img-pruebas/perfil.jpg') }}" class="avatar" alt="Avatar"> Manuel <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="/" class="dropdown-item"><i class="fa fa-user-o"></i> Perfil</a></li>
					<li><a href="/" class="dropdown-item"><i class="fa fa-star"></i> Créditos: 2</a></li>
					<li><a href="/" class="dropdown-item"><i class="fa fa-sliders"></i> Configuración</a></li>
					<li class="divider dropdown-divider"></li>
					<li><a href="/" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Cerrar Sesión</a></li>
				</ul>
			</li>
		</ul>
    </div>    
</nav>