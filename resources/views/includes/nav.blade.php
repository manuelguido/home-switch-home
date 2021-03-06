<!-- Nav fixed -->
<nav class="navbar navbar-inverse navbar-expand-xl navbar-dark fixed-top">
	<div class="navbar-header d-flex col">
	<a href="/"><img src="{{ asset('img/logos/HSH-Logo.svg') }}"></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		
		
		<!-- Quitar el enlace, solo de prueba-->
		<a href="/search">
			<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Buscar...">
				<span class="input-group-addon"><i class="fas fa-search"></i></span>
			</div>
			</form>
		</a>
		<ul class="nav navbar-nav navbar-right ml-auto">
            <li class="nav-item"><a href="/" class="nav-link"><i class="fa fa-home"></i><span></span></a></li>
            <li class="nav-item"><a href="/booking" class="nav-link"><i class="fa fa-book"></i><span></span></a></li>		
			<li class="nav-item"><a href="/notifications" class="nav-link"><i class="fa fa-bell"></i><span></span></a></li>
			<li class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="{{ asset('img/img-pruebas/perfil.jpg') }}" class="avatar" alt="Avatar"> Nombre <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item"><i class="fa fa-star"></i> Créditos: 2</a></li>
					<li><a href="/profile" class="dropdown-item"><i class="fas fa-sliders-h"></i> Configuración</a></li>
					<li><a href="/admin" class="dropdown-item"><i class="fas fa-tachometer-alt"></i> Administrador</a></li>
					<li class="divider dropdown-divider"></li>
					<li onclick="showLogout()"><a class="dropdown-item"><i class="fas fa-power-off"></i> Cerrar Sesión</a></li>
				</ul>
			</li>
		</ul>
    </div>    
</nav>
		
<div class="modal" id="modal">
    <div class="modalContent">
    	<div class="close">
        	<span class="closeButton" onclick="hideLogout()"><i class="fas fa-times"></i></span>
        </div>
        <span class="textModal">
        	<p>Estás seguro que deseas cerrar sesión?</p>
        <span>
        <div class="logoutButtons">
        	<button onclick="hideLogout()">No</button>  
        	<a href="/"><button>Si</button></a>
        </div>
    </div>
</div>