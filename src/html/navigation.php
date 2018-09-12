

	<nav class="sticky-top">
		  
		  <ul class="nav justify-content-center">
		  <li class="nav-item">
			<a class="nav-link btn btn-primary btn-lg" href="index.php">Начало</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link btn btn-primary btn-lg" href="search.php">Търсене</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link btn btn-primary btn-lg" href="#">Контакти</a>
			</li>
			<?php
			$path = 'http://localhost:8083/project1/src/';
			$path .= 'adminPage.php';
			$path1 ='http://localhost:8083/project1/src/admin/';
			$path1 .= 'exit.php';
			$pathArea = 'http://localhost:8083/project1/src/';
			$pathArea .= 'adminArPage.php';
			$pathBuilding = 'http://localhost:8083/project1/src/';
			$pathBuilding .= 'adminBdPage.php';
				 if(isset($_SESSION['isAdmin'])){
				echo " <li class='nav-item'>
								<div class='dropdown'>
									<button class='nav-link btn btn-primary btn-lg dropdown-toggle'>Администрация</button>
										<div class='dropdown-content'>
										<a href=".$pathBuilding.">Сгради</a>
										<a href=".$pathArea.">Имоти</a>
										<a href=".$path.">Номенклатури</a>
										</div>
								</div>
							</li>";
				echo " <li class='nav-item'>
				<a class='nav-link btn btn-primary btn-lg' href=".$path1.">Изход</a>
				</li>";
			}
			?>
		</ul>
</nav>