<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('fecha_mayor', function ($attribute, $value, $parameters, $validator) {
            $fechaInicio = Carbon::parse($value);
            $fechaFin = Carbon::parse($validator->getData()[$parameters[0]]);
            return $fechaInicio->greaterThanOrEqualTo($fechaFin);
        }, 'La fecha final debe de ser mayor a la inicial!');
    }
}
