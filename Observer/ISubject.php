<?php
	interface ISubject{
		public function register($IObserver);
		public function remove($IObserver);
		public function notify();
	}
?>