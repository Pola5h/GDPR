<?php

test('banner is displayed', function () {
    // Example test
    $this->get('/')->assertSee('gdpr-cookie-banner');
});
