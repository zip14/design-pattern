<?php

namespace StaticFactory;

class StaticFactory
{
    public static function create(string $type) : FactoryInterface
    {
        return new $type();
    }

}