<?php

require_once APPPATH . 'core/Entity.php';

/* Represents a single task */
class Task extends Entity {

    protected $task;
    protected $priority;
    protected $size;
    protected $group;

    public function setTask($value) {
        $regex = "/^(\w){1,64}$/";
        if (preg_match($regex, $value) === 1) {
            $this -> task = $value;
        } else {
            // throw new Exception("Invalid Task");
        }
    }

    public function setPriority($value) {
        if (is_int($value) && (0 < $value && $value < 4)) {
            $this -> priority = $value;
        } else {
            // throw new Exception("Invalid Priority");
        }
    }

    public function setSize($value) {
        if (is_int($value) && (0 < $value && $value < 4)) {
            $this -> size = $value;
        } else {
            // throw new Exception("Invalid Size");
        }
    }

    public function setGroup($value) {
        if (is_int($value) && (0 < $value && $value < 5)) {
            $this -> group = $value;    
        } else {
            // throw new Exception("Invalid Group");
        }
    }

    public function getTask() {
        return $this -> task;
    }

    public function getPriority() {
        return $this -> priority;
    }

    public function getSize() {
        return $this -> size;
    }

    public function getGroup() {
        return $this -> group;
    }
}
?>
