<?php

// $acao = 'recuperar';
// require 'tarefa_controler.php';

// echo '<pre>';
// echo print_r($tarefas);
// echo '</pre>';

include "./includes/head.php";
?>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand d-flex align-items-center" href="#">
				<img src="./img/logo_feira.png" width="120" class="d-inline-block align-top" alt="">
				<h3>Busca de Feiras</h3>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarScroll">
				<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
				</ul>
			</div>
			<div>
				<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
					<li class="nav-item mr-3">
						<a class="btn btn-success" href="login.php">Login</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-warning" href="cadastro.php">Cadastrar</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<nav class="navbar navbar-light bg-light">
		<div class="container">

		</div>
	</nav>

	<div class="container app">
		<div class="row">
			<div class="col-md-3 menu">
				<ul class="list-group">
					<li class="list-group-item active"><a href="#">Tarefas pendentes</a></li>
					<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
					<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
				</ul>
			</div>

			<div class="col-md-9">
				<div class="container pagina">
					<div class="row">
						<div class="col">
							<h4>Tarefas pendentes</h4>
							<hr />

							<?php foreach ($tarefas as $indice => $tarefa) { ?>
								<?php if ($tarefa->status == 'pendente') { ?>
									<div class="row mb-3 d-flex align-items-center tarefa">
										<div class="col-sm-9" id="tarefa_<?php echo $tarefa->id ?>">
											<?php echo $tarefa->tarefa ?>
										</div>
										<div class="col-sm-3 mt-2 d-flex justify-content-between">
											<i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?php echo $tarefa->id ?>)"></i>
											<i class="fas fa-edit fa-lg text-info" onclick="editar(<?php echo $tarefa->id ?>, '<?php echo $tarefa->tarefa ?>')"></i>
											<i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?php echo $tarefa->id ?>)"></i>
										</div>
									</div>
								<?php } ?>

							<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
</body>

</html>