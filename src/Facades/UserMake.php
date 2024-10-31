<?php

namespace JordanPartridge\UserMake\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JordanPartridge\UserMake\UserMake
 */
class UserMake extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \JordanPartridge\UserMake\UserMake::class;
    }
}
