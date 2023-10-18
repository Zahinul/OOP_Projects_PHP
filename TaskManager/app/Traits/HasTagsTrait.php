<?php

namespace app\Traits;
trait HasTagsTrait 
{
    protected $tags = [];
    //tag adding
    public function addTag($tag){
        $this->tags[] = $tag;
    }
    //getter
    public function getTags(){
        return $this->tags;
    }
}