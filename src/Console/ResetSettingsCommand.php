<?php

namespace Vendor\GdprCookieConsentManager\Console;

use Illuminate\Console\Command;

class ResetSettingsCommand extends Command
{
    protected $signature = 'gdprcookie:reset';
    protected $description = 'Reset all GDPR cookie settings to default.';

    public function handle()
    {
        // Implement reset logic
        $this->info('GDPR cookie settings reset to default.');
    }
}
