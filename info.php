<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="/public/styles/css/info.css">
    <link rel="stylesheet" href="/public/styles/css/menu.css">
    <title></title>
  </head>
  <body>
    <a class="menu-toggle rounded" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="/last">Останнє обстеження </a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="/list">Всі обстежені об'єкти</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="/add">Нове обстеження</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="/">Головна</a>
        </li>
      </ul>
    </nav>
    <div class="sec ">
  		<h1 class="display-1 text-center m">Результат розрахунку</h1>
  		<div class="container mt-5">
			<div class="row">
				<div class="col-xl-6 col-12">
					<div class="img" style="background-image: url(../../public/images/<?php echo $object[0]['uploaded_img']; ?>)" ></div>
				</div>
				<div class="col-xl-6 col-12 bs bb order-xl-last order-first">
					<div class="title">
						<div class="widget">
							<div class="elementor-title">01</div>
						</div>
						<div class="text-left">
							<h1>Об'єкт аудиту</h1>
							<ul>
								<li>
									<h2><?php echo $object[0]['name']; ?></h2>
								</li>
								<li>Адреса - <b><?php echo $object[0]['address']; ?></b></li>
								<li>Рік заснування - <b><?php echo $object[0]['year']; ?></b></li>
								<li>Кількість людей в установі - <b><?php echo $object[0]['amount_people']; ?></b></li>
								<li>Кількість робочих днів - <b><?php echo $object[0]['working_days']; ?></b></li>
								<li>Дата аудиту - <b><?php echo $object[0]['date']; ?></b></li>
								<li>Розробник аудиту - <b><?php echo $object[0]['auditor_name']; ?></b></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
  	</div>
  	<div class="sec sec-2 bs">
  		<div class="container">
  			<div class="row">
  				<div class="col-xl-4 col-12 bs bb align-items-end">
  					<div class="widget-center text-center">
						<div class="elementor-title">02</div>
					</div>
					<div class="text">
						<h1 >Теплова енергія</h1>
						<ul>
							<li>Опалювальний об'єм - <b><?php echo $object[0]['volume_building']; ?> м<sup>3</sup></b></li>
							<li>Сумарні тепловитрати - <b><?php echo $heat_loss[0]['sum_all_loss']; ?> кВт</b></li>
							<li>Сумарні теплонадходження - <b><?php echo $object[0]['heat_leakage']; ?> кВт</b></li>
							<li>Середне значення<br> питомих тепловитрат - <b><?php echo $object[0]['average_specific_heating_loss']; ?> Гкал/м<sup>3</sup></b></li>
							<li>Нормативне середнє значення<br> питомих тепловитрат - <b>0,031 Гкал/м<sup>3</sup></b></li>
							<li>Теплова потужність будівлі - <b><?php echo $thermal_power_building; ?> кВт</b></li>
							<li>Клас енергетичної ефективності - <b><?php echo $object[0]['class_energy_efficiency']; ?></b></li>
						</ul>
					</div>
  				</div>
  				<div class="col-xl-8 col-12">
  					<div class="box">
  						<div class="ct-chart-1 ct-perfect-fourth"></div>
  					</div>
				  	<script>
							new Chartist.Bar('.ct-chart-1', {
							  labels: [
								<?php foreach($months_array as $value ) { ?>
								  	'<?php echo $value; ?>',
								<?php } ?>
							    ],
							  series: [
							    <?php foreach($heating_table as $key => $val) { ?>
								  	[
								  		<?php echo $val['january'] ?>,
								  		<?php echo $val['february'] ?>,
								  		<?php echo $val['march'] ?>,
								  		<?php echo $val['april'] ?>,
								  		<?php echo $val['may'] ?>,
								  		<?php echo $val['june'] ?>,
								  		<?php echo $val['juli'] ?>,
								  		<?php echo $val['august'] ?>,
								  		<?php echo $val['september'] ?>,
								  		<?php echo $val['october'] ?>,
								  		<?php echo $val['november'] ?>,
								  		<?php echo $val['december'] ?>,
								  	],
								<?php } ?>
							  ]
							}, {
							  seriesBarDistance: 10,
							  axisX: {
							    offset: 60
							  },
							  axisY: {
							    offset: 80,
							    labelInterpolationFnc: function(value) {
							      return value + ''
							    },
							    scaleMinSpace: 15
							  }
							});
				  	</script>
  				</div>
  				<div class="col-12 bs d-flex justify-content-center mt-3 mb-7">
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 red-line"></span> - 2016</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 blue-line"></span> - 2017</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 yellow-line"></span> - 2018</div>
  				</div>
  				<div class="col-12 p-0 mb-7">
  					<h3 class="text-center">Кількість теплової енергії, спожитої будівлею  за 2016 – 2018 роки, <b>Гкал</b></h3>
					<table class="table table-striped table-bordered bs">
					  <thead>
					    <tr>
					      <th scope="col" class="text-center">Рік</th>
							<?php foreach($months_array as $value ) { ?>
							  	<th scope="col"><?php echo $value; ?></th>
							<?php } ?>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php foreach($heating_table as $key => $value) { ?>
					      	 <tr class="text-center">
						      <th scope="row"><?php echo $value['year']; ?></th>
						      <td><?php echo $value['january']; ?></td>
						      <td><?php echo $value['february']; ?></td>
						      <td><?php echo $value['march']; ?></td>
						      <td><?php echo $value['april']; ?></td>
						      <td><?php echo $value['may']; ?></td>
						      <td><?php echo $value['june']; ?></td>
						      <td><?php echo $value['juli']; ?></td>
						      <td><?php echo $value['august']; ?></td>
						      <td><?php echo $value['september']; ?></td>
						      <td><?php echo $value['october']; ?></td>
						      <td><?php echo $value['november']; ?></td>
						      <td><?php echo $value['december']; ?></td>
						    </tr>
						<?php } ?>
					  </tbody>
					</table>
  				</div>
  				<div class="col-12">
  					<h3 class="text-center">Сумарні показники теплової енергії, спожитої будівлею  за 2016 – 2018 роки, <b>Гкал</b></h3>
  				</div>
  				<div class="col-md-5 col-12 mt-5 bs">
  					<div class="box">
  						<div class="ct-chart-11 ct-golden-section ct-negative-labels"></div>
  					</div>
				  	<script>
							new Chartist.Bar('.ct-chart-11', {
							  labels: ['2016', '2017', '2018'],
							  series: [
							    [<?php echo ($value = array_sum($heating[0])); ?>, 0, 0],
							    [0, <?php echo ($value = array_sum($heating[1])); ?>, 0],
							    [0, 0, <?php echo ($value = array_sum($heating[2])); ?>]
							  ]
							}, {
							  stackBars: true,
							  axisY: {
							    labelInterpolationFnc: function(value) {
							      return (value / 1) + '';
							    }
							  }
							}).on('draw', function(data) {
							  if(data.type === 'bar') {
							    data.element.attr({
							      style: 'stroke-width: 50px'
							    });
							  }
							});
				  	</script>
  				</div>
  				<div class="col mt-5 ml-3 bs d-flex align-items-center">
  					<ul >
						<li> Кількість теплової енергії, спожитої будівлею за 2016 рік - <b><?php echo ($value = array_sum($heating[0])); ?> Гкал</b></li>
						<li> Кількість теплової енергії, спожитої будівлею за 2017 рік - <b><?php echo ($value = array_sum($heating[1])); ?> Гкал</b></li>
						<li> Кількість теплової енергії, спожитої будівлею за 2018 рік - <b><?php echo ($value = array_sum($heating[2])); ?> Гкал</b></li>
					</ul>
  				</div>
				<div class="col-12 bs d-flex justify-content-center mt-3 mb-5">
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 red-line"></span> - 2016</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 blue-line"></span> - 2017</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 yellow-line"></span> - 2018</div>
  				</div>
  				<div class="col-12 p-0 mt-5">
  					<h3 class="text-center">Величини тепловтрат по будівлі, <b>кВт</b></h3>
  					<table class="table table-striped table-bordered bs">
					  <thead>
					    <tr class="text-center">
					      <th scope="col">Через стіни</th>
					      <th scope="col">Через вікна</th>
					      <th scope="col">Через підлогу</th>
					      <th scope="col">Через стелю</th>
					      <th scope="col">Через двері</th>
					      <th scope="col">Додаткові втрати</th>
					      <th scope="col">Через вентиляцію</th>
					      <th scope="col">Cумарні тепловтрати</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr class="text-center">
					      <td><?php echo $heat_loss[0]['walls_loss']; ?></td>
					      <td><?php echo $heat_loss[0]['windows_loss']; ?></td>
					      <td><?php echo $heat_loss[0]['floor_loss']; ?></td>
					      <td><?php echo $heat_loss[0]['ceiling_loss']; ?></td>
					      <td><?php echo $heat_loss[0]['doors_loss']; ?></td>
					      <td><?php echo $heat_loss[0]['fencing_structures_loss']; ?></td>
					      <td><?php echo $heat_loss[0]['ventilation_loss']; ?></td>
					      <td><?php echo $heat_loss[0]['sum_all_loss']; ?></td>
					    </tr>
					  </tbody>
					</table>
  				</div>
  				<div class="col-12 mt-5">
  					<h3 class="text-center">Можливі енергозберігаючі заходи</h3>
  				</div>
  				<div class="col-12 mt-5 mb-5 bs p-4 bg-white">
					<ul>
						<li>- систематично проводити навчання та інструктажі з педагогічними працівниками та обслуговуючим  персоналом навчального закладу згідно вимог раціонального економного використання енергоносіїв;</li>
						<li>- заміна вікон та утеплення приміщень;</li>
						<li>- модернізація чи заміна систем опалення в адміністративних будівлях;</li>
						<li>- встановлення приладів обліку теплової енергії;</li>
						<li>- встановлення обладнання, що працює на твердому біопаливі;</li>
					</ul>
  				</div>
  				<div class="col-12 mt-2">
  					<h3 class="text-center">Аналіз обсягів споживання теплової енергії</h3>
  				</div>
  				<div class="col-12 mt-5 bs bb pt-4 p-3 mb-5 bg-white">
  					<p>
						<?php echo ($LastModelObj->GetLastNote(Db::getConnect(),'inference_heating',$id)); ?>
					</p>
  				</div>
  				<div class="col-12 p-0">
					<form action="" method="post">	
					  	<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Текстове поле</span>
							</div>
							<textarea class="form-control" rows="7" aria-label="With textarea" name="inference_heating"></textarea>
						</div>
						<div class="d-flex justify-content-end">
							<button type="submit" name="submit"  class="btn btn-primary">Додати до звіту</button>
						</div>
					</form>
  				</div>
  			</div>
  		</div>
  	</div>
  	<div class="sec bs">
  		<div class="container">
  			<div class="row">
  				<div class="col-xl-8 order-xl-1 col-12">
  					<div class="box">
  						<div class="ct-chart-2 ct-perfect-fourth"></div>
  					</div>
				  	<script>
							new Chartist.Bar('.ct-chart-2', {
							  labels: [
								<?php foreach($months_array as $value ) { ?>
								  	'<?php echo $value; ?>',
								<?php } ?>
							    ],
							  series: [
							    <?php foreach($electricity as $key => $val) { ?>
								  	[
								  		<?php echo $val['january'] ?>,
								  		<?php echo $val['february'] ?>,
								  		<?php echo $val['march'] ?>,
								  		<?php echo $val['april'] ?>,
								  		<?php echo $val['may'] ?>,
								  		<?php echo $val['june'] ?>,
								  		<?php echo $val['juli'] ?>,
								  		<?php echo $val['august'] ?>,
								  		<?php echo $val['september'] ?>,
								  		<?php echo $val['october'] ?>,
								  		<?php echo $val['november'] ?>,
								  		<?php echo $val['december'] ?>,
								  	],
								<?php } ?>
							  ]
							}, {
							  seriesBarDistance: 10,
							  axisX: {
							    offset: 60
							  },
							  axisY: {
							    offset: 80,
							    labelInterpolationFnc: function(value) {
							      return value + ''
							    },
							    scaleMinSpace: 15
							  }
							});
				  	</script>
  				</div>
  				<div class="col-xl-4 col-12 order-xl-2 order-first bs bb align-items-end">
  					<div class="widget-center text-center">
						<div class="elementor-title">03</div>
					</div>
					<div class="text">
						<h1>Електрична енергія</h1>
						<ul>
							<li>Фактичне питоме споживання електричної<br> енергії становить - <b><?php echo $consumption_electric_energy; ?> кВт∙год/1 людину</b></li>
							<li>Нормативний показник споживання електричної<br> енергії становить - <b>380 кВт∙год/1 людину</b></li>
						</ul>
					</div>
  				</div>
  				<div class="col-12 order-3 bs d-flex justify-content-center mt-3 mb-7">
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 red-line"></span> - 2016</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 blue-line"></span> - 2017</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 yellow-line"></span> - 2018</div>
  				</div>
  				<div class="col-12 order-4">
  					<h3 class="text-center">Кількість електричної енергії, спожитої основною будівлею закладу за 2016 – 2018 роки, <b>кВт∙год</b></h3>
  					<table class="table table-striped table-bordered bs">
					  <thead>
					    <tr>
					      <th scope="col" class="text-center">Рік</th>
							<?php foreach($months_array as $value ) { ?>
							  	<th scope="col"><?php echo $value; ?></th>
							<?php } ?>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php foreach($electricity as $key => $value) { ?>
					      	 <tr class="text-center">
						      <th scope="row"><?php echo $value['year']; ?></th>
						      <td><?php echo $value['january']; ?></td>
						      <td><?php echo $value['february']; ?></td>
						      <td><?php echo $value['march']; ?></td>
						      <td><?php echo $value['april']; ?></td>
						      <td><?php echo $value['may']; ?></td>
						      <td><?php echo $value['june']; ?></td>
						      <td><?php echo $value['juli']; ?></td>
						      <td><?php echo $value['august']; ?></td>
						      <td><?php echo $value['september']; ?></td>
						      <td><?php echo $value['october']; ?></td>
						      <td><?php echo $value['november']; ?></td>
						      <td><?php echo $value['december']; ?></td>
						    </tr>
						<?php } ?>
					  </tbody>
					</table>
  				</div>
  				<div class="col-12 order-5 mt-7">
  					<h3 class="text-center">Сумарні показники електричної енергії, спожитої будівлею  за 2016 – 2018 роки, <b>кВт∙год</b></h3>
  				</div>
  				<div class="col-md-5 order-6 col-12 mt-5 bs">
  					<div class="box">
  						<div class="ct-chart-12 ct-golden-section ct-negative-labels"></div>
  					</div>
				  	<script>
							new Chartist.Bar('.ct-chart-12', {
							  labels: ['2016', '2017', '2018'],
							  series: [
							    [<?php echo ($value = array_sum($electricity_tb[0])); ?>, 0, 0],
							    [0, <?php echo ($value = array_sum($electricity_tb[1])); ?>, 0],
							    [0, 0, <?php echo ($value = array_sum($electricity_tb[2])); ?>]
							  ]
							}, {
							  stackBars: true,
							  axisY: {
							    labelInterpolationFnc: function(value) {
							      return (value / 1) + '';
							    }
							  }
							}).on('draw', function(data) {
							  if(data.type === 'bar') {
							    data.element.attr({
							      style: 'stroke-width: 50px'
							    });
							  }
							});
				  	</script>
  				</div>
  				<div class="col mt-5 order-7 ml-3 bs d-flex align-items-center">
  					<ul >
						<li> Кількість електричної енергії, спожитої будівлею за 2016 рік - <b><?php echo ($value = array_sum($electricity_tb[0])); ?> кВт∙год</b></li>
						<li> Кількість електричної енергії, спожитої будівлею за 2017 рік - <b><?php echo ($value = array_sum($electricity_tb[1])); ?> кВт∙год</b></li>
						<li> Кількість електричної енергії, спожитої будівлею за 2018 рік - <b><?php echo ($value = array_sum($electricity_tb[2])); ?> кВт∙год</b></li>
					</ul>
  				</div>
  				<div class="col-12 order-8 bs d-flex justify-content-center mt-3 mb-5">
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 red-line"></span> - 2016</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 blue-line"></span> - 2017</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 yellow-line"></span> - 2018</div>
  				</div>
  				<div class="col-12 order-9 mt-5">
  					<h3 class="text-center">Можливі енергозберігаючі заходи</h3>
  				</div>
  				<div class="col-12 order-10 mt-5 mb-5 bs p-3 bg-gr">
					<ul>
						<li>- здійснювати періодичний контроль за дотриманням використання електроенергії та відповідність до затверджених лімітів;</li>
						<li>- систематично проводити навчання та інструктажі з педагогічними працівниками та обслуговуючим  персоналом навчального закладу згідно вимог раціонального економного використання енергоносіїв;</li>
						<li>- впровадження енергозберігаючих ламп освітлення;</li>
						<li>- встановлення двотарифних лічильників  електроенергії;</li>
						<li>- не слід залишати увімкненим освітлення у кімнатах, якщо в цьому немає потреби, оскільки близько 30% загального обсягу споживання електроенергії припадає саме на освітлювальні прилади;</li>
						<li>- доцільно обмежувати час користування кондиціонерами, а здійснювати провітрювання та вентиляцію приміщень;</li>
						<li>- регулювання напруги за допомогою реле непріорітетних навантажень;</li>
					</ul>
  				</div>
  				<div class="col-12 order-11 mt-2">
  					<h3 class="text-center">Аналіз обсягів споживання електричної енергії</h3>
  				</div>
  				<div class="col-12 order-12 mt-5 bs bb pt-4 p-3 mb-5 bg-gr">
  					<p>
						<?php echo ($LastModelObj->GetLastNote(Db::getConnect(),'inference_electricity',$id)); ?>
					</p>
  				</div>
  				<div class="col-12 order-13 p-0">
					<form action="" method="post">	
					  	<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Текстове поле</span>
							</div>
							<textarea class="form-control bg-gr" rows="7" aria-label="With textarea" name="inference_electricity"></textarea>
						</div>
						<div class="d-flex justify-content-end">
							<button type="submit" name="submit"  class="btn btn-primary">Додати до звіту</button>
						</div>
					</form>
  				</div>
  			</div>
  		</div>
  	</div>
  	<div class="sec sec-2 bs">
  		<div class="container">
  			<div class="row">
  				<div class="col-xl-4 col-12 bs bb align-items-end">
  					<div class="widget-center text-center">
						<div class="elementor-title">04</div>
					</div>
					<div class="text">
						<h1>Холодна вода</h1>
						<ul>
							<li>Фактична питома<br> витрата холодної води - <b><?php echo $consumption_cold_woter; ?> м<sup>3</sup>/1 людину</b></li>
							<li>Нормативний показник<br> витрата холодної води - <b>80 м<sup>3</sup>/1 людину</b></li>
						</ul>
					</div>
  				</div>
  				<div class="col-xl-8 col-12">
  					<div class="box">
  						<div class="ct-chart-3 ct-perfect-fourth"></div>
  					</div>
				  	<script>
							new Chartist.Bar('.ct-chart-3', {
							  labels: [
								<?php foreach($months_array as $value ) { ?>
								  	'<?php echo $value; ?>',
								<?php } ?>
							    ],
							  series: [
							    <?php foreach($cold_woter as $key => $val) { ?>
								  	[
								  		<?php echo $val['january'] ?>,
								  		<?php echo $val['february'] ?>,
								  		<?php echo $val['march'] ?>,
								  		<?php echo $val['april'] ?>,
								  		<?php echo $val['may'] ?>,
								  		<?php echo $val['june'] ?>,
								  		<?php echo $val['juli'] ?>,
								  		<?php echo $val['august'] ?>,
								  		<?php echo $val['september'] ?>,
								  		<?php echo $val['october'] ?>,
								  		<?php echo $val['november'] ?>,
								  		<?php echo $val['december'] ?>,
								  	],
								<?php } ?>
							  ]
							}, {
							  seriesBarDistance: 10,
							  axisX: {
							    offset: 60
							  },
							  axisY: {
							    offset: 80,
							    labelInterpolationFnc: function(value) {
							      return value + ''
							    },
							    scaleMinSpace: 15
							  }
							});
				  	</script>
  				</div>
  				<div class="col-12 bs d-flex justify-content-center mt-3 mb-5">
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 red-line"></span> - 2016</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 blue-line"></span> - 2017</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 yellow-line"></span> - 2018</div>
  				</div>
  				<div class="col-12 mt-7">
  					<h3 class="text-center">Обсяги споживання холодної води будівлею  за 2016 – 2018 роки, <b>м<sup>3</b></h3>
  				</div>
  				<div class="col-12">
  					<table class="table table-striped table-bordered bs">
					  <thead>
					    <tr>
					      <th scope="col" class="text-center">Рік</th>
							<?php foreach($months_array as $value ) { ?>
							  	<th scope="col"><?php echo $value; ?></th>
							<?php } ?>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php foreach($cold_woter as $key => $value) { ?>
					      	 <tr class="text-center">
						      <th scope="row"><?php echo $value['year']; ?></th>
						      <td><?php echo $value['january']; ?></td>
						      <td><?php echo $value['february']; ?></td>
						      <td><?php echo $value['march']; ?></td>
						      <td><?php echo $value['april']; ?></td>
						      <td><?php echo $value['may']; ?></td>
						      <td><?php echo $value['june']; ?></td>
						      <td><?php echo $value['juli']; ?></td>
						      <td><?php echo $value['august']; ?></td>
						      <td><?php echo $value['september']; ?></td>
						      <td><?php echo $value['october']; ?></td>
						      <td><?php echo $value['november']; ?></td>
						      <td><?php echo $value['december']; ?></td>
						    </tr>
						<?php } ?>
					  </tbody>
					</table>
  				</div>
  				<div class="col-12 mt-7">
  					<h3 class="text-center">Сумарна кількість використання холодної води будівлею  за 2016 – 2018 роки, <b>м<sup>3</b></h3>
  				</div>
  				<div class="col-md-5 col-12 mt-5 bs">
  					<div class="box">
  						<div class="ct-chart-13 ct-golden-section ct-negative-labels"></div>
  					</div>
				  	<script>
							new Chartist.Bar('.ct-chart-13', {
							  labels: ['2016', '2017', '2018'],
							  series: [
							    [<?php echo ($value = array_sum($cold_woter_tb[0])); ?>, 0, 0],
							    [0, <?php echo ($value = array_sum($cold_woter_tb[1])); ?>, 0],
							    [0, 0, <?php echo ($value = array_sum($cold_woter_tb[2])); ?>]
							  ]
							}, {
							  stackBars: true,
							  axisY: {
							    labelInterpolationFnc: function(value) {
							      return (value / 1) + '';
							    }
							  }
							}).on('draw', function(data) {
							  if(data.type === 'bar') {
							    data.element.attr({
							      style: 'stroke-width: 50px'
							    });
							  }
							});
				  	</script>
  				</div>
  				<div class="col mt-5 ml-3 bs d-flex align-items-center">
  					<ul >
						<li> Cпоживання холодної води за 2016 рік - <b><?php echo ($value = array_sum($cold_woter_tb[0])); ?> м<sup>3</b></li>
						<li> Cпоживання холодної води за 2017 рік - <b><?php echo ($value = array_sum($cold_woter_tb[1])); ?> м<sup>3</b></li>
						<li> Cпоживання холодної води за 2018 рік - <b><?php echo ($value = array_sum($cold_woter_tb[2])); ?> м<sup>3</b></li>
					</ul>
  				</div>
  				<div class="col-12 bs d-flex justify-content-center mt-3 mb-5">
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 red-line"></span> - 2016</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 blue-line"></span> - 2017</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 yellow-line"></span> - 2018</div>
  				</div>
  				<div class="col-12 mt-5">
  					<h3 class="text-center">Можливі енергозберігаючі заходи</h3>
  				</div>
  				<div class="col-12 mt-5 mb-5 bs p-3 bg-white">
					<ul>
						<li>- систематично проводити навчання та інструктажі з педагогічними працівниками та обслуговуючим  персоналом навчального закладу згідно вимог раціонального економного використання енергоносіїв;</li>
						<li>- встановлення приладів обліку холодної води;</li>
						<li>- обладнання кранів і душових сіток водозберігаючими насадками (аераторами);</li>
						<li>- усунення протікання води в кранах і водонапов- нювальних бачках;</li>
					</ul>
  				</div>
  				<div class="col-12 mt-2">
  					<h3 class="text-center">Аналіз обсягів використання холодної води</h3>
  				</div>
  				<div class="col-12 mt-5 bs bb pt-4 p-3 mb-5 bg-white">
  					<p>
						<?php echo ($LastModelObj->GetLastNote(Db::getConnect(),'inference_cold_woter',$id)); ?>
					</p>
  				</div>
  				<div class="col-12 p-0">
					<form action="" method="post">	
					  	<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Текстове поле</span>
							</div>
							<textarea class="form-control" rows="7" aria-label="With textarea" name="inference_cold_woter"></textarea>
						</div>
						<div class="d-flex justify-content-end">
							<button type="submit" name="submit"  class="btn btn-primary">Додати до звіту</button>
						</div>
					</form>
  				</div>
  			</div>
  		</div>
  	</div>
  	<div class="sec bs">
  		<div class="container">
  			<div class="row">
  				<div class="col-xl-8 order-1 col-12 ">
  					<div class="box">
  						<div class="ct-chart-14 ct-perfect-fourth"></div>
  					</div>
				  		<script>
							new Chartist.Bar('.ct-chart-14', {
							  labels: [
								<?php foreach($months_array as $value ) { ?>
								  	'<?php echo $value; ?>',
								<?php } ?>
							    ],
							  series: [
							    <?php foreach($hot_water as $key => $val) { ?>
								  	[
								  		<?php echo $val['january'] ?>,
								  		<?php echo $val['february'] ?>,
								  		<?php echo $val['march'] ?>,
								  		<?php echo $val['april'] ?>,
								  		<?php echo $val['may'] ?>,
								  		<?php echo $val['june'] ?>,
								  		<?php echo $val['juli'] ?>,
								  		<?php echo $val['august'] ?>,
								  		<?php echo $val['september'] ?>,
								  		<?php echo $val['october'] ?>,
								  		<?php echo $val['november'] ?>,
								  		<?php echo $val['december'] ?>,
								  	],
								<?php } ?>
							  ]
							}, {
							  seriesBarDistance: 10,
							  axisX: {
							    offset: 60
							  },
							  axisY: {
							    offset: 80,
							    labelInterpolationFnc: function(value) {
							      return value + ''
							    },
							    scaleMinSpace: 15
							  }
							});
				  		</script>
  				</div>
  				<div class="col-xl-4 col-12 order-2 order-first bs bb align-items-end">
  					<div class="widget-center text-center">
						<div class="elementor-title">05</div>
					</div>
					<div class="text">
						<h1>Гаряча вода</h1>
						<ul>
							<li>Фактична питома<br> витрата гарячої води - <b><?php echo $consumption_hot_water; ?> м<sup>3</sup>/1 людину</b></li>
							<li>Нормативний показник<br> витрата гарячої води - <b>30 м<sup>3</sup>/1 людину</b></li>
						</ul>
					</div>
  				</div>
  				<div class="col-12 order-3 bs d-flex justify-content-center mt-3 mb-5">
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 red-line"></span> - 2016</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 blue-line"></span> - 2017</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 yellow-line"></span> - 2018</div>
  				</div>
  				<div class="col-12 order-4 mt-7">
  					<h3 class="text-center">Обсяги споживання гарячої води будівлею  за 2016 – 2018 роки, <b>м<sup>3</b></h3>
  				</div>
  				<div class="col-12 order-5">
  					<table class="table table-striped table-bordered bs">
					  <thead>
					    <tr>
					      <th scope="col" class="text-center">Рік</th>
							<?php foreach($months_array as $value ) { ?>
							  	<th scope="col"><?php echo $value; ?></th>
							<?php } ?>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php foreach($hot_water as $key => $value) { ?>
					      	 <tr class="text-center">
						      <th scope="row"><?php echo $value['year']; ?></th>
						      <td><?php echo $value['january']; ?></td>
						      <td><?php echo $value['february']; ?></td>
						      <td><?php echo $value['march']; ?></td>
						      <td><?php echo $value['april']; ?></td>
						      <td><?php echo $value['may']; ?></td>
						      <td><?php echo $value['june']; ?></td>
						      <td><?php echo $value['juli']; ?></td>
						      <td><?php echo $value['august']; ?></td>
						      <td><?php echo $value['september']; ?></td>
						      <td><?php echo $value['october']; ?></td>
						      <td><?php echo $value['november']; ?></td>
						      <td><?php echo $value['december']; ?></td>
						    </tr>
						<?php } ?>
					  </tbody>
					</table>
  				</div>
  				<div class="col-12 order-6 mt-7">
  					<h3 class="text-center">Сумарна кількість використання гарячої води будівлею  за 2016 – 2018 роки, <b>м<sup>3</b></h3>
  				</div>
  				<div class="col-md-5 order-7 col-12 mt-5 bs">
  					<div class="box">
  						<div class="ct-chart ct-golden-section ct-negative-labels"></div>
  					</div>
				  	<script>
							new Chartist.Bar('.ct-chart', {
							  labels: ['2016', '2017', '2018'],
							  series: [
							    [<?php echo ($value = array_sum($cold_woter_tb[0])); ?>, 0, 0],
							    [0, <?php echo ($value = array_sum($cold_woter_tb[1])); ?>, 0],
							    [0, 0, <?php echo ($value = array_sum($cold_woter_tb[2])); ?>]
							  ]
							}, {
							  stackBars: true,
							  axisY: {
							    labelInterpolationFnc: function(value) {
							      return (value / 1) + '';
							    }
							  }
							}).on('draw', function(data) {
							  if(data.type === 'bar') {
							    data.element.attr({
							      style: 'stroke-width: 50px'
							    });
							  }
							});
				  	</script>
  				</div>
  				<div class="col order-8 mt-5 ml-3 bs d-flex align-items-center">
  					<ul >
						<li> Cпоживання гарячої води за 2016 рік - <b><?php echo ($value = array_sum($hot_water_tb[0])); ?> м<sup>3</b></li>
						<li> Cпоживання гарячої води за 2017 рік - <b><?php echo ($value = array_sum($hot_water_tb[1])); ?> м<sup>3</b></li>
						<li> Cпоживання гарячої води за 2018 рік - <b><?php echo ($value = array_sum($hot_water_tb[2])); ?> м<sup>3</b></li>
					</ul>
  				</div>
  				<div class="col-12 order-9 bs d-flex justify-content-center mt-3 mb-5">
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 red-line"></span> - 2015</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 blue-line"></span> - 2016</div>
  					<div class="h5 d-flex align-items-center m-3"><span class="color-line mr-1 yellow-line"></span> - 2017</div>
  				</div>
  				<div class="col-12 order-10 mt-5">
  					<h3 class="text-center">Можливі енергозберігаючі заходи</h3>
  				</div>
  				<div class="col-12 order-11 mt-5 mb-5 bs p-3 bg-gr">
					<ul>
						<li>- систематично проводити навчання та інструктажі з педагогічними працівниками та обслуговуючим  персоналом навчального закладу згідно вимог раціонального економного використання енергоносіїв;</li>
						<li>- встановлення приладів обліку гарячої води;</li>
						<li>- обладнання кранів і душових сіток водозберігаючими насадками (аераторами);</li>
						<li>- усунення протікання води в кранах і водонапов- нювальних бачках;</li>
					</ul>
  				</div>
  				<div class="col-12 order-12 mt-2">
  					<h3 class="text-center">Аналіз обсягів використання гарячої води</h3>
  				</div>
  				<div class="col-12 order-13 mt-5 bs bb pt-4 p-3 mb-5 bg-gr">
  					<p>
						<?php echo ($LastModelObj->GetLastNote(Db::getConnect(),'inference_hot_woter',$id)); ?>
					</p>
  				</div>
  				<div class="col-12 order-14 p-0">
					<form action="" method="post">	
					  	<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Текстове поле</span>
							</div>
							<textarea class="form-control bg-gr" rows="7" aria-label="With textarea" name="inference_hot_woter"></textarea>
						</div>
						<div class="d-flex justify-content-end">
							<button type="submit" name="submit"  class="btn btn-primary">Додати до звіту</button>
						</div>
					</form>
  				</div>
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