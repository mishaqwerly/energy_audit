<?php  



class AddModel 
{
	private function AddImg()
	{
		$img_name = $_FILES['image']['name'];

		if (!empty($img_name)) {
			$tmp_name = $_FILES['image']['tmp_name'];
			move_uploaded_file($tmp_name, "public/images/".$img_name);
			return $img_name; 
		} else {
			$img_name = 'default_img.jpg';
			return $img_name;
		}	
	}

	private function GetMaxIDObject($value)
	{
		$last_id = $value->prepare("SELECT MAX(id) FROM object");
		$last_id->execute();
		$last_id = $last_id->fetchAll(PDO::FETCH_COLUMN, 0);
		$last_id = $last_id[0];
		return $last_id;
	}

	public function run()
	{	
		$db = Db::getConnect();

		if($_SERVER['REQUEST_METHOD'] == 'POST') {

			// heating 2015
			$heating_1_2015 = $_POST['heating_1_2015'];
			$heating_2_2015 = $_POST['heating_2_2015'];
			$heating_3_2015 = $_POST['heating_3_2015'];
			$heating_4_2015 = $_POST['heating_4_2015'];
			$heating_5_2015 = $_POST['heating_5_2015'];
			$heating_6_2015 = $_POST['heating_6_2015'];
			$heating_7_2015 = $_POST['heating_7_2015'];
			$heating_8_2015 = $_POST['heating_8_2015'];
			$heating_9_2015 = $_POST['heating_9_2015'];
			$heating_10_2015 = $_POST['heating_10_2015'];
			$heating_11_2015 = $_POST['heating_11_2015'];
			$heating_12_2015 = $_POST['heating_12_2015'];
			// heating 2016
			$heating_1_2016 = $_POST['heating_1_2016'];
			$heating_2_2016 = $_POST['heating_2_2016'];
			$heating_3_2016 = $_POST['heating_3_2016'];
			$heating_4_2016 = $_POST['heating_4_2016'];
			$heating_5_2016 = $_POST['heating_5_2016'];
			$heating_6_2016 = $_POST['heating_6_2016'];
			$heating_7_2016 = $_POST['heating_7_2016'];
			$heating_8_2016 = $_POST['heating_8_2016'];
			$heating_9_2016 = $_POST['heating_9_2016'];
			$heating_10_2016 = $_POST['heating_10_2016'];
			$heating_11_2016 = $_POST['heating_11_2016'];
			$heating_12_2016 = $_POST['heating_12_2016'];
			// heating 2016
			$heating_1_2017 = $_POST['heating_1_2017'];
			$heating_2_2017 = $_POST['heating_2_2017'];
			$heating_3_2017 = $_POST['heating_3_2017'];
			$heating_4_2017 = $_POST['heating_4_2017'];
			$heating_5_2017 = $_POST['heating_5_2017'];
			$heating_6_2017 = $_POST['heating_6_2017'];
			$heating_7_2017 = $_POST['heating_7_2017'];
			$heating_8_2017 = $_POST['heating_8_2017'];
			$heating_9_2017 = $_POST['heating_9_2017'];
			$heating_10_2017 = $_POST['heating_10_2017'];
			$heating_11_2017 = $_POST['heating_11_2017'];
			$heating_12_2017 = $_POST['heating_12_2017'];

			$name = $_POST['name'];
			$address = $_POST['address'];
			$foundation_year = $_POST['foundation_year'];
			$amount_people = $_POST['amount_people'];
			$working_days = $_POST['working_days'];
			$heating_days = $_POST['heating_days'];
			$volume_building = $_POST['volume_building'];
			$heat_leakage = $_POST['heat_leakage'];
			$auditor_name = $_POST['auditor_name'];

			$average_specific_heating_loss = round(($heating_10_2016 + $heating_11_2016 + $heating_12_2016 + $heating_1_2017 + $heating_2_2017 + $heating_3_2017 + $heating_4_2017)/$volume_building, 3);

			$class_energy_efficiency = round((($average_specific_heating_loss - 0.031)/0.031)*100, 0);

			if ($class_energy_efficiency <= -50) {
				$class_energy_efficiency = "A";
			} elseif ($class_energy_efficiency >= -49 && $class_energy_efficiency <= -10) {
				$class_energy_efficiency = "B";
			} elseif ($class_energy_efficiency >= -9 && $class_energy_efficiency <= 0) {
				$class_energy_efficiency = "C";
			} elseif ($class_energy_efficiency >= 1 && $class_energy_efficiency <= 25) {
				$class_energy_efficiency = "D";
			} elseif ($class_energy_efficiency >= 26 && $class_energy_efficiency <= 50) {
				$class_energy_efficiency = "E";
			} elseif ($class_energy_efficiency >= 51 && $class_energy_efficiency <= 75) {
				$class_energy_efficiency = "F";
			} elseif ($class_energy_efficiency >= 76 ) {
				$class_energy_efficiency = "G";
			} 

			$uploaded_img = $this->AddImg();

			$new_audit_object = $db->prepare("INSERT INTO object (`id`, `date`, `name`, `address`, `year`, `amount_people`, `working_days`, `heating_days`, `volume_building`, `heat_leakage`, `auditor_name` , `uploaded_img`, `average_specific_heating_loss`, `class_energy_efficiency`) VALUES (NULL, CURRENT_TIMESTAMP, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$array_audit_object = array($name, $address, $foundation_year, $amount_people, $working_days, $heating_days, $volume_building, $heat_leakage, $auditor_name, $uploaded_img, $average_specific_heating_loss, $class_energy_efficiency);
			$new_audit_object->execute($array_audit_object);

			$last_id = $this->GetMaxIDObject($db);

			$walls_loss = $_POST['walls_loss'];
			$windows_loss = $_POST['windows_loss'];
			$floor_loss = $_POST['floor_loss'];
			$ceiling_loss = $_POST['ceiling_loss'];
			$doors_loss = $_POST['doors_loss'];
			$fencing_structures_loss = $_POST['fencing_structures_loss'];
			$ventilation_loss = $_POST['ventilation_loss'];
			$sum_all_loss = $walls_loss + $windows_loss + $floor_loss + $ceiling_loss + $doors_loss + $fencing_structures_loss + $ventilation_loss;

			$new_heat_loss = $db->prepare("INSERT INTO `heat_loss` (`id`, `id_object`, `walls_loss`, `windows_loss`, `floor_loss`, `ceiling_loss`, `doors_loss`, `fencing_structures_loss`, `ventilation_loss`, `sum_all_loss`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
			$array_heat_loss = array($last_id, $walls_loss, $windows_loss, $floor_loss, $ceiling_loss, $doors_loss, $fencing_structures_loss, $ventilation_loss, $sum_all_loss);
			$new_heat_loss->execute($array_heat_loss);

			$year_2015 = 2015;
			$year_2016 = 2016;
			$year_2017 = 2017;

			// electricity 2015
			$electricity_1_2015 = $_POST['electricity_1_2015'];
			$electricity_2_2015 = $_POST['electricity_2_2015'];
			$electricity_3_2015 = $_POST['electricity_3_2015'];
			$electricity_4_2015 = $_POST['electricity_4_2015'];
			$electricity_5_2015 = $_POST['electricity_5_2015'];
			$electricity_6_2015 = $_POST['electricity_6_2015'];
			$electricity_7_2015 = $_POST['electricity_7_2015'];
			$electricity_8_2015 = $_POST['electricity_8_2015'];
			$electricity_9_2015 = $_POST['electricity_9_2015'];
			$electricity_10_2015 = $_POST['electricity_10_2015'];
			$electricity_11_2015 = $_POST['electricity_11_2015'];
			$electricity_12_2015 = $_POST['electricity_12_2015'];
			// electricity 2016
			$electricity_1_2016 = $_POST['electricity_1_2016'];
			$electricity_2_2016 = $_POST['electricity_2_2016'];
			$electricity_3_2016 = $_POST['electricity_3_2016'];
			$electricity_4_2016 = $_POST['electricity_4_2016'];
			$electricity_5_2016 = $_POST['electricity_5_2016'];
			$electricity_6_2016 = $_POST['electricity_6_2016'];
			$electricity_7_2016 = $_POST['electricity_7_2016'];
			$electricity_8_2016 = $_POST['electricity_8_2016'];
			$electricity_9_2016 = $_POST['electricity_9_2016'];
			$electricity_10_2016 = $_POST['electricity_10_2016'];
			$electricity_11_2016 = $_POST['electricity_11_2016'];
			$electricity_12_2016 = $_POST['electricity_12_2016'];
			// electricity 2017
			$electricity_1_2017 = $_POST['electricity_1_2017'];
			$electricity_2_2017 = $_POST['electricity_2_2017'];
			$electricity_3_2017 = $_POST['electricity_3_2017'];
			$electricity_4_2017 = $_POST['electricity_4_2017'];
			$electricity_5_2017 = $_POST['electricity_5_2017'];
			$electricity_6_2017 = $_POST['electricity_6_2017'];
			$electricity_7_2017 = $_POST['electricity_7_2017'];
			$electricity_8_2017 = $_POST['electricity_8_2017'];
			$electricity_9_2017 = $_POST['electricity_9_2017'];
			$electricity_10_2017 = $_POST['electricity_10_2017'];
			$electricity_11_2017 = $_POST['electricity_11_2017'];
			$electricity_12_2017 = $_POST['electricity_12_2017'];

			$new_electricity = $db->prepare("INSERT INTO `electricity` (`id`, `id_object`, `year`, `january`, `february`, `march`, `april`, `may`, `june`, `juli`, `august`, `september`, `october`, `november`, `december`) VALUES (NULL,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?),(NULL,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?),(NULL,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

			$array_electricity = array( $last_id, $year_2015, $electricity_1_2015, $electricity_2_2015, $electricity_3_2015, $electricity_4_2015, $electricity_5_2015, $electricity_6_2015, $electricity_7_2015, $electricity_8_2015, $electricity_9_2015, $electricity_10_2015, $electricity_11_2015, $electricity_12_2015, $last_id, $year_2016, $electricity_1_2016, $electricity_2_2016, $electricity_3_2016, $electricity_4_2016, $electricity_5_2016, $electricity_6_2016, $electricity_7_2016, $electricity_8_2016, $electricity_9_2016, $electricity_10_2016, $electricity_11_2016, $electricity_12_2016, $last_id, $year_2017, $electricity_1_2017, $electricity_2_2017, $electricity_3_2017, $electricity_4_2017, $electricity_5_2017, $electricity_6_2017, $electricity_7_2017, $electricity_8_2017, $electricity_9_2017, $electricity_10_2017, $electricity_11_2017, $electricity_12_2017);

			$new_electricity->execute($array_electricity);

			$new_heating = $db->prepare("INSERT INTO `heating` (`id`, `id_object`, `year`, `january`, `february`, `march`, `april`, `may`, `june`, `juli`, `august`, `september`, `october`, `november`, `december`) VALUES (NULL,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?),(NULL,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?),(NULL,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

			$array_heating = array( $last_id, $year_2015, $heating_1_2015, $heating_2_2015, $heating_3_2015, $heating_4_2015, $heating_5_2015, $heating_6_2015, $heating_7_2015, $heating_8_2015, $heating_9_2015, $heating_10_2015, $heating_11_2015, $heating_12_2015, $last_id, $year_2016, $heating_1_2016, $heating_2_2016, $heating_3_2016, $heating_4_2016, $heating_5_2016, $heating_6_2016, $heating_7_2016, $heating_8_2016, $heating_9_2016, $heating_10_2016, $heating_11_2016, $heating_12_2016, $last_id, $year_2017, $heating_1_2017, $heating_2_2017, $heating_3_2017, $heating_4_2017, $heating_5_2017, $heating_6_2017, $heating_7_2017, $heating_8_2017, $heating_9_2017, $heating_10_2017, $heating_11_2017, $heating_12_2017);

			$new_heating->execute($array_heating);

			// cold_water 2015
			$cold_water_1_2015 = $_POST['cold_water_1_2015'];
			$cold_water_2_2015 = $_POST['cold_water_2_2015'];
			$cold_water_3_2015 = $_POST['cold_water_3_2015'];
			$cold_water_4_2015 = $_POST['cold_water_4_2015'];
			$cold_water_5_2015 = $_POST['cold_water_5_2015'];
			$cold_water_6_2015 = $_POST['cold_water_6_2015'];
			$cold_water_7_2015 = $_POST['cold_water_7_2015'];
			$cold_water_8_2015 = $_POST['cold_water_8_2015'];
			$cold_water_9_2015 = $_POST['cold_water_9_2015'];
			$cold_water_10_2015 = $_POST['cold_water_10_2015'];
			$cold_water_11_2015 = $_POST['cold_water_11_2015'];
			$cold_water_12_2015 = $_POST['cold_water_12_2015'];
			// cold_water 2016
			$cold_water_1_2016 = $_POST['cold_water_1_2016'];
			$cold_water_2_2016 = $_POST['cold_water_2_2016'];
			$cold_water_3_2016 = $_POST['cold_water_3_2016'];
			$cold_water_4_2016 = $_POST['cold_water_4_2016'];
			$cold_water_5_2016 = $_POST['cold_water_5_2016'];
			$cold_water_6_2016 = $_POST['cold_water_6_2016'];
			$cold_water_7_2016 = $_POST['cold_water_7_2016'];
			$cold_water_8_2016 = $_POST['cold_water_8_2016'];
			$cold_water_9_2016 = $_POST['cold_water_9_2016'];
			$cold_water_10_2016 = $_POST['cold_water_10_2016'];
			$cold_water_11_2016 = $_POST['cold_water_11_2016'];
			$cold_water_12_2016 = $_POST['cold_water_12_2016'];
			// cold_water 2017
			$cold_water_1_2017 = $_POST['cold_water_1_2017'];
			$cold_water_2_2017 = $_POST['cold_water_2_2017'];
			$cold_water_3_2017 = $_POST['cold_water_3_2017'];
			$cold_water_4_2017 = $_POST['cold_water_4_2017'];
			$cold_water_5_2017 = $_POST['cold_water_5_2017'];
			$cold_water_6_2017 = $_POST['cold_water_6_2017'];
			$cold_water_7_2017 = $_POST['cold_water_7_2017'];
			$cold_water_8_2017 = $_POST['cold_water_8_2017'];
			$cold_water_9_2017 = $_POST['cold_water_9_2017'];
			$cold_water_10_2017= $_POST['cold_water_10_2017'];
			$cold_water_11_2017= $_POST['cold_water_11_2017'];
			$cold_water_12_2017= $_POST['cold_water_12_2017'];

			$new_cold_water = $db->prepare("INSERT INTO `cold_woter` (`id`, `id_object`, `year`, `january`, `february`, `march`, `april`, `may`, `june`, `juli`, `august`, `september`, `october`, `november`, `december`) VALUES (NULL,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?),(NULL,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?),(NULL,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

			$array_cold_water = array( $last_id, $year_2015, $cold_water_1_2015, $cold_water_2_2015, $cold_water_3_2015, $cold_water_4_2015, $cold_water_5_2015, $cold_water_6_2015, $cold_water_7_2015, $cold_water_8_2015, $cold_water_9_2015, $cold_water_10_2015, $cold_water_11_2015, $cold_water_12_2015, $last_id, $year_2016, $cold_water_1_2016, $cold_water_2_2016, $cold_water_3_2016, $cold_water_4_2016, $cold_water_5_2016, $cold_water_6_2016, $cold_water_7_2016, $cold_water_8_2016, $cold_water_9_2016, $cold_water_10_2016, $cold_water_11_2016, $cold_water_12_2016, $last_id, $year_2017, $cold_water_1_2017, $cold_water_2_2017, $cold_water_3_2017, $cold_water_4_2017, $cold_water_5_2017, $cold_water_6_2017, $cold_water_7_2017, $cold_water_8_2017, $cold_water_9_2017, $cold_water_10_2017, $cold_water_11_2017, $cold_water_12_2017);

			$new_cold_water->execute($array_cold_water);

			//hot_water 2015
			$hot_water_1_2015  = $_POST['hot_water_1_2015'];
			$hot_water_2_2015  = $_POST['hot_water_2_2015'];
			$hot_water_3_2015  = $_POST['hot_water_3_2015'];
			$hot_water_4_2015  = $_POST['hot_water_4_2015'];
			$hot_water_5_2015  = $_POST['hot_water_5_2015'];
			$hot_water_6_2015  = $_POST['hot_water_6_2015'];
			$hot_water_7_2015  = $_POST['hot_water_7_2015'];
			$hot_water_8_2015  = $_POST['hot_water_8_2015'];
			$hot_water_9_2015  = $_POST['hot_water_9_2015'];
			$hot_water_10_2015  = $_POST['hot_water_10_2015'];
			$hot_water_11_2015  = $_POST['hot_water_11_2015'];
			$hot_water_12_2015  = $_POST['hot_water_12_2015'];
			//hot_water 2016
			$hot_water_1_2016  = $_POST['hot_water_1_2016'];
			$hot_water_2_2016  = $_POST['hot_water_2_2016'];
			$hot_water_3_2016  = $_POST['hot_water_3_2016'];
			$hot_water_4_2016  = $_POST['hot_water_4_2016'];
			$hot_water_5_2016  = $_POST['hot_water_5_2016'];
			$hot_water_6_2016  = $_POST['hot_water_6_2016'];
			$hot_water_7_2016  = $_POST['hot_water_7_2016'];
			$hot_water_8_2016  = $_POST['hot_water_8_2016'];
			$hot_water_9_2016  = $_POST['hot_water_9_2016'];
			$hot_water_10_2016  = $_POST['hot_water_10_2016'];
			$hot_water_11_2016  = $_POST['hot_water_11_2016'];
			$hot_water_12_2016  = $_POST['hot_water_12_2016'];
			//hot_water 2017
			$hot_water_1_2017  = $_POST['hot_water_1_2017'];
			$hot_water_2_2017  = $_POST['hot_water_2_2017'];
			$hot_water_3_2017  = $_POST['hot_water_3_2017'];
			$hot_water_4_2017  = $_POST['hot_water_4_2017'];
			$hot_water_5_2017  = $_POST['hot_water_5_2017'];
			$hot_water_6_2017  = $_POST['hot_water_6_2017'];
			$hot_water_7_2017  = $_POST['hot_water_7_2017'];
			$hot_water_8_2017  = $_POST['hot_water_8_2017'];
			$hot_water_9_2017  = $_POST['hot_water_9_2017'];
			$hot_water_10_2017  = $_POST['hot_water_10_2017'];
			$hot_water_11_2017  = $_POST['hot_water_11_2017'];
			$hot_water_12_2017  = $_POST['hot_water_12_2017'];

			$new_hot_water = $db->prepare("INSERT INTO `hot_water` (`id`, `id_object`, `year`, `january`, `february`, `march`, `april`, `may`, `june`, `juli`, `august`, `september`, `october`, `november`, `december`) VALUES (NULL,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?),(NULL,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?),(NULL,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

			$array_hot_water = array( $last_id, $year_2015, $hot_water_1_2015, $hot_water_2_2015, $hot_water_3_2015, $hot_water_4_2015, $hot_water_5_2015, $hot_water_6_2015, $hot_water_7_2015, $hot_water_8_2015, $hot_water_9_2015, $hot_water_10_2015, $hot_water_11_2015, $hot_water_12_2015, $last_id, $year_2016, $hot_water_1_2016, $hot_water_2_2016, $hot_water_3_2016, $hot_water_4_2016, $hot_water_5_2016, $hot_water_6_2016, $hot_water_7_2016, $hot_water_8_2016, $hot_water_9_2016, $hot_water_10_2016, $hot_water_11_2016, $hot_water_12_2016, $last_id, $year_2017, $hot_water_1_2017, $hot_water_2_2017, $hot_water_3_2017, $hot_water_4_2017, $hot_water_5_2017, $hot_water_6_2017, $hot_water_7_2017, $hot_water_8_2017, $hot_water_9_2017, $hot_water_10_2017, $hot_water_11_2017, $hot_water_12_2017);

			$new_hot_water->execute($array_hot_water);

			header('Location: /last');
		}
	}

}