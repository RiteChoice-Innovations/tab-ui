<?php

namespace RiteChoiceInnovations\TabUi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RiteChoiceInnovations\TabUi\TabUi
 */
class TabUi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \RiteChoiceInnovations\TabUi\TabUi::class;
    }
}
