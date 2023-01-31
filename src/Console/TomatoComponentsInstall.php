<?php

namespace TomatoPHP\TomatoComponents\Console;

use Illuminate\Console\Command;
use TomatoPHP\ConsoleHelpers\Traits\HandleFiles;
use TomatoPHP\ConsoleHelpers\Traits\RunCommand;
use TomatoPHP\TomatoPHP\Services\Generator\CRUDGenerator;
use TomatoPHP\TomatoRoles\Services\GenerateRoles;

class TomatoComponentsInstall extends Command
{
    use RunCommand;
    use HandleFiles;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'tomato-components:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'install tomato components packages and publish the assets';

    public function __construct()
    {
        parent::__construct();
        $this->publish = __DIR__ . "/../../publish";
    }

    /**
     * @return void
     */
    public function handle(): void
    {
        $this->info('🍅 Publish Components Vendor Assets');
        $this->handelFile('/app.js', resource_path('/js/app.js'));
        $this->handelFile('/tailwind.config.js', base_path('tailwind.config.js'));
        $this->handelFile('/choices.scss', resource_path('/js/choices.scss'));
        $this->callSilent('optimize:clear');
        $this->call('vendor:publish', ['--provider' => 'TomatoPHP\TomatoComponents\TomatoComponentsServiceProvider']);
        $this->yarnCommand(['add', 'vue3-editor','codemirror-editor-vue3', 'vue3-tel-input', ' vue3-swatches', 'vue3-swatches', '@suadelabs/vue3-multiselect']);
        $this->yarnCommand(['install']);
        $this->yarnCommand(['build']);
        $this->info('🍅 Tomato Components installed successfully.');
    }
}
