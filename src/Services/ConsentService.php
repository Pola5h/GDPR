<?php

namespace Pola5h\GdprCookieConsentManager\Services;

use Pola5h\GdprCookieConsentManager\Models\ConsentLog;

class ConsentService
{
    public function logConsent(array $data): ConsentLog
    {
        return ConsentLog::create($data);
    }
}
