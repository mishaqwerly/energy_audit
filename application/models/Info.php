<?php  

class InfoModel 
{
	public $id;
	public $object;
	public $heating;
	public $heat_loss;
	public $heating_table;
	public $hot_water;
	public $electricity_tb;
	public $hot_water_tb;
	public $cold_woter_tb;
	public $electricity;
	public $cold_woter;
	public $cold_woter_array;
	public $hot_water_array;
	public $electricity_array;
	public $heating_array;
	public $months_array;
	public $heating_sum;
	public $thermal_power_building;
	public $electricity_sum;
	public $consumption_electric_energy;
	public $amount_people;
	public $working_days;
	public $consumption_cold_woter;
	public $consumption_hot_water;

	public function GetID($id)
	{
		return $this->id = $id;
	}

	public function GetMaxIDObject()
	{
		$db = Db::getConnect();
		$last_id = $db->prepare("SELECT MAX(id) FROM object");
		$last_id->execute();
		$last_id = $last_id->fetchAll(PDO::FETCH_COLUMN);
		$last_id = $last_id[0];
		return $this->id = $last_id;
	}

	private function GetObjectInfo($value,$id)
	{
		$object = $value->prepare("SELECT * FROM object WHERE id = $id");
		$object->execute();
		$object = $object->fetchAll(PDO::FETCH_ASSOC);
		if (!empty($object)) {
			return $object;
		} else {
			require 'application/views/empty.php';
			die;
		}
	}

	private function GetHeatingArray($value,$id)
	{
		$heating = $value->prepare("SELECT `january`, `february`, `march`, `april`, `may`, `june`, `juli`, `august`, `september`, `october`, `november`, `december` FROM heating WHERE id_object = $id");
		$heating->execute();
		$heating = $heating->fetchAll(PDO::FETCH_ASSOC);
		return $heating;
	}

	private function GetHeatLossArray($value,$id)
	{
		$heat_loss = $value->prepare("SELECT * FROM heat_loss WHERE id_object = $id");
		$heat_loss->execute();
		$heat_loss = $heat_loss->fetchAll(PDO::FETCH_ASSOC);
		return $heat_loss;
	}

	private function HeatingTableArray($value,$id)
	{
		$heating_table = $value->prepare("SELECT * FROM heating WHERE id_object = $id");
		$heating_table->execute();
		$heating_table = $heating_table->fetchAll(PDO::FETCH_ASSOC);
		return $heating_table;
	}

	private function HotWaterArray($value,$id)
	{
		$hot_water = $value->prepare("SELECT * FROM hot_water WHERE id_object = $id");
		$hot_water->execute();
		$hot_water = $hot_water->fetchAll(PDO::FETCH_ASSOC);
		return $hot_water;
	}

	private function ElectricityTb($value,$id)
	{
		$electricity_tb = $value->prepare("SELECT `january`, `february`, `march`, `april`, `may`, `june`, `juli`, `august`, `september`, `october`, `november`, `december` FROM electricity WHERE id_object = $id");
		$electricity_tb->execute();
		$electricity_tb = $electricity_tb->fetchAll(PDO::FETCH_ASSOC);
		return $electricity_tb;
	}

	private function HotWaterTb($value,$id)
	{
		$hot_water_tb = $value->prepare("SELECT `january`, `february`, `march`, `april`, `may`, `june`, `juli`, `august`, `september`, `october`, `november`, `december` FROM hot_water WHERE id_object = $id");
		$hot_water_tb->execute();
		$hot_water_tb = $hot_water_tb->fetchAll(PDO::FETCH_ASSOC);
		return $hot_water_tb;
	}

	private function СoldWaterTb($value,$id)
	{
		$cold_woter_tb = $value->prepare("SELECT `january`, `february`, `march`, `april`, `may`, `june`, `juli`, `august`, `september`, `october`, `november`, `december` FROM cold_woter WHERE id_object = $id");
		$cold_woter_tb->execute();
		$cold_woter_tb = $cold_woter_tb->fetchAll(PDO::FETCH_ASSOC);
		return $cold_woter_tb;
	}

	private function Electricity($value,$id)
	{
		$electricity = $value->prepare("SELECT * FROM electricity WHERE id_object = $id");
		$electricity->execute();
		$electricity = $electricity->fetchAll(PDO::FETCH_ASSOC);
		return $electricity;
	}

	private function ColdWoter($value,$id)
	{
		$cold_woter = $value->prepare("SELECT * FROM cold_woter WHERE id_object = $id");
		$cold_woter->execute();
		$cold_woter = $cold_woter->fetchAll(PDO::FETCH_ASSOC);
		return $cold_woter;
	}

	private function InsertNote($value,$id)
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST') {

