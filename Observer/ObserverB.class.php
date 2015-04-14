<?php
class ObserverB implements IObserver{
	public $state = 0;
	public $ISubject;
	public function __construct($ISubject){
		$this->ISubject = $ISubject;
	}
	
	public function update($state){
		$this->state = $state;
		echo "ObserverB mystate update to $state";
	}
	public  function un_listen(){
		$this->ISubject->remove($this);
	}
}