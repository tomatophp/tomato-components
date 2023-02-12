<?php

namespace TomatoPHP\TomatoComponents;

use Illuminate\Support\ServiceProvider;
use TomatoPHP\TomatoComponents\Console\TomatoComponentsInstall;
use TomatoPHP\TomatoComponents\Views\Code;
use TomatoPHP\TomatoComponents\Views\Color;
use TomatoPHP\TomatoComponents\Views\Draggable;
use TomatoPHP\TomatoComponents\Views\Repeater;
use TomatoPHP\TomatoComponents\Views\Rich;
use TomatoPHP\TomatoComponents\Views\Select;
use TomatoPHP\TomatoComponents\Views\Tel;

class TomatoComponentsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register Install Command
        $this->commands([
            TomatoComponentsInstall::class
        ]);

        //Register new View Component For repeater
        $this->loadViewComponentsAs('tomato', [
            Repeater::class,
            Color::class,
            Rich::class,
            Tel::class,
            Select::class,
            Code::class,
            Draggable::class
        ]);

        //Register View
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tomato-components');

    }

    public function boot(): void
    {
        //Your Boot Methods come here...
    }
}
