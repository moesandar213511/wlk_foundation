<?php 

namespace App\CustomClass;
use App\Client;

class ClientData{
	private $id;
	private $photo;
	private $link;

	public function __construct($client_id){
		$client = Client::where('id',$client_id)->firstOrFail();
		$this->setId($client->id);
		$this->setPhoto($client->photo);
		$this->setLink($client->link);
	}
	public function getSingleClientData(){
		return $arr=[
			'id' => $this->getId(),
			'photo' => $this->getPhoto(),
			'link' => $this->getLink()
		];
	}

	public static function getAllData($client_datas){
		$arr = [];
		foreach($client_datas as $data){
			$obj=new ClientData($data->id);
			array_push($arr,$obj->getSingleClientData());
		}
		return $arr;
	}

	private function setId($id){
		$this->id=$id;
	}

	private function setPhoto($photo){
		$this->photo=Path::$path.'/upload/client/'.$photo;
	}

	private function setLink($link){
		$this->link=$link;
	}

	private function getId(){
		return $this->id;
	}

	private function getPhoto(){
		return $this->photo;
	}

	private function getLink(){
		return $this->link;
	}

}

 ?>