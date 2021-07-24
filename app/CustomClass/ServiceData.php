<?php 

namespace App\CustomClass;
use App\Service;

class ServiceData{
	private $id;
	private $photo;
	private $title;
	private $detail;

	public function __construct($service_id){
		$service = Service::where('id',$service_id)->firstOrFail();
		$this->setId($service->id);
		$this->setTitle($service->title);
		$this->setDetail($service->detail);
		$this->setPhoto($service->photo);
	}
	public function getSingleServiceData(){
		return $arr=[
			'id' => $this->getId(),
			'title' => $this->getTitle(),
			'detail' => $this->getDetail(),
			'photo' => $this->getPhoto()
		];
	}

	public static function getAllData($service_datas){
		$arr = [];
		foreach($service_datas as $data){
			$obj=new ServiceData($data->id);
			array_push($arr,$obj->getSingleServiceData());
		}
		return $arr;
	}

	private function setId($id){
		$this->id=$id;
	}

	private function setPhoto($photo){
		$this->photo=Path::$path.'/upload/service/'.$photo;
	}

	private function setTitle($title){
		$this->title=$title;
	}

	private function setDetail($detail){
		$this->detail=$detail;
	}

	private function getId(){
		return $this->id;
	}

	private function getPhoto(){
		return $this->photo;
	}

	private function getTitle(){
		return $this->title;
	}

	private function getDetail(){
		return $this->detail;
	}

}

 ?>