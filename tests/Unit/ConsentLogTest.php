<?php

test('consent log can be created', function () {
    $log = \Vendor\GdprCookieConsentManager\Models\ConsentLog::create([
        'ip_address' => '127.0.0.1',
        'preferences' => ['necessary' => true],
        'consented_at' => now(),
    ]);
    expect($log->id)->not->toBeNull();
});
