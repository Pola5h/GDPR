<?php

namespace Pola5h\GdprCookieConsentManager\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Pola5h\GdprCookieConsentManager\Http\Requests\UpdateSettingsRequest;

/**
 * Controller for GDPR Cookie Consent admin panel.
 */
class AdminController extends Controller
{
    /**
     * Show the admin panel.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Return admin panel view
        return view('gdprcookie::admin.index');
    }

    /**
     * Update settings with validation.
     *
     * @param  \Pola5h\GdprCookieConsentManager\Http\Requests\UpdateSettingsRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateSettingsRequest $request)
    {
        // Save validated settings (example, actual logic may vary)
        $validated = $request->validated();
        // Save to config, database, or file as needed

        return back()->with('success', __('gdprcookie::messages.settings_updated'));
    }
}
