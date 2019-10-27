<?php
//use Singletone\FileSave;
//use Multitone\FileSave;
use StaticFactory\StaticFactory;

require "functions.php";

spl_autoload_register('projectAutoload');

//$file = FileSave::getInstance();
//$file->save(__DIR__);

//$file = FileSave::getInstance('test1');
//$file->save(__DIR__);
//
//$file = FileSave::getInstance('test2');
//$file->save(__DIR__);

$obs = StaticFactory::create('\StaticFactory\FactoryClass');
$obs->save();