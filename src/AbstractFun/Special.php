<?php



declare(strict_types=1);

namespace AbstractFun;

abstract class Special
{
    protected string $name;
    protected string $surname;
    protected int $price;
    protected string $profession;
    protected int $age;
    protected string $themeCreator;
    protected bool $webinar;
    protected string $subordinates;
    public static int $counter = 0;

    public static int $priceFull = 0;


    public function __construct(string $name, string $surname, int $price, string $profession, int $age, string $themeCreator, bool $webinar, string $subordinates)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->price = $price;
        $this->profession = $profession;
        $this->age = $age;
        $this->themeCreator = $themeCreator;
        $this->subordinates = $subordinates;
        self::$counter++;
        self::$priceFull += $price;
        $this->webinar = $webinar;
    }
    abstract  public function getFullName(): string;

    public function getPriceCounter(): string
    {
        return "Всего персонала : " . self::$counter . "Их заработная плата : " . self::$priceFull;
    }
}
