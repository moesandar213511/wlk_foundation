<?php 
namespace App\CustomClass;
use App\Donate;

class DonateData{
	private $id;
	private $name;
	private $description;
	private $amount;

	public function __construct($donate_data){
		$donates = Donate::where('id',$donate_data)->firstOrFail();
		$this->setId($donates->id);
		$this->setName($donates->name);
		$this->setDescription($donates->description);
		$this->setAmount($donates->amount);
	}

	public function getSingleDonateData(){
		return $arr = [
			'id' => $this->getId(),
			'name' => $this->getName(),
			'description' => $this->getDescription(),
			'amount' => $this->getAmount()
		];
	}

	public static function getAllData($donate_datas){
		$arr = [];
		foreach($donate_datas as $data){
			$obj = new DonateData($data->id);
			array_push($arr,$obj->getSingleDonateData());
		}
		return $arr;
	}

	private function setId($id){
		 $this->id = $id;
	}
	private function setName($name){
		$this->name = $name;
	}
	private function setDescription($des){
		$this->description = $des;
	}
	private function setAmount($amount){
		$this->amount = $amount;
	}

	private function getId(){
		return $this->id;
	}
	private function getName(){
		return $this->name;
	}
	private function getDescription(){
		return $this->description;
	}
	private function getAmount(){
		return $this->amount;
	}
}


 ?>