			if (isset($_POST['submit'])) {

				$post_array = $_POST;
				$table_name = array_keys($post_array);
				$table_name = $table_name[0];

				$inserted_text = $post_array[$table_name];
		       
		        if(!empty($inserted_text)) {

		        	$stmt = $value->prepare("INSERT INTO $table_name (`id`,`id_object`,`text`) VALUES (NULL, ?, ?)");
				    $params = array( $id, $inserted_text);
				    
				    $stmt->execute($params);

		 			header('Location: /info/'.$id);
				}
		    }
		}
	}

	public function GetLastNote($value,$name,$id)
	{
		
		$table_query = $value->prepare("SELECT * FROM object");
		$table_query->execute();
		$table_query = $table_query->fetchAll(PDO::FETCH_ASSOC);

		if (!empty($table_query)) {

			$result = $value->prepare("SELECT * FROM $name WHERE id_object = $id and id = (SELECT MAX(id) FROM $name);");
			$result->execute();
			$result = $result->fetchAll(PDO::FETCH_ASSOC);

			if (!empty($result)) {
				$result = $result[0]['text'];
				return $result;
			} else {
				$result = "Записи відсутні";
				return $result;
			}	
		} 
	}

	public function getInfo()
	{
		$db = Db::getConnect();
		$id = $this->id;
		$this->object = $this->GetObjectInfo($db,$id);
		$this->heating = $this->GetHeatingArray($db,$id);
		$this->heat_loss = $this->GetHeatLossArray($db,$id);
		$this->heating_table = $this->HeatingTableArray($db,$id);
		$this->hot_water = $this->HotWaterArray($db,$id);
		$this->electricity_tb = $this->ElectricityTb($db,$id);
		$this->hot_water_tb = $this->HotWaterTb($db,$id);
		$this->cold_woter_tb = $this->СoldWaterTb($db,$id);
		$this->electricity = $this->Electricity($db,$id);
		$this->cold_woter = $this->ColdWoter($db,$id);
		$this->InsertNote($db,$id);

		$this->cold_woter_array = array(
			$this->cold_woter[2]['january'],
			$this->cold_woter[2]['february'],
			$this->cold_woter[2]['march'],
			$this->cold_woter[2]['april'],
			$this->cold_woter[2]['may'],
			$this->cold_woter[2]['june'],
			$this->cold_woter[2]['juli'],
			$this->cold_woter[2]['august'],
			$this->cold_woter[2]['september'],
			$this->cold_woter[2]['october'],
			$this->cold_woter[2]['november'],
			$this->cold_woter[2]['december'],
		);

		$this->hot_water_array = array(
			$this->hot_water[2]['january'],
			$this->hot_water[2]['february'],
			$this->hot_water[2]['march'],
			$this->hot_water[2]['april'],
			$this->hot_water[2]['may'],
			$this->hot_water[2]['june'],
			$this->hot_water[2]['juli'],
			$this->hot_water[2]['august'],
			$this->hot_water[2]['september'],
			$this->hot_water[2]['october'],
			$this->hot_water[2]['november'],
			$this->hot_water[2]['december']
		);


		$this->electricity_array = array(
			$this->electricity[2]['january'],
			$this->electricity[2]['february'],
			$this->electricity[2]['march'],
			$this->electricity[2]['april'],
			$this->electricity[2]['may'],
			$this->electricity[2]['june'],
			$this->electricity[2]['juli'],
			$this->electricity[2]['august'],
			$this->electricity[2]['september'],
			$this->electricity[2]['october'],
			$this->electricity[2]['november'],
			$this->electricity[2]['december']
		);

		$this->heating_array = array(
			$this->heating[0]['january'],
			$this->heating[0]['february'],
			$this->heating[0]['march'],
			$this->heating[0]['april'],
			$this->heating[0]['may'],
			$this->heating[0]['june'],
			$this->heating[0]['juli'],
			$this->heating[0]['august'],
			$this->heating[0]['september'],
			$this->heating[0]['october'],
			$this->heating[0]['november'],
			$this->heating[0]['december']
		);

		$this->months_array = array(
			'Cічень',
			'Лютий' ,
			'Березень',
			'Квітень',
			'Травень',
			'Червень',
			'Липень',
			'Серпень',
			'Вересень',
			'Жовтень',
			'Листопад',
			'Грудень',
		);

		$this->heating_sum = array_sum($this->heating_array);

		$this->thermal_power_building = $this->heat_loss[0]['sum_all_loss'] - $this->object[0]['heat_leakage'];

		$this->electricity_sum = array_sum($this->electricity_array);

		$this->consumption_electric_energy = round($this->electricity_sum/$this->object[0]['amount_people'], 1);

		$this->amount_people = $this->object[0]['amount_people'];

		$this->working_days = $this->object[0]['working_days'];

		$this->consumption_cold_woter = round(array_sum($this->cold_woter_array)*1000/($this->amount_people * $this->working_days), 1);

		$this->consumption_hot_water = round(array_sum($this->hot_water_array)*1000/($this->amount_people * $this->working_days), 1);
	}

}