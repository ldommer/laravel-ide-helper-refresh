<?php

namespace Demian2921\IdeHelperRefresh\Console;

use Illuminate\Console\Command;

class IdeHelperRefreshCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ide-helper:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh the Laravel IDE Helper files.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $this->call('clear-compiled');
        $this->call('cache:clear');
        $this->call('ide-helper:generate');
        $this->call('ide-helper:eloquent');
        $this->call('ide-helper:models', ['-N' => true]);
        $this->call('ide-helper:meta');
    }
}
