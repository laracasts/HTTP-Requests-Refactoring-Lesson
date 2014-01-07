<?php namespace Acme\Twitter;

use Illuminate\Support\Facades\Facade;

class Twitter extends Facade {

    /**
     * Name of IoC binding is...
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'twitter';
    }
}
