<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      // Validator::extend('string', function($attribute, $value, $parameters, $validator) {
      //   return preg_match('/^[0-9]{5}_?\s?-?[0-9]{5}$/', $value);
      // });
    }
}
