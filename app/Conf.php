<?php

namespace Hanya;

use Illuminate\Support\Facades\Facade;

class Conf extends Facade {

    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return Configuration::class;
    }
}