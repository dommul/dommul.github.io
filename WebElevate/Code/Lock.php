<?php 

class Lock{
	private$isLocked = false;
	public function unlock(){
	$this->isLocked = false;
	echo 'You unlocked the Lock';
	}
	
	public function lock(){
	$this->isLocked = true;
	echo 'You locked the Lock';
	}
	
	public function isLocked(){
	return $this->isLocked;
	}
?>