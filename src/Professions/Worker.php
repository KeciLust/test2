<?php


declare(strict_types=1);

namespace Professions;

use AbstractFun\Special;
use InterfaceFun\ApplicationCreatorInterface;


class Worker extends Special implements ApplicationCreatorInterface
{
    public function getFullName():string
    {
        return "Специалист : " . $this->surname ." ". $this->name;
    }
    public function getApplicationCreatorInterface():string
    { 
        if($this->themeCreator) {
            return "Может заниматься разработкой на языке: " .$this->themeCreator;
        }
    }
}