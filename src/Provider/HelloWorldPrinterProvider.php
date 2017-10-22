<?php

namespace Ur13l\HelloWorldPrinter\Provider;
use Illuminate\Support\ServiceProvider;
use Ur13l\HelloWorldPrinter\Commands\PrintHelloWorld;


class HelloWorldPrinterProvider extends ServiceProvider
{
   
    public function up() {

    }

    public function register() {
        $this->commands([
            PrintHelloWorld::class,
        ]);
    }
}