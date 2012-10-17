<?php
namespace GeekHub\Basic;

abstract class AbstractDish
{
    protected $name;

    abstract public function prepare();

    public function __construct($name = 'my dish')
    {
        $this->name = $name;
    }

    public function moveToTrash()
    {
        echo (sprintf("I just moved to trash %s dish\n", $this->getName()));
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}
