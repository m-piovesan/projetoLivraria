<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login - LIVRARIA BOOKS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="../../style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<!--===============================================================================================-->
</head>

<body>

	<header class="bg-danger text-white shadow-lg p-4">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar navbar-light">
				<a class="navbar-brand fw-bold fst-italic" href="../../index.php">
					<img class="logo" src="../../img/Livraria Books-logos_transparent.png" alt="logo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="input-group mb-3 my-3 mx-4">
					<input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Recipient's username"
						aria-describedby="button-addon2">
					<button class="btn btn-light mx-auto d-block border" type="submit">Buscar
					</button>
				</div>

				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								<img class="market-cart align-middle mx-2" src="../../img/shopping-cart.png" alt="">
								<span>Login / Cadastro</span>
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="index.php">Login</a></li>
								<li><a class="dropdown-item" href="../../indexCadastro.php">Cadastre-se</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li>
									<button class="btn" type="button" data-bs-toggle="offcanvas"
										data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
										Carrinho</button>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
					aria-labelledby="offcanvasRightLabel">
					<div class="offcanvas-header text-dark fs-2">
						<p id="offcanvasRightLabel">Carrinho</p>
						<button type="button" class="btn-close text-reset fs-6" data-bs-dismiss="offcanvas"
							aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						<div class="container">
							<div class="row row-cols-2 text-dark d-flex align-items-center text-justify">
								<div class="col"> <a href="indexBook4.html">
										<img src="../../img/book4.jpg" class="img-thumbnail" alt="...">
									</a> </div>
								<div class="col" style="text-align: center;">
									<span style="font-weight: bold">H.P. Lovecraft - Miskatonic Edition </span> <br>
									<br>
									<span>R$64,90</span>
								</div>
								<div class="col"> <a href="indexBook2.html">
										<img src="../../img/livro2.png" class="img-thumbnail" alt="...">
									</a> </div>
								<div class="col" style="text-align: center;">
									<span style="font-weight: bold">O Colecionador</span> <br> <br>
									<span>R$59,90</span>
								</div>
								<div class="col"> <a href="indexBook3.html">
										<img src="../../img/livro3.jpg" class="img-thumbnail" alt="...">
									</a> </div>
								<div class="col" style="text-align: center;">
									<span style="font-weight: bold">A Vida Não Me Assusta</span> <br> <br>
									<span>R$49,90</span>
								</div>
								<div class="col"> <a href="indexBook5.html">
										<img src="../../img/book5.png" class="img-thumbnail" alt="...">
									</a> </div>
								<div class="col" style="text-align: center;">
									<span style="font-weight: bold">Frankenstein</span> <br> <br>
									<span>R$59,90</span>
								</div>
								<div class="col"> <a href="indexBook6.html">
										<img src="../../img/book6.jpg" class="img-thumbnail" alt="...">
									</a> </div>
								<div class="col" style="text-align: center;">
									<span style="font-weight: bold">Edgar Allan Poe: Medo Clássico Vol. 2</span> <br>
									<br>
									<span>R$64,90</span>
								</div>
								<div class="col"> <a href="indexBook1.html">
										<img src="../../img/livro1.jpg" class="img-thumbnail" alt="...">
									</a> </div>
								<div class="col" style="text-align: center;">
									<span style="font-weight: bold">Columbine</span> <br> <br>
									<span>R$69,90</span>
								</div>
							</div>
							<div class="d-grid gap-2 col mx-auto">
								<a href="../../indexCart.php" class="btn btn-danger mt-3 align-items-center" role="button">Ir
									para o carrinho</a>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<div class="limiter shadow-lg">
		<div class="container-login100 border rounded-3 shadow-lg">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="efetua_login_cliente.php" method="POST">
					<span class="login100-form-title p-b-34">
						Login
					</span>

					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="emailId" class="input100" type="email" name="email" placeholder="E-mail:">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="senha" placeholder="Senha:">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Fazer Login
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Esqueceu
						</span>

						<a href="#" class="txt2">
							usuário / senha?
						</a>
					</div>

					<div class="w-full text-center">
						<a href="../../indexCadastro.php" class="txt3">
							Cadastre-se
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('../../img/livroBG.jpg');"></div>
			</div>
		</div>
	</div>

	<footer class="bg-danger text-light w-100 py-4 d-flex align-items-center">
		<p class="my-0 text-center d-inline-block m-auto text-light">Matheus Piovesan | (+55 49) 99922-4588 |
			Copyright © 2003-2021</p>
	</footer>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
		crossorigin="anonymous"></script>

</body>

</html>