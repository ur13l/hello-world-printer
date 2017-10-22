<?php

namespace Ur13l\HelloWorldPrinter\Commands;
use Illuminate\Console\Command;

class PrintHelloWorld extends Command {


    protected $signature = 'print:hello {name}';

    protected $description = "Imprime un mensaje personalizado desde la consola";


    public function handle() {
        print "¡Hola, " . $this->argument('name') . "! \n";
    }
}