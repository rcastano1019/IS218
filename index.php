<?php

$obj = new another;
$obj->name = 'steve';

$obj->printHelloWorld();
print_r($obj);
class example {
 public $name;

 	public function __construct() {
	 echo 'Hello World...' . $this->name;
	 }
	 public function printHelloWorld() {
	  echo 'Hello world...' . $this->name . "\n";
	  }
	  protected function someFunction() {}

	  private function someOtherFunction() {}
	  }
	  class another extends example {}
?>

