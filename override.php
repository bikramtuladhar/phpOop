<?php

class Employee{
	private string $name;
	private string $address;

	public function __construct(string $name, string $address){
		$this->name = $name;
		$this->address = $address;
	}

	public function hello(){
		echo 'hello from parent';
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
		parent::__construct($name,$address);
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

	public function hello(){
		parent::hello();
		echo "<br>";
		echo 'hello from child';
	}

}


$ram = new Permanent('ram','ltp','2000','level 1');
$ram->hello();
