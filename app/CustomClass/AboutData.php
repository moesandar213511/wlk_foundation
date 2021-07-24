<?php

namespace App\CustomClass;
use App\About;

class AboutData{

	private $id;
	private $title;
	private $detail;
	private $photo;
	private $created_at;

	public function __construct($about_id){
		$about=About::where('id',$about_id)->firstOrFail();
		$this->setId($about->id);
		$this->setTitle($about->title);
		$this->setDetail($about->detail);
		$this->setPhoto($about->photo);
		$this->setCreated_at($about->created_at);	
	}	

	public function getSingleAboutData(){
		return $arr=[
			'id' => $this->getId(),
			'title' => $this->getTitle(),
			'detail' => $this->getDetail(),
			'photo' => $this->getPhoto(),
			'created_at' => $this->getCreated_at()
		];
	}

	public static function getAllData($about_datas){
		$arr=[];
		foreach($about_datas as $data){
			$obj=new AboutData($data->id);
			array_push($arr,$obj->getSingleAboutData());
		}

		return $arr;
	}

	private function setId($id){
		$this->id=$id;
	}

	private function setTitle($title){
		$this->title=$title;
	}

	private function setDetail($detail){
		$this->detail=$detail;
	}

	private function setPhoto($photo){
		$this->photo=Path::$path."/upload/about/".$photo;
	}

	private function setCreated_at($created_at){
		$this->created_at=$created_at;
	}

	private function getId(){
		return $this->id;
	}

	private function getTitle(){
		return $this->title;
	}

	private function getDetail(){
		return $this->detail;
	}

	private function getPhoto(){
		return $this->photo;
	}

	private function getCreated_at(){
		return $this->created_at;
	}

}