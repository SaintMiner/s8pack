<?php

namespace Saintminer\S8pack\Providers;
use Illuminate\Support\ServiceProvider;

Class S8packServiceProvider extends ServiceProvider {

    public function boot() {
        info("S8PACK BOOTED");
        $this->loadRoutesFrom(__DIR__.'\\..\\Routes\\routes.php');
    }

    public function register() {
        
    }

}