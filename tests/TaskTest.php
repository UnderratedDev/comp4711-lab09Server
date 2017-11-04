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
        $this -> task -> TaskSet = "#1";
        $this->assertNotEquals("#1", $this -> task -> task);
    }

    public function testSetNameLength64() {
        $this -> task -> Task = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        $this -> assertEquals("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", $this -> task -> task);
    }
    
    public function testSetNameLengthOver64() {
        $this -> task -> Task = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        $this -> assertNotEquals("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", $this -> task -> task);
    }
    
    public function testSetNameLength1() {
        $this -> task -> Task = "a";
        $this -> assertEquals("a", $this -> task -> task);
    }
    
    public function testSetNameLengthEmpty() {
        $this -> task -> Task = "";
        $this -> assertNotEquals("", $this -> task -> task);
    }
    
    public function testSetPriority () {
        $this -> task -> Priority = "aaa";
        $this->assertNotEquals("aaa", $this -> task -> priority);
    }

    public function testSetNameString() {
        $this -> task -> Task = "Name";
        $this->assertEquals("Name", $this -> task -> task);
    }

    public function testSetPriorityString () {
        $this -> task -> Priority = "1";
        $this->assertNotEquals("1", $this -> task -> priority);
    }


    public function testSetNameGood () {
        $this -> task -> Task = 2;
        $this->assertEquals(2, $this -> task -> task);
    }

    public function testSetPriorityGood () {
        $this -> task -> Priority = 3;
        $this->assertEquals(3, $this -> task -> priority);
    }

    public function testSetSize () {
        $this -> task -> Size = "4";
        $this->assertNotEquals("4", $this -> task -> size);
    }

    public function testSetGroup () {
        $this -> task -> Group = "5";
        $this->assertNotEquals("5", $this -> task -> group);
    }
   
    
    
  }
?>