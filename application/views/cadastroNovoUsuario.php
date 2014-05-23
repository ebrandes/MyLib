<div class="container-fluid">

	<div class="row tituloPrincipal">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1 class="text-center tituloLogo">TCHEBooks.COM</h1>
			<h2 class="text-left subTitulo">Novo usuário</h2>
		</div>
		<div class="col-md-4"></div>
	</div>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 frmCadastroUsuario">

			<form role="form">
				<div class="form-group">
					<label for="nome">Nome completo</label>
					<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="login">Login</label>
					<input type="text" class="form-control" name="login" id="login" placeholder="Usuário de login (username)">
				</div>
				<div class="form-group">
					<label for="senha">Senha</label>
					<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
				</div>
				<div class="form-group">
					<label for="senha">Repita sua senha</label>
					<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
				</div>
				<div class="form-group">
					<label for="foto">Imagem / Avatar</label>
					<input type="file" id="foto">
					<p class="help-block">Escolha uma foto para utilizar como avatar.</p>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox"> <a href="#">Aceito os termos e condições do TCHEbooks.COM</a>
					</label>
				</div>
				<button type="submit" class="btn btn-primary btnCadastrar">Cadastrar</button>
				<a href="/site" class="btn btn-default btnCadastrar">Cancelar</a>
			</form>

		</div>
		<div class="col-md-4"></div>
	</div>
	
</div>