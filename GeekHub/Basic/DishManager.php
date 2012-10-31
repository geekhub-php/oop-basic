<?php
namespace GeekHub\Basic;

use GeekHub\Basic\AbstractDish;
use GeekHub\Basic\EatebleInterface;

class DishManager
{

    public function makeHappy(AbstractDish $dish)
    {

//        if ($dish instanceof AbstractDish) {
//
//        }




        if ($dish instanceof EatebleInterface) {
            $dish->eat();
        }


    }

}
