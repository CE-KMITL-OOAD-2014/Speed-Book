<?php
class searchTest extends PHPUnit_Framework_TestCase{
	public function searchName(){
		this -> new search1($name) ;
		this -> setName($name) ;

		this -> assertEquals($name,this->getName()) ;
	}
	public function searchSize(){
		this -> new search2($size) ;
		this -> setSize($size) ;

		this -> assertEquals($size,this->getSize()) ;
	}
	public function searchDate(){
		this -> new search3($name) ;
		this -> setDate($date) ;

		this -> assertEquals($date,this->getDate()) ;
	}
}
?>