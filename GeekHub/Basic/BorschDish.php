<?php
namespace GeekHub\Basic;

use GeekHub\Basic\AbstractDish;
use GeekHub\Basic\EatebleInterface;
use GeekHub\Basic\DrinkableInterface;

class BorschDish extends AbstractDish implements EatebleInterface, DrinkableInterface
{
    public $isPrepared;

    public $name = 'my dish';

    public function __construct($name)
    {
        parent::__construct($name);

        $this->isPrepared = false;

    }

    public function prepare()
    {
        if ($this->isPrepared) {
            echo ('Pasta is cooked');
            echo('<br>');
            return;
        }

        $this->isPrepared = true;

        echo(sprintf('I just prepared %s pasta', $this->getName()));
        echo('<br>');
    }

    public function eat()
    {
        if (!$this->isPrepared) {
            echo ('You should prepare Pasta at first');
            echo('<br>');
            return;
        }

        echo (sprintf('I just ate Pasta with name "%s"', $this->getName()));
        echo('<br>');
    }

    public function drink()
    {}

    public function moveToTrash()
    {
        echo (sprintf("bla-bal"));
    }

}
