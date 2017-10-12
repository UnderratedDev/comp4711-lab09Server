<?php

/* Represents Tasks 
   Reads in tasks from a csv */
class Tasks extends CSV_Model {

        public function __construct()
        {
                parent::__construct(APPPATH . '../data/tasks.csv', 'id');
        }

}

?>
