<?php

include_once 'company.php';
class Department extends Company {

	public $name;

	public function setDepartmentName($name='Quality Assurance'){
		$this->name=$name;
		// echo "$name";
		return $name;
	}

	public function getDepartmentName(){
		$name = $this->setDepartmentName();
		return $name;
		// echo "$name";
	}	
}
?>
