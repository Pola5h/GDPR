<?php

namespace Vendor\GdprCookieConsentManager\Services;

use Vendor\GdprCookieConsentManager\Models\ConsentLog;

class ConsentService
{
    public function logConsent(array $data): ConsentLog
    {
        return ConsentLog::create($data);
    }
}
