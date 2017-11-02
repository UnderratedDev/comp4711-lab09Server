<?php

/* Represents a single task */
class Task extends Entity {
    
    $task;
    $priority;
    $size;
    $group;
    
    public function setTask($value) {
        $regex = "/^(\w){1,64}$/";
        if (preg_match($regex, $value) === 1) {
            $this -> task = $value;
        } else {
            throw new Exception("Invalid Task");
        }
    }
    
    public function setPriority($value) {
        if (is_int($value) && (0 < $value && $value < 4)) {
            $this -> priority = $value;
        }
    }
    
    public function setSize($value) {
        if (is_int($value) && (0 < $value && $value < 4)) {
            $this -> size = $value;
        }
    }
    
    public function setGroup($value) {
        if (is_int($value) && (0 < $value && $value < 5)) {
            $this -> group = $value;    
        }
    }
    
}

?>