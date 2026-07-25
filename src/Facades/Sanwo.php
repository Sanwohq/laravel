<?php

namespace Sanwo\Laravel\Facades;

use Illuminate\Support\Facades\Facade;
use Sanwo\Laravel\SanwoManager;

/**
 * @method static string provider()
 * @method static string publicKey()
 * @method static string currency()
 * @method static bool debug()
 * @method static string scriptUrl()
 *
 * @see \Sanwo\Laravel\SanwoManager
 */
class Sanwo extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SanwoManager::class;
    }
}
