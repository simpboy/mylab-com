<?php
class MutouDuck extends Duck{
	public $swim;
	public $quack;
	public function swim(){
		$this->swim->swim();
	}
	public function quack(){
		$this->quack->quack();
	}
	public function setSwim($swim){
		$this->swim = $swim;
	}
	public function setQuack($quack){
		$this->quack = $quack;
	}
}