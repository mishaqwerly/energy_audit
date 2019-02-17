<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="/public/styles/css/list.css">
    <link rel="stylesheet" href="/public/styles/css/menu.css">
    <title></title>
  </head>
<body>
	<!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="/list">Всі обстежені об'єкти </a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="/last">Останнє обстеження</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="/add">Нове обстеження</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="/">Головна</a>
        </li>
      </ul>
    </nav>
	<div class="header">
		<h1 class="display-1 text-center m">Розраховані об'єкти аудиту</h1>
	</div>
	<div class="sec_2 ">
		<div class="container">
			<div class="row">
				<?php if (!empty($newsList)) { ?>
					<?php foreach ($newsList as $list => $val) { ?>
						<div class="col-lg-4 col-md-6 col-12">
							<form action="" method="POST">
							<div class="card mb-5 bs">
							  <div class="image-bg bb" style="background-image: url(../../public/images/<?php echo $val['uploaded_img']; ?>)"></div>
							  <div class="card-body">
							  	<p class="mb-2">Об'єкт аудиту</p>
							  	<p class="h5"><?php echo $val['name']; ?></p>	   
							    <p class="card-text">Адреса</p>
							    <p class="h5"><?php echo $val['address']; ?></p>
							    <p class="card-text">Рік заснування</p>
							    <p class="h5"><?php echo $val['year']; ?></p>
							    <p class="card-text">Кількість людей в установі </p>
							    <p class="h5"><?php echo $val['amount_people']; ?></p>
							    <p class="card-text">Кількість робочих днів </p>
							    <p class="h5"><?php echo $val['working_days']; ?></p>
							    <p class="card-text">Клас енергетичної ефективності</p>
							    <p class="h5"><?php echo $val['class_energy_efficiency']; ?></p>
							  </div>
							  <ul class="list-group list-group-flush">
							    <li class="list-group-item">Дата заповнення - <b><?php echo $val['date']; ?></b></li>
							    <li class="list-group-item">Розробник проекту - <b><?php echo $val['auditor_name']; ?></b></li>
							  </ul>
							  <div class="card-body d-flex justify-content-between">
							  	<button type="button" class="btn btn-primary"><a href="/info/<?php echo $val['id']; ?>">Переглянути</a></button>
								<button class="btn btn-danger" type="submit" name="submit" value="<?php echo $val['id']; ?>">Видалити</button> 
							  </div>
							</div>
							</form>
						</div>
					<?php } ?>
				<?php } else { ?>
					<div class="empty">
						<h2>ОБ'ЄКТИ АУДИТУ ВІДСУТНІ, НЕОХІДНО <a href="/add">СТВОРИТИ ЕНЕРГЕТИЧНИЙ АУДИТ</a></h2>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<script src="public/scripts/lib/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="/public/scripts/script.js"></script>
  </body>
</html> 
