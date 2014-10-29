<?php namespace Lshin\SendgridNewsletter;

class SendgridNewsletterWrapper
{
    public function __call($name, $arguments)
    {
        return call_user_func_array(['SendGridPHP\Newsletter', $name], $arguments);
    }
}