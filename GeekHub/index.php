<?php

require_once __DIR__ . '/autoload.php';

use GeekHub\Basic\BasicClass;
use GeekHub\Basic\BasicStaticClass;
use GeekHub\Basic\PastaDish;
use GeekHub\Basic\AbstractDish;

//$bc = new BasicClass('GeekHub');
//$bc->setAuthor('bla');
//var_dump($bc);

var_dump(BasicStaticClass::PRIVACY_FRIENDS);
var_dump(BasicStaticClass::getPrivacySettings());
//
//
//$pasta = new PastaDish('Italian');
//
//$pasta->eat();
//$pasta->prepare();
//$pasta->prepare();
//$pasta->eat();
