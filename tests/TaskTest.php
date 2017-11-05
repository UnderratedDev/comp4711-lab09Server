<?php

  if (! class_exists('PHPUnit_Framework_TestCase')) {
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
  }

 class TaskTest extends PHPUnit_Framework_TestCase {
    private $CI;
    private $task;

    public function setUp() {

      // Load CI instance normally
      $this->CI = &get_instance();

      // make a dummy task
      // new task
      $this -> task = new Task;
      $this -> task -> task = "abc";
    }

    public function testSetName () {
        $this -> task -> task = "#1";
        $this->assertNotEquals("#1", $this -> task -> task);
    }

    public function testSetNameLength64() {
        $this -> task -> task = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        $this -> assertEquals("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", $this -> task -> task);
    }
 
    public function testSetNameLengthOver64() {
        $this -> task -> task = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        $this -> assertNotEquals("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", $this -> task -> task);
    }

    public function testSetNameLength1() {
        $this -> task -> task = "a";
        $this -> assertEquals("a", $this -> task -> task);
    }
    
    public function testSetNameLengthEmpty() {
        $this -> task -> task = "";
        $this -> assertNotEquals("", $this -> task -> task);
    }
    
    public function testSetPriority () {
        $this -> task -> priority = "aaa";
        $this->assertNotEquals("aaa", $this -> task -> priority);
    }

    public function testSetNameString() {
        $this -> task -> task = "Name";
        $this->assertEquals("Name", $this -> task -> task);
    }

    public function testSetPriorityString () {
        $this -> task -> priority = "1";
        $this->assertNotEquals("1", $this -> task -> priority);
    }

    public function testSetNameGood () {
        $this -> task -> task = 2;
        $this->assertEquals(2, $this -> task -> task);
    }

    public function testSetPriorityGood () {
        $this -> task -> priority = 3;
        $this->assertEquals(3, $this -> task -> priority);
    }

    public function testSetSize () {
        $this -> task -> size = "4";
        $this->assertNotEquals("4", $this -> task -> size);
    }

    public function testSetGroup () {
        $this -> task -> group = "5";
        $this->assertNotEquals("5", $this -> task -> group);
    }
 
 }
?>
