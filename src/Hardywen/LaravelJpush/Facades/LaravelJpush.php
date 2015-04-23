<?php namespace Hardywen\LaravelJpush\Facades;


use Illuminate\Support\Facades\Facade;

class LaravelJpushFacades extends Facade {

	protected static function getFacadeAccessor() {
		return 'laravel-jpush';
	}
}