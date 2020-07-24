<?php

namespace Saintminer\S8pack\Providers;
use Illuminate\Support\ServiceProvider;

Class S8packServiceProvider extends ServiceProvider {

    public function boot() {
        dd("S8PACK BOOTED");
    }

    public function register() {
        
    }

}