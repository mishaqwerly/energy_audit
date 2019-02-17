<?php 


class InfoController 
{
	
	public function actionInfoObject($id)
	{

		require 'application/models/Info.php';

		$LastModelObj = new InfoModel();
		$LastModelObj->GetID($id);
		$LastModelObj->getInfo();
		$object = $LastModelObj->object;
		$heating = $LastModelObj->heating;
		$heat_loss = $LastModelObj->heat_loss;
		$heating_table = $LastModelObj->heating_table;
		$hot_water = $LastModelObj->hot_water;
		$electricity_tb = $LastModelObj->electricity_tb;
		$hot_water_tb = $LastModelObj->hot_water_tb;
		$cold_woter_tb = $LastModelObj->cold_woter_tb;
		$electricity = $LastModelObj->electricity;
		$cold_woter = $LastModelObj->cold_woter;
		$cold_woter_array = $LastModelObj->cold_woter_array;
		$hot_water_array = $LastModelObj->hot_water_array;
		$electricity_array = $LastModelObj->electricity_array;
		$heating_array = $LastModelObj->heating_array;
		$months_array = $LastModelObj->months_array;
		$heating_sum = $LastModelObj->heating_sum;
		$thermal_power_building = $LastModelObj->thermal_power_building;
		$electricity_sum = $LastModelObj->electricity_sum;
		$consumption_electric_energy = $LastModelObj->consumption_electric_energy;
		$amount_people = $LastModelObj->amount_people;
		$working_days = $LastModelObj->working_days;
		$consumption_cold_woter = $LastModelObj->consumption_cold_woter;
		$consumption_hot_water = $LastModelObj->consumption_hot_water;

		require 'application/views/info.php';

		return true;
	}

	public function actionLastObject()
	{

		require 'application/models/Info.php';

		$LastModelObj = new InfoModel();
		$id = $LastModelObj->GetMaxIDObject();
		$LastModelObj->getInfo();
		$object = $LastModelObj->object;
		$heating = $LastModelObj->heating;
		$heat_loss = $LastModelObj->heat_loss;
		$heating_table = $LastModelObj->heating_table;
		$hot_water = $LastModelObj->hot_water;
		$electricity_tb = $LastModelObj->electricity_tb;
		$hot_water_tb = $LastModelObj->hot_water_tb;
		$cold_woter_tb = $LastModelObj->cold_woter_tb;
		$electricity = $LastModelObj->electricity;
		$cold_woter = $LastModelObj->cold_woter;
		$cold_woter_array = $LastModelObj->cold_woter_array;
		$hot_water_array = $LastModelObj->hot_water_array;
		$electricity_array = $LastModelObj->electricity_array;
		$heating_array = $LastModelObj->heating_array;
		$months_array = $LastModelObj->months_array;
		$heating_sum = $LastModelObj->heating_sum;
		$thermal_power_building = $LastModelObj->thermal_power_building;
		$electricity_sum = $LastModelObj->electricity_sum;
		$consumption_electric_energy = $LastModelObj->consumption_electric_energy;
		$amount_people = $LastModelObj->amount_people;
		$working_days = $LastModelObj->working_days;
		$consumption_cold_woter = $LastModelObj->consumption_cold_woter;
		$consumption_hot_water = $LastModelObj->consumption_hot_water;

		require 'application/views/info.php';

		return true;
	}
}