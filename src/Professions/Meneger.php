<?php


declare(strict_types=1);

namespace Professions;

use AbstractFun\Special;
use InterfaceFun\ApplicationCreatorInterface;
use InterfaceFun\WebinarSpeakerInterface;


class Menedger extends Special implements ApplicationCreatorInterface, WebinarSpeakerInterface
{
    public function getFullName():string
    {
        return "Менеджер :" . $this->surname ." ". $this->name;
    }
    public function getApplicationCreatorInterface(): string
    { 
        if($this->themeCreator) {
            return "Может заниматься разработкой на языке: " .$this->themeCreator;
        }
        return ""; 
    }
    public function getWebinarSpeakerInterface(): string 
    {
        if($this->webinar) {
            return "Может вести вебинары по своей специальности. ";
        }else{
            return "Не может вести вебинары по своей специальности. ";
        }
    }
}