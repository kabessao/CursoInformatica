<?php
	function cabecalho($titulo){
		echo "
			<!doctype html>
			<html>
				<head>
					<meta charset=\"utf-8\">

					<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
					<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
					<link type=\"text/css\" rel=\"stylesheet\" href=\"estilo.css\">
					<link href=\"bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
					<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
					<title>$titulo</title>
					<style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
				</head>
				<body>

					<div class=\"container\">
					<div class=\"jumbotron\">
					<div class=\"principal\">
					<div class=\"cabecalho\">
					<div class=\"titulo\">
					<img src=\"img/logo_etec.png\" class=\"img-rounded\" alt=\"Etecleme\" width=\"94\" height=\"60\">
					<br>Curso de Informática
					</div>

					</div>
					<div class=\"centro\">";
echo '<!-- Modal -->
					<div class="modal fade" id="myModal" role="dialog">
					  <div class="modal-dialog">
					  
						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header" style="padding:35px 50px;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
						  </div>
						  <div class="modal-body" style="padding:40px 50px;">
							<form role="form" action="autentica.php" method="post">
							  <div class="form-group">
								<label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
								<input type="text" class="form-control" id="usrname" name="email" placeholder="Enter email">
							  </div>
							  <div class="form-group">
								<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
								<input type="password" class="form-control" id="psw" name="senha" placeholder="Enter password">
							  </div>
							  <div class="checkbox">
								<label><input type="checkbox" value="" checked>Remember me</label>
							  </div>
								<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
							</form>
						  </div>
						  <div class="modal-footer">
							<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<p>Not a member? <a href="#">Sign Up</a></p>
							<p>Forgot <a href="#">Password?</a></p>
						  </div>
						</div>
						
					  </div>
					</div> 
					';

					menu();
	}


	function rodape(){
		echo "</div>
			<div class=\"rodape\">".date("d/m/Y")."</div>
			</div>
			</div>
			</div>
			</body>
		</html>";
	}

	function menu() {
		@session_start();
		echo '<a href="index.php">
		<span class="glyphicon glyphicon-home">
	</span> Inicio
		</a> | 
		<a href="cadusuario.php">
		<span class="glyphicon glyphicon-list-alt">
	</span> Cadastro de usuário
		</a> | 
		<a href="consultaenquete.php">
		<span class="glyphicon glyphicon-list-alt">
	</span> Consulta enquete
		</a> | 
		<a href="consultaenquete_detalhe.php">
		<span class="glyphicon glyphicon-list-alt">
	</span> Consulta totais
		</a> | 
		<a href="#myModal" data-toggle="modal">
		<span class="glyphicon glyphicon-user">
	</span> Login
		</a> | 
		<a href="logout.php">
		<span class="glyphicon glyphicon-off">
	</span> Sair
		</a>';
	}
	
	function acesso(){
		session_start();
		if (isset($_SESSION['email'])==""){
			header("Location: login.php?erro=semLogin");
			exit;
		}
	}
