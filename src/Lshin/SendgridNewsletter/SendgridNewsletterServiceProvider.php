<?php namespace Lshin\SendgridNewsletter;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Config;
use SendGridPHP\Newsletter;

class SendgridNewsletterServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        $this->package('lshin/sendgrid-newsletter');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->booting(function()
        {
            $loader = AliasLoader::getInstance();
            $loader->alias('SendgridNewsletter', 'Lshin\SendgridNewsletter\Facades\SendgridNewsletter');
        });

        $this->app->singleton('sendgridnewsletter', function()
        {
            $SendgridNewsletterWrapper = new SendgridNewsletterWrapper(
                Config::get('sendgridnewsletter.api_user'),
                Config::get('sendgridnewsletter.api_key')
              );
            return $SendgridNewsletterWrapper;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('sendgridnewsletter');
    }

}
