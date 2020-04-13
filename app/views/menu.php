<nav class="menuprincipal" id="principal">					
					<ul class="menu-ul">
						<li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a></li>
						<li><a href="<?php echo URL_BASE . "nfeconfig"?>"><i class="icon fas fa-file-invoice-dollar"></i> Configurações de nota</a></li>
						<li><a href="#menu_empresa"><i class="icon fas fa-truck"></i> Empresa <span>+</span></a></li>
						<li><a href="#menu_contato"><i class="icon fas fa-user-tag"></i> Contato <span>+</span></a></li>
						<li><a href="#menu_produto"><i class="icon fas fa-cube"></i> Produto <span>+</span></a></li>
						<li><a href="#menu_tributacao"><i class="icon fas fa-book"></i> Tributação <span>+</span></a></li>
						<li><a href="#menu_notas"><i class="icon fas fa-file-contract"></i> Notas <span>+</span></a></li>					
					</ul>
</nav>

<!-- MENU EMPRESA -->
<nav class="menuprincipal" id="menu_empresa">
	<ul class="menu-ul">
		<li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a></li>
		<span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i class="icon fas fa-truck"></i> Empresa</span>
		<li><a href="<?php echo URL_BASE . "empresa"?>"><i class="icon fas fa-list"></i> Lista</a></li>
		<li><a href="<?php echo URL_BASE . "empresa/create"?>"><i class="icon fas fa-box"></i> cadastro</a></li>
	</ul>
</nav>

<!-- MENU CONTATO -->
<nav class="menuprincipal" id="menu_contato">
	<ul class="menu-ul">
		<li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a></li>
		<span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i class="icon fas fa-user-tag"></i> Contato</span>
		<li><a href="<?php echo URL_BASE . "contato"?>"><i class="icon fas fa-list"></i> Lista</a></li>
		<li><a href="<?php echo URL_BASE . "contato/create"?>"><i class="icon fas fa-box"></i> cadastro</a></li>
	</ul>
</nav>

<!-- MENU PRODUTO -->
<nav class="menuprincipal" id="menu_produto">
	<ul class="menu-ul">
		<li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a></li>
		<span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i class="icon fas fa-cube"></i> Produto</span>
		<li><a href="<?php echo URL_BASE . "Produto"?>"><i class="icon fas fa-list"></i> Lista</a></li>
		<li><a href="<?php echo URL_BASE . "Produto/create"?>"><i class="icon fas fa-box"></i> cadastro</a></li>
	</ul>
</nav>

<!-- MENU TRIBUTAÇÃO -->
<nav class="menuprincipal" id="menu_tributacao">
	<ul class="menu-ul">
		<li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a></li>
		<span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i class="icon fas fa-book"></i> Tributação</span>
		<li><a href="<?php echo URL_BASE . "tributacao"?>"><i class="icon fas fa-list"></i> Lista</a></li>
		<li><a href="<?php echo URL_BASE . "tributacao/create"?>"><i class="icon fas fa-box"></i> cadastro</a></li>
	</ul>
</nav>

<!-- MENU NOTA -->
<nav class="menuprincipal" id="menu_notas">
	<ul class="menu-ul">
		<li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a></li>
		<span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i class="icon fas fa-file-contract"></i> Notas</span>
		<li><a href="<?php echo URL_BASE . "Nfe/index"?>"><i class="icon fas fa-list"></i> Todas as notas</a></li>
		<li><a href="<?php echo URL_BASE . "Nfe/create"?>"><i class="icon fas fa-box"></i> Nova nota</a></li>
		<li><a href=""><i class="icon fas fa-signature"></i> Assinada</a></li>
		<li><a href=""><i class="icon fas fa-stamp"></i> Validada</a></li>
		<li><a href=""><i class="icon fas fa-check-double"></i> Autorizada</a></li> 
		<li><a href=""><i class="icon far fa-window-close"></i> Cancelada</a></li>
	</ul>
</nav>