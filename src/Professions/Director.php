<?php


declare(strict_types=1);

namespace Professions;

use AbstractFun\Special;
use InterfaceFun\ApplicationCreatorInterface;
use InterfaceFun\LeadInterface;


class Director extends Special implements ApplicationCreatorInterface, LeadInterface
{
    public function getFullName():string
    {
        return "Директор: " . $this->surname ." ". $this->name;
    }
    public function getApplicationCreatorInterface():string
    { 
        if($this->themeCreator) {
            return "Может заниматься разработкой на языке: " .$this->themeCreator;
        }return ""; 
    }
    public function getLeadInterface():string
    {
       if($this->subordinates) {
        return "Может управлять: " . $this->subordinates;
       }return "";
    }
}