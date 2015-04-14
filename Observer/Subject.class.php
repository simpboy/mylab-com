<?php
	class Subject implements ISubject{
		public $IObserverArray = array();
		public $state = 0;

		public function register($IObserver){
				$this->IObserverArray[] = $IObserver;
		}

		public function remove($IObserver){
			foreach($this->IObserverArray as $k=>$v){
				if($IObserver === $v){
						unset($this->IObserverArray[$k]);
				}
			}
		}
		
		public function notify(){
			foreach($this->IObserverArray as $v){
					$v->update($this->state);
			}
		}

		public function setState($state){
			$this->state = $state;
			$this->notify();
		}

	}