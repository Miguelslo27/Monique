
	<header>
		<div class="header-inner">
			<div id="logo">
				<!-- <a href="/"><img src="/statics/images/categories/41/thumbnail.jpg" alt="Monique.com.uy"></a> -->
				<a href="/"><img src="/statics/images/logo.png" alt="Monique.com.uy"></a>
			</div>
			<nav>
				<!-- <a href="/" class="access-menu is-active">Portada</a> -->
				<a href="/" class="access-menu normal-tab <?php if($GLOBALS['appPlace']=="home") echo 'is-active'; ?>">Inicio</a>
				<!-- <a href="/catalogos" class="access-menu normal-tab <?php if($GLOBALS['appPlace']=="catalogs") echo 'is-active'; ?>">Catálogos</a> -->

				<span class="dropdown-menu"><a class="access-menu normal-tab <?php if($GLOBALS['appPlace']=="catalogs") echo 'is-active'; ?>" href="#">Catálogos</a>
					<div class="dropdown">
					    <a class="access-menu normal-tab" href="/catalogo?c=actual">Actual</a>
					    <a class="access-menu normal-tab" href="/catalogos?c=anteriores">Anteriores</a>
					</div>
				</span>

				<a href="/como-comprar" class="access-menu normal-tab <?php if($GLOBALS['appPlace']=="hoy-to-buy") echo 'is-active'; ?>">¿Cómo Comprar?</a>
				<a href="/categorias" class="access-menu large-tab <?php if($GLOBALS['appPlace']=="categories") echo 'is-active'; ?>">Precios | Pedidos</a>
				<!-- <a href="/mis-pedidos" class="access-menu normal-tab <?php if($GLOBALS['appPlace']=="online-history") echo 'is-active'; ?>">Mis Pedidos</a> -->
				<a href="/contacto" class="access-menu normal-tab <?php if($GLOBALS['appPlace']=="contact") echo 'is-active'; ?>">Contacto</a>
				<a href="https://www.facebook.com/monique.ventasxmayor" target="_blank" class="access-menu normal-tab">Seguinos <span class="fa fa-2x fa-facebook-square"></span></a>
				<div id="search-box">
					<span class="fa fa-search"></span>
					<form action="/busqueda/" method="GET" style="margin: 0; padding: 0;">
						<input type="text" name="clave" class="search-input" placeholder="Qué deseas encontrar?">
					</form>
				</div>
			</nav>
			<div id="user-cmd">
				
				<?php
			
				$userStats = $GLOBALS['userStats'];
				$templatesPath = $GLOBALS['config']['templatesPath'];
			
				echo "\n<!--\n";
				print_r($userStats);
				echo "\n-->\n";
				
				$revision = 'revision='.rand(1,3000);

				if ($userStats['status'] == 'LOGGED') {
			
					$userName = $userStats['user']->nombre;
					include($templatesPath . 'user/logged-cmds.php');
			
				} else {
			
					?>
					<div class="user-cmd-dropdown bloqueo-de-catalogo" style="text-align: center;">
				    	<div class="user-info-row">
							<!-- <h3>Acceso restringido!</h3> -->
							<a href="#" class="modal-close action-close"><span class="modal-close-left"></span><span class="modal-close-right"></span></a>
							<!-- <p>Para Precios | Pedido y acceder a la lista de precios por mayor debes estar registrado</p> -->
							<br>
							<p>Para ver la lista de precios por mayor, puedes ir a <a href="/categorias">Precios | Pedidos</a>, para ello debes estar registrado.</p>
							<a href="/registro" class="btn btn-style black">Registrate</a>
						</div>
					</div>
					<?php
					
					include($templatesPath . 'user/not-logged-cmds.php');
			
				}
			
				?>
			
			</div>
		</div>
	</header>
	