<?php 
namespace App\CustomClass;
use App\Team;

Class TeamData{
	private $id;
	private $name;
	private $photo;
	private $position;
	private $detail;

	public function __construct($team_id){
		$team = Team::where('id',$team_id)->firstOrFail();
		$this->setId($team->id);
		$this->setName($team->name);
		$this->setPhoto($team->photo);
		$this->setPosition($team->position);
		$this->setDetail($team->detail);
	}
	public function getSingleTeamData(){
		return $arr = [
			'id' => $this->getId(),
			'name' => $this->getName(),
			'photo' => $this->getPhoto(),
			'position' => $this->getPosition(),
			'detail' => $this->getDetail()
		];
	} 
	public static function getAllData($team_datas){
		$arr = [];
		foreach($team_datas as $data){
			$obj=new TeamData($data->id);
			array_push($arr,$obj->getSingleTeamData());
		}
		return $arr;
	}
	private function setId($id){
		$this->id = $id;
	}
	private function setName($name){
		$this->name = $name;
	}
	private function setPhoto($photo){
		$this->photo=Path::$path."/upload/team/".$photo;
	}
	private function setPosition($position){
		$this->position = $position;
	}
	private function setDetail($detail){
		$this->detail = $detail;
	}
	private function getId(){
		return $this->id;
	}
	private function getName(){
		return $this->name;
	}
	private function getPhoto(){
		return $this->photo;
	}
	private function getPosition(){
		return $this->position;
	}
	private function getDetail(){
		return $this->detail;
	}
	
}
 ?>
