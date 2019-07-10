<?php 

class Company {
	public $name;

	public function setCompanyName($name='DOT Indonesia'){
		$this->name=$name;
		// echo "$name";
		return $name;
	}

	public function getCompanyName(){
		$name = $this->setCompanyName();
		return $name;
		// echo "$name";
	}
}
?>
