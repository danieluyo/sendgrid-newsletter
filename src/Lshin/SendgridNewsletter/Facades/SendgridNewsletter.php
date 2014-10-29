<?php namespace Lshin\SendgridNewsletter\Facades;

use Illuminate\Support\Facades\Facade;

class SendgridNewsletter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sendgridnewsletter';
    }
}