<?php
include_once 'department.php';
class Employee extends Department {

	public $title="S.KOM";
	public $salary="5000000";
	public $name;
	
	public function setEmployeeName($name="Fadhilah"){
		$this->name=$name;
		return $name;
	}

	public function getEmployeeTitle(){
		$empTitlte = $this->title;
		return $empTitlte;
	}

	public function getEmployeeMonthlySalary($day='30'){
		$salary = $this->salary;
		$monthlySalary =$salary*($day/30);
		return $monthlySalary;
	}

	public function getEmployeeProfile()
	{
		$employe= new Employee();

		$this->setEmployeeName();
		$title = $employee->getEmployeeTitle();
		$monthlySalary = $this->getEmployeeMonthlySalary();

		echo "Data Karyawan<br>";
		echo "Nama : $this->name<br>";
		echo "Department :";
		echo $employee->getDepartmentName();
		echo "Company :";
		echo $employee->getCompanyName();
		echo "Title : $title<br>";
		echo "Salary : $monthlySalary";
	}

}
?>
