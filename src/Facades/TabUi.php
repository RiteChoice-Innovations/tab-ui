<?php

namespace RitechoiceInnovations\TabUi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RiteChoice Innovations\TabUi\TabUi
 */
class TabUi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \RitechoiceInnovations\TabUi\TabUi::class;
    }
}
