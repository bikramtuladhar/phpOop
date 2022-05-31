<?php

class Employee{
	private string $name;
	private string $address;

	public function setName(string $name){
		$this->name = $name;
	}

	public function setAddress(string $address)
	{
		$this->address = $address;
	}

	public function getName(){
		return $this->name;
	}

	public function getAddress(){
		return $this->address;
	}
}

class Permanent extends Employee {

	private string $salary;
	private string $post;

	public function __construct(string $name, string $address,string $salary, string $post){
		$this->setName($name);
		$this->setAddress($address);
		$this->salary =$salary;
		$this->post = $post;
	}

	public function setSalary(string $salary){
		$this->salary = $salary;
	}

	public function setPost(string $post)
	{
		$this->post = $post;
	}

	public function displayAll(){
		echo "<br><br> Employee Details: <br><br>";
		echo sprintf("Name: %s <br>",$this->getName());
		echo sprintf("Address: %s <br>",$this->getAddress());
		echo sprintf("Salary: %s <br>",$this->salary);
		echo sprintf("Post: %s <br>",$this->post);
	}

}


$ram = new Permanent('ram','ltp','2000','level 1');
$ram->displayAll();


$hari = new Permanent('hari','ktm','4000','level 2');
$hari->displayAll();


$shyam = new Permanent('shyam','bkt','20000','level 6');
$shyam->displayAll();
