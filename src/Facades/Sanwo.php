<?php

namespace SanwoHQ\Laravel\Facades;

use Illuminate\Support\Facades\Facade;
use SanwoHQ\Laravel\SanwoManager;

/**
 * @method static string provider()
 * @method static string publicKey()
 * @method static string currency()
 * @method static bool debug()
 * @method static string scriptUrl()
 *
 * @see \SanwoHQ\Laravel\SanwoManager
 */
class Sanwo extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SanwoManager::class;
    }
}
