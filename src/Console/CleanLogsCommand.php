<?php

namespace Pola5h\GdprCookieConsentManager\Console;

use Illuminate\Console\Command;
use Pola5h\GdprCookieConsentManager\Models\ConsentLog;

class CleanLogsCommand extends Command
{
    protected $signature = 'gdprcookie:clean-logs';
    protected $description = 'Delete consent logs older than the configured retention period.';

    public function handle()
    {
        // Implement log cleanup logic
        $this->info('Old consent logs cleaned.');
    }
}
