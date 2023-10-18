<?php

namespace app\Traits;

trait HasAssigneeTrait
{
    protected $assignees = [];
    //adding assignees
    public function addAssignee($assignee){
        $this->assignees[] = $assignee;
    }
    //getter
    public function getAssignees(){
        return $this->assignees;
    }
}