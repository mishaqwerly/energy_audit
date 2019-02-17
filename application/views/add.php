<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="/public/styles/css/add.css">
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
          <a class="js-scroll-trigger" href="/add">Нове обстеження</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="/last">Останнє обстеження</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="/list">Всі обстежені об'єкти</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="/">Головна</a>
        </li>
      </ul>
    </nav>
  	<div class="header">
  		<h1 class="display-1 text-center">Запис вхідних даних</h1>
  	</div>
  	<div class="container bs">
  		<div class="title d-flex justify-content-center">
  			<div class="thumbnail bs">
  		  		<img src='https://image.flaticon.com/icons/svg/1436/1436645.svg'>
  		  	</div>
  		</div>
  		  	<form action="" method="POST" enctype="multipart/form-data">
  			  	<div class="form-row bs brb p-3">
  			  		<div class="col-12">
  			  			<h3 class="mt-5 mb-5 text-center">Дані про будівлю</h3>
  			  		</div>
  			  		<div class="col-lg-4 mb-3">
	  			    	<label for="name">Назва установи</label>
	  					<input id="name" type="text" name="name" class="form-control" required>
	  			    </div>
	  			    <div class="col-lg-4 mb-3">
	  					<label for="address">Адреса</label>
	  					<input id="address" type="text" name="address" class="form-control" required>
	  			    </div>
	  			    <div class="col-lg-4 mb-3">
	  			    	<label for="foundation_year">Рік</label>
	  					<input id="foundation_year" type="number" name="foundation_year" class="form-control" required>
	  			    </div>
	  			    <div class="col-lg-4 mb-3">
	  			    	<label for="amount_people">Кількість людей</label>
	  					<input id="amount_people" type="number" name="amount_people" class="form-control" required>
	  			    </div>
	  			    <div class="col-lg-4 mb-3">
	  			    	<label for="working_days">Кількість робочих днів</label>
	  					<input id="working_days" type="number" name="working_days" class="form-control" required>
	  			    </div>
	  			    <div class="col-lg-4 mb-3">
	  			    	<label for="heating_days">Кількість опалювальних днів</label>
	  					<input id="heating_days" type="number" name="heating_days" class="form-control" required>
	  			    </div>
	  			    <div class="col-lg-4 mb-3">
	  			    	<label for="volume_building">Опялювальний об'єм, <b>м<sup>3</sup></b></label>
	  					<input id="volume_building" type="number" step="0.001" name="volume_building" class="form-control" required>
	  			    </div>
	  			    <div class="col-lg-4 mb-3">
	  			    	<label for="heat_leakage">Сумарні теплонадходження, <b>кВт∙год</b></label>
	  					<input id="heat_leakage" type="number" step="0.001" name="heat_leakage" class="form-control" required>
	  			    </div>
	  			    <div class="col-lg-4 mb-3">
	  			    	<label for="auditor_name">Розробник аудиту</label>
	  					<input id="auditor_name" type="text"  name="auditor_name" class="form-control" required>
	  			    </div>
					<div class="col-lg-4 mb-3">
						<label for="exampleFormControlFile1">Фото будівлі</label>
						<input type="file" class="form-control-file" name="image">
					</div>
  			  	</div>
  			  	<div class="form-row bs brb mt-4 p-3">
  			  		<div class="col-12">
  			  			<h3 class="mt-5 mb-5 text-center">Величини тепловтрат по будівлі, <b>кВт</b></h3>
  			  		</div>
  			  		<div class="col-lg-4 mb-3">
	  			    	<label for="walls_loss">Тепловтрати через стіни</label>
	  					<input id="walls_loss" type="number" name="walls_loss" step="0.001" class="form-control" required>
	  			    </div>
	  			    <div class="col-lg-4 mb-3">
	  			    	<label for="windows_loss">Тепловтрати через вікна</label>
	  					<input id="windows_loss" type="number" name="windows_loss" step="0.001" class="form-control" required>
	  			    </div>
	  			    <div class="col-lg-4 mb-3">
	  			    	<label for="floor_loss">Тепловтрати через підлогу</label>
	  					<input id="floor_loss" type="number" name="floor_loss" step="0.001" class="form-control" required>
	  			    </div>
	  			    <div class="col-lg-4 mb-3">
	  			    	<label for="ceiling_loss">Тепловтрати через стелю</label>
	  					<input id="ceiling_loss" type="number" name="ceiling_loss" step="0.001" class="form-control" required>
	  			    </div>
	  			    <div class="col-lg-4 mb-3">
	  			    	<label for="doors_loss">Тепловтрати через двері</label>
	  					<input id="doors_loss" type="number" name="doors_loss" step="0.001" class="form-control" required>
	  			    </div>
	  			    <div class="col-lg-4 mb-3">
	  			    	<label for="fencing_structures_loss">Тепловтрати через огороджувальні конструкції</label>
	  					<input id="fencing_structures_loss" type="number" name="fencing_structures_loss" step="0.001" class="form-control" required>
	  			    </div>
	  			    <div class="col-lg-4 mb-3">
	  			    	<label for="ventilation_loss">Тепловтрати через витяжну вентиляцію</label>
	  					<input id="ventilation_loss" type="number" name="ventilation_loss" step="0.001" class="form-control" required>
	  			    </div>
  			  	</div>
  			  	
  			  	<div class="form-row justify-content-between">
  			  		<div class="col-md col-12">
  			  			<div class="form-row bs brb mt-4 ">
  			  				<div class="col-12">
  			  					<h3 class="mt-5 mb-4 text-center">Використання електороенергії, <b>кВт∙год</b></h3>
  			  				</div>
  			  				<div class="col-lg-4 mb-3">
			  					<div class="form-group d-flex flex-column align-items-center">
			  						<input type="number" name="electricity_1_2015" step="0.001" placeholder="Cічень" class="form-control" required>
			  						<input type="number" name="electricity_2_2015" step="0.001" placeholder="Лютий" class="form-control" required>
			  						<input type="number" name="electricity_3_2015" step="0.001" placeholder="Березень" class="form-control" required>
			  						<input type="number" name="electricity_4_2015" step="0.001" placeholder="Квітень" class="form-control" required>
			  						<input type="number" name="electricity_5_2015" step="0.001" placeholder="Травень" class="form-control" required>
			  						<input type="number" name="electricity_6_2015" step="0.001" placeholder="Червень" class="form-control" required>
			  						<input type="number" name="electricity_7_2015" step="0.001" placeholder="Липень" class="form-control" required>
			  						<input type="number" name="electricity_8_2015" step="0.001" placeholder="Серпень" class="form-control" required>
			  						<input type="number" name="electricity_9_2015" step="0.001" placeholder="Вересень" class="form-control" required>
			  						<input type="number" name="electricity_10_2015" step="0.001" placeholder="Жовтень" class="form-control" required>
			  						<input type="number" name="electricity_11_2015" step="0.001" placeholder="Листопад" class="form-control" required>
			  						<input type="number" name="electricity_12_2015" step="0.001" placeholder="Грудень" class="form-control" required>
			  						<h5 class="text-center">2016</h5>
			  					</div>
			  			    </div>
			  			    <div class="col-lg-4 mb-3">
			  					<div class="form-group d-flex flex-column align-items-center">
			  						<input type="number" name="electricity_1_2016" step="0.001" placeholder="Cічень" class="form-control" required>
			  						<input type="number" name="electricity_2_2016" step="0.001" placeholder="Лютий" class="form-control" required>
			  						<input type="number" name="electricity_3_2016" step="0.001" placeholder="Березень" class="form-control" required>
			  						<input type="number" name="electricity_4_2016" step="0.001" placeholder="Квітень" class="form-control" required>
			  						<input type="number" name="electricity_5_2016" step="0.001" placeholder="Травень" class="form-control" required>
			  						<input type="number" name="electricity_6_2016" step="0.001" placeholder="Червень" class="form-control" required>
			  						<input type="number" name="electricity_7_2016" step="0.001" placeholder="Липень" class="form-control" required>
			  						<input type="number" name="electricity_8_2016" step="0.001" placeholder="Серпень" class="form-control" required>
			  						<input type="number" name="electricity_9_2016" step="0.001" placeholder="Вересень" class="form-control" required>
			  						<input type="number" name="electricity_10_2016" step="0.001" placeholder="Жовтень" class="form-control" required>
			  						<input type="number" name="electricity_11_2016" step="0.001" placeholder="Листопад" class="form-control" required>
			  						<input type="number" name="electricity_12_2016" step="0.001" placeholder="Грудень" class="form-control" required>
			  						<h5 class="text-center">2017</h5>
			  					</div>
			  			    </div>
			  			    <div class="col-lg-4 mb-3">
			  					<div class="form-group d-flex flex-column align-items-center">
			  						<input type="number" name="electricity_1_2017" step="0.001" placeholder="Cічень" class="form-control" required>
			  						<input type="number" name="electricity_2_2017" step="0.001" placeholder="Лютий" class="form-control" required>
			  						<input type="number" name="electricity_3_2017" step="0.001" placeholder="Березень" class="form-control" required>
			  						<input type="number" name="electricity_4_2017" step="0.001" placeholder="Квітень" class="form-control" required>
			  						<input type="number" name="electricity_5_2017" step="0.001" placeholder="Травень" class="form-control" required>
			  						<input type="number" name="electricity_6_2017" step="0.001" placeholder="Червень" class="form-control" required>
			  						<input type="number" name="electricity_7_2017" step="0.001" placeholder="Липень" class="form-control" required>
			  						<input type="number" name="electricity_8_2017" step="0.001" placeholder="Серпень" class="form-control" required>
			  						<input type="number" name="electricity_9_2017" step="0.001" placeholder="Вересень" class="form-control" required>
			  						<input type="number" name="electricity_10_2017" step="0.001" placeholder="Жовтень" class="form-control" required>
			  						<input type="number" name="electricity_11_2017" step="0.001" placeholder="Листопад" class="form-control" required>
			  						<input type="number" name="electricity_12_2017" step="0.001" placeholder="Грудень" class="form-control" required>
			  						<h5 class="text-center">2018</h5>
			  					</div>
			  			    </div>
  			  			</div>
  			  		</div>
  			  		<div class="col-1"></div>
  			  		<div class="col-md col-12">
	  			  		<div class="form-row bs brb mt-4">
	  			  			<div class="col-12">
	  			  				<h3 class="mt-5 mb-4 text-center">Використання опалення, <b>Гкал</b></h3>
	  			  			</div>
	  			  			<div class="col-lg-4 mb-3">
  			  					<div class="form-group d-flex flex-column align-items-center">
  			  						<input type="number" name="heating_1_2015" step="0.001" placeholder="Cічень" class="form-control" required>
  			  						<input type="number" name="heating_2_2015" step="0.001" placeholder="Лютий" class="form-control" required>
  			  						<input type="number" name="heating_3_2015" step="0.001" placeholder="Березень" class="form-control" required>
  			  						<input type="number" name="heating_4_2015" step="0.001" placeholder="Квітень" class="form-control" required>
  			  						<input type="number" name="heating_5_2015" step="0.001" placeholder="Травень" class="form-control" required>
  			  						<input type="number" name="heating_6_2015" step="0.001" placeholder="Червень" class="form-control" required>
  			  						<input type="number" name="heating_7_2015" step="0.001" placeholder="Липень" class="form-control" required>
  			  						<input type="number" name="heating_8_2015" step="0.001" placeholder="Серпень" class="form-control" required>
  			  						<input type="number" name="heating_9_2015" step="0.001" placeholder="Вересень" class="form-control" required>
  			  						<input type="number" name="heating_10_2015" step="0.001" placeholder="Жовтень" class="form-control" required>
  			  						<input type="number" name="heating_11_2015" step="0.001" placeholder="Листопад" class="form-control" required>
  			  						<input type="number" name="heating_12_2015" step="0.001" placeholder="Грудень" class="form-control" required>
  			  						<h5 class="text-center">2016</h5>
  			  					</div>
  			  			    </div>
  			  			    <div class="col-lg-4 mb-3">
  			  					<div class="form-group d-flex flex-column align-items-center">
  			  						<input type="number" name="heating_1_2016" step="0.001" placeholder="Cічень" class="form-control" required>
  			  						<input type="number" name="heating_2_2016" step="0.001" placeholder="Лютий" class="form-control" required>
  			  						<input type="number" name="heating_3_2016" step="0.001" placeholder="Березень" class="form-control" required>
  			  						<input type="number" name="heating_4_2016" step="0.001" placeholder="Квітень" class="form-control" required>
  			  						<input type="number" name="heating_5_2016" step="0.001" placeholder="Травень" class="form-control" required>
  			  						<input type="number" name="heating_6_2016" step="0.001" placeholder="Червень" class="form-control" required>
  			  						<input type="number" name="heating_7_2016" step="0.001" placeholder="Липень" class="form-control" required>
  			  						<input type="number" name="heating_8_2016" step="0.001" placeholder="Серпень" class="form-control" required>
  			  						<input type="number" name="heating_9_2016" step="0.001" placeholder="Вересень" class="form-control" required>
  			  						<input type="number" name="heating_10_2016" step="0.001" placeholder="Жовтень" class="form-control" required>
  			  						<input type="number" name="heating_11_2016" step="0.001" placeholder="Листопад" class="form-control" required>
  			  						<input type="number" name="heating_12_2016" step="0.001" placeholder="Грудень" class="form-control" required>
  			  						<h5 class="text-center">2017</h5>
  			  					</div>
  			  			    </div>
  			  			    <div class="col-lg-4 mb-3">
  			  					<div class="form-group d-flex flex-column align-items-center">
  			  						<input type="number" name="heating_1_2017" step="0.001" placeholder="Cічень" class="form-control" required>
  			  						<input type="number" name="heating_2_2017" step="0.001" placeholder="Лютий" class="form-control" required>
  			  						<input type="number" name="heating_3_2017" step="0.001" placeholder="Березень" class="form-control" required>
  			  						<input type="number" name="heating_4_2017" step="0.001" placeholder="Квітень" class="form-control" required>
  			  						<input type="number" name="heating_5_2017" step="0.001" placeholder="Травень" class="form-control" required>
  			  						<input type="number" name="heating_6_2017" step="0.001" placeholder="Червень" class="form-control" required>
  			  						<input type="number" name="heating_7_2017" step="0.001" placeholder="Липень" class="form-control" required>
  			  						<input type="number" name="heating_8_2017" step="0.001" placeholder="Серпень" class="form-control" required>
  			  						<input type="number" name="heating_9_2017" step="0.001" placeholder="Вересень" class="form-control" required>
  			  						<input type="number" name="heating_10_2017" step="0.001" placeholder="Жовтень" class="form-control" required>
  			  						<input type="number" name="heating_11_2017" step="0.001" placeholder="Листопад" class="form-control" required>
  			  						<input type="number" name="heating_12_2017" step="0.001" placeholder="Грудень" class="form-control" required>
  			  						<h5 class="text-center">2018</h5>
			  		  			</div>
			  		  		</div>
			  		  	</div>
			  		</div>
  			  	</div>  			  	
  			  	<div class="form-row mb-3 justify-content-between">
  			  		<div class="col-md col-12">
  			  			<div class="form-row bs brb mt-4">
  			  				<div class="col-12">
  			  					<h3 class="mt-5 mb-4 text-center">Використання холодної води, <b>м<sup>3</sup></b></h3>
  			  				</div>
	  			  			<div class="col-lg-4 mb-3">
			  					<div class="form-group d-flex flex-column align-items-center">
			  						<input type="number" name="cold_water_1_2015"  step="0.001" placeholder="Cічень" class="form-control" required>
			  						<input type="number" name="cold_water_2_2015" step="0.001"  placeholder="Лютий" class="form-control" required>
			  						<input type="number" name="cold_water_3_2015" step="0.001"  placeholder="Березень" class="form-control" required>
			  						<input type="number" name="cold_water_4_2015" step="0.001"  placeholder="Квітень" class="form-control" required>
			  						<input type="number" name="cold_water_5_2015" step="0.001"  placeholder="Травень" class="form-control" required>
			  						<input type="number" name="cold_water_6_2015" step="0.001"  placeholder="Червень" class="form-control" required>
			  						<input type="number" name="cold_water_7_2015" step="0.001"  placeholder="Липень" class="form-control" required>
			  						<input type="number" name="cold_water_8_2015" step="0.001"  placeholder="Серпень" class="form-control" required>
			  						<input type="number" name="cold_water_9_2015" step="0.001"  placeholder="Вересень" class="form-control" required>
			  						<input type="number" name="cold_water_10_2015" step="0.001"  placeholder="Жовтень" class="form-control" required>
			  						<input type="number" name="cold_water_11_2015" step="0.001"  placeholder="Листопад" class="form-control" required>
			  						<input type="number" name="cold_water_12_2015" step="0.001"  placeholder="Грудень" class="form-control" required>
			  						<h5 class="text-center">2016</h5>
			  					</div>
			  			    </div>
			  			    <div class="col-lg-4 mb-3">
			  					<div class="form-group d-flex flex-column align-items-center">
			  						<input type="number" name="cold_water_1_2016"  step="0.001" placeholder="Cічень" class="form-control" required>
			  						<input type="number" name="cold_water_2_2016" step="0.001"  placeholder="Лютий" class="form-control" required>
			  						<input type="number" name="cold_water_3_2016" step="0.001"  placeholder="Березень" class="form-control" required>
			  						<input type="number" name="cold_water_4_2016" step="0.001"  placeholder="Квітень" class="form-control" required>
			  						<input type="number" name="cold_water_5_2016" step="0.001"  placeholder="Травень" class="form-control" required>
			  						<input type="number" name="cold_water_6_2016" step="0.001"  placeholder="Червень" class="form-control" required>
			  						<input type="number" name="cold_water_7_2016" step="0.001"  placeholder="Липень" class="form-control" required>
			  						<input type="number" name="cold_water_8_2016" step="0.001"  placeholder="Серпень" class="form-control" required>
			  						<input type="number" name="cold_water_9_2016" step="0.001"  placeholder="Вересень" class="form-control" required>
			  						<input type="number" name="cold_water_10_2016" step="0.001"  placeholder="Жовтень" class="form-control" required>
			  						<input type="number" name="cold_water_11_2016" step="0.001"  placeholder="Листопад" class="form-control" required>
			  						<input type="number" name="cold_water_12_2016" step="0.001"  placeholder="Грудень" class="form-control" required>
			  						<h5 class="text-center">2017</h5>
			  					</div>
			  			    </div>
			  			    <div class="col-lg-4 mb-3">
			  					<div class="form-group d-flex flex-column align-items-center">
			  						<input type="number" name="cold_water_1_2017"  step="0.001" placeholder="Cічень" class="form-control" required>
			  						<input type="number" name="cold_water_2_2017" step="0.001"  placeholder="Лютий" class="form-control" required>
			  						<input type="number" name="cold_water_3_2017" step="0.001"  placeholder="Березень" class="form-control" required>
			  						<input type="number" name="cold_water_4_2017" step="0.001"  placeholder="Квітень" class="form-control" required>
			  						<input type="number" name="cold_water_5_2017" step="0.001"  placeholder="Травень" class="form-control" required>
			  						<input type="number" name="cold_water_6_2017" step="0.001"  placeholder="Червень" class="form-control" required>
			  						<input type="number" name="cold_water_7_2017" step="0.001"  placeholder="Липень" class="form-control" required>
			  						<input type="number" name="cold_water_8_2017" step="0.001"  placeholder="Серпень" class="form-control" required>
			  						<input type="number" name="cold_water_9_2017" step="0.001"  placeholder="Вересень" class="form-control" required>
			  						<input type="number" name="cold_water_10_2017" step="0.001"  placeholder="Жовтень" class="form-control" required>
			  						<input type="number" name="cold_water_11_2017" step="0.001"  placeholder="Листопад" class="form-control" required>
			  						<input type="number" name="cold_water_12_2017" step="0.001"  placeholder="Грудень" class="form-control" required>
			  						<h5 class="text-center">2018</h5>
			  					</div>
			  			    </div>
  			  			</div>
  			  		</div>
  			  		<div class="col-md-1 col-12"></div>
  			  		<div class="col-md col-12">
  			  			<div class="form-row bs brb mt-4">
  			  				<div class="col-12">
  			  					<h3 class="mt-5 mb-4 text-center">Використання теплої води, <b>м<sup>3</sup></b></h3>
  			  				</div>
  			  				<div class="col-lg-4 mb-3">
			  					<div class="form-group d-flex flex-column align-items-center">
			  						<input type="number" name="hot_water_1_2015" step="0.001" placeholder="Cічень" class="form-control" required>
			  						<input type="number" name="hot_water_2_2015" step="0.001" placeholder="Лютий" class="form-control" required>
			  						<input type="number" name="hot_water_3_2015" step="0.001" placeholder="Березень" class="form-control" required>
			  						<input type="number" name="hot_water_4_2015" step="0.001" placeholder="Квітень" class="form-control" required>
			  						<input type="number" name="hot_water_5_2015" step="0.001" placeholder="Травень" class="form-control" required>
			  						<input type="number" name="hot_water_6_2015" step="0.001" placeholder="Червень" class="form-control" required>
			  						<input type="number" name="hot_water_7_2015" step="0.001" placeholder="Липень" class="form-control" required>
			  						<input type="number" name="hot_water_8_2015" step="0.001" placeholder="Серпень" class="form-control" required>
			  						<input type="number" name="hot_water_9_2015" step="0.001" placeholder="Вересень" class="form-control" required>
			  						<input type="number" name="hot_water_10_2015" step="0.001" placeholder="Жовтень" class="form-control" required>
			  						<input type="number" name="hot_water_11_2015" step="0.001" placeholder="Листопад" class="form-control" required>
			  						<input type="number" name="hot_water_12_2015" step="0.001" placeholder="Грудень" class="form-control" required>
			  						<h5 class="text-center">2016</h5>
			  					</div>
			  			    </div>
			  			    <div class="col-lg-4 mb-3">
			  					<div class="form-group d-flex flex-column align-items-center">
			  						<input type="number" name="hot_water_1_2016" step="0.001" placeholder="Cічень" class="form-control" required>
			  						<input type="number" name="hot_water_2_2016" step="0.001" placeholder="Лютий" class="form-control" required>
			  						<input type="number" name="hot_water_3_2016" step="0.001" placeholder="Березень" class="form-control" required>
			  						<input type="number" name="hot_water_4_2016" step="0.001" placeholder="Квітень" class="form-control" required>
			  						<input type="number" name="hot_water_5_2016" step="0.001" placeholder="Травень" class="form-control" required>
			  						<input type="number" name="hot_water_6_2016" step="0.001" placeholder="Червень" class="form-control" required>
			  						<input type="number" name="hot_water_7_2016" step="0.001" placeholder="Липень" class="form-control" required>
			  						<input type="number" name="hot_water_8_2016" step="0.001" placeholder="Серпень" class="form-control" required>
			  						<input type="number" name="hot_water_9_2016" step="0.001" placeholder="Вересень" class="form-control" required>
			  						<input type="number" name="hot_water_10_2016" step="0.001" placeholder="Жовтень" class="form-control" required>
			  						<input type="number" name="hot_water_11_2016" step="0.001" placeholder="Листопад" class="form-control" required>
			  						<input type="number" name="hot_water_12_2016" step="0.001" placeholder="Грудень" class="form-control" required>
			  						<h5 class="text-center">2017</h5>
			  					</div>
			  			    </div>
			  			    <div class="col-lg-4 mb-3">
			  					<div class="form-group d-flex flex-column align-items-center">
			  						<input type="number" name="hot_water_1_2017" step="0.001" placeholder="Cічень" class="form-control" required>
			  						<input type="number" name="hot_water_2_2017" step="0.001" placeholder="Лютий" class="form-control" required>
			  						<input type="number" name="hot_water_3_2017" step="0.001" placeholder="Березень" class="form-control" required>
			  						<input type="number" name="hot_water_4_2017" step="0.001" placeholder="Квітень" class="form-control" required>
			  						<input type="number" name="hot_water_5_2017" step="0.001" placeholder="Травень" class="form-control" required>
			  						<input type="number" name="hot_water_6_2017" step="0.001" placeholder="Червень" class="form-control" required>
			  						<input type="number" name="hot_water_7_2017" step="0.001" placeholder="Липень" class="form-control" required>
			  						<input type="number" name="hot_water_8_2017" step="0.001" placeholder="Серпень" class="form-control" required>
			  						<input type="number" name="hot_water_9_2017" step="0.001" placeholder="Вересень" class="form-control" required>
			  						<input type="number" name="hot_water_10_2017" step="0.001" placeholder="Жовтень" class="form-control" required>
			  						<input type="number" name="hot_water_11_2017" step="0.001" placeholder="Листопад" class="form-control" required>
			  						<input type="number" name="hot_water_12_2017" step="0.001" placeholder="Грудень" class="form-control" required>
			  						<h5 class="text-center">2018</h5>
			  					</div>
			  			    </div>
  			  			</div>
  			  		</div>
  			  	</div>
  			  	<button class="btn" type="submit" name="submit">Розрахувати</button>
  			</form>
  		</div>
<script src="../../template/js/lib/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="/public/scripts/script.js"></script>

  </body>
</html>

