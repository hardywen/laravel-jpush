<?php namespace Hardywen\LaravelJpush;

use Illuminate\Support\ServiceProvider;

class LaravelJpushServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('hardywen/laravel-jpush');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$app = $this->app;
		$app['laravel-jpush'] = $app->share(function ($app) {
			$app_key = $app['config']->get('laravel-jpush::app_key');
			$master_secret = $app['config']->get('laravel-jpush::master_secret');
			return new LaravelJpush($app_key,$master_secret);
		});
	}

	/*;
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('hardywen/laravel-jpush');
	}

}
