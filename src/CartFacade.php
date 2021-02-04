<?php

namespace Codebreed\Cart;

use Illuminate\Support\Facades\Facade;

/**
 * @see Cart
 */
class CartFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'cart';
    }
}
