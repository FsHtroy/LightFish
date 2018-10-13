<?php
namespace App\Services;
use App\Services\Auth\Cookie;
use App\Services\Token\DB;
class Factory
{
    public static function createAuth()
    {
        $method = Config::get('authDriver');
        switch ($method) {
            case 'cookie':
                return new Cookie();
        }
        return new Cookie();
    }
    public static function createCache()
    {
    }
    public static function createMail()
    {
    }
    public static function createTokenStorage()
    {
        return new DB();
    }
}