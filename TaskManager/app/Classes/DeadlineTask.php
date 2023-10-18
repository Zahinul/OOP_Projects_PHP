<?php

namespace app\Classes;

use app\Classes\Task;
use app\Interfaces\HasDueDateInterface;
use app\Interfaces\HasPriorityInterface;
use app\Interfaces\HasStartDateInterface;
use app\Traits\HasAssigneeTrait;

class DeadlineTask extends Task implements HasStartDateInterface,HasDueDateInterface,HasPriorityInterface
{
    use HasAssigneeTrait;
    protected $startDate;
    protected $dueDate;
    protected $priority;

    //Methods

    public function __construct($name, $description, $startDate, $dueDate, $priority){
        parent::__construct($name,$description);
        $this->startDate=$startDate;
        $this->dueDate=$dueDate;
        $this->priority=$priority;
    }

    //getters

    public function getStartDate(){
        return $this->startDate;
    }
    public function getDueDate(){
        return $this->dueDate;
    }

    //Defining Abstract Methods

    public function getPriority(){
        return $this->priority;
    }
    public function changeStatus(){
        $this->status = true;
        return $this->status;
    }

}