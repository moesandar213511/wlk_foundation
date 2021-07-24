<?php

namespace App\CustomClass;
use App\Office;

class OfficeData{

	private $id;
    private $photo;
    private $about;
    private $phone;
    private $email;
    private $address;
    private $vision;
    private $mission;

	public function __construct($office_id){
		$offfice=Office::where('id',$office_id)->firstOrFail();
		$this->setId($office->id);
		$this->setPhoto($office->photo);
		$this->setAbout($office->about);
        $this->setPhone($office->phone);
        $this->setEmail($office->email);
        $this->setAbout($office->about);
        $this->setVision($office->vision);
        $this->setMission($office->mission);
	}	

	public function getSingleOfficeData(){
		return $arr=[
            'id' => $this->getId(),
            'photo' => $this->getPhoto(),
			'about' => $this->getAbout(),
            'phone' => $this->getPhone(),
            'email' => $this->getEmail(),
            'address' => $this->getAddress(),
            'vision' => $this->getVision(),
            'mission' => $this->getMission()			
		];
	}

	public static function getAllData($office_datas){
		$arr=[];
		foreach($office_datas as $data){
			$obj=new OfficeData($data->id);
			array_push($arr,$obj->getSingleOfficeData());
		}
		return $arr;
	}

	private function setId($id){
		$this->id=$id;
	}
    private function setPhoto($photo)
    {
        $this->photo = Path::$path . "/upload/office/" . $photo;
    }
	private function setAbout($about){
		$this->about=$about;
	}
	private function setPhone($phone){
		$this->phone=$phone;
    }   
    private function setEmail($email){
        $this->email=$email;
    }
    private function setAddress($address){
        $this->address=$address;
    }
    private function setVision($vision){
        $this->vision=$vision;
    }
    private function setMission($mission){
        $this->mission=$mission;
    }


	private function getId(){
		return $this->id;
	}
    private function getPhoto(){
        return $this->photo;
    }
	private function getAbout(){
		return $this->title;
	}
	private function getPhone(){
		return $this->detail;
    }
    private function getEmail(){
        return $this->$email;
    }
    private function getAddress(){
        return $this->$address;
    }
    private function getVision(){
        return $this->$vision;
    }
    private function getMission(){
        return $this->$mission;
    }
	
}