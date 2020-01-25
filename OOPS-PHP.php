<?php
	class Student
	{
		var $name;
		var $rno;
		var $branch;
		var $year;
		function __construct($nm,$rno,$br,$yr)
		{
			$this->name=$nm;
			$this->rno=$rno;
			$this->branch=$br;
			$this->year=$yr;
		}
		function get_inf()
		{
		echo "<table><tr><th>Name:</th><td>".$this->name."</td></tr><tr><th>Roll No:</th><td>".$this->rno."</td></tr><tr><th>Branch:</th><td>".$this->branch."</td></tr><tr><th>Year:</th><td>".$this->year."</td></tr></table><br/>";
		}
	}
	$obj1=new Student("Harshit",171510025,"CS",1);
	$obj2=new Student("Payash",171510035,"MEE",2);
	$obj3=new Student("Devendra",171510020,"ECE",4);
	$obj1->get_inf();
	$obj2->get_inf();
	$obj3->get_inf();
?>