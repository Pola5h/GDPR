<?php

namespace Vendor\GdprCookieConsentManager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Form request for validating GDPR admin settings update.
 */
class UpdateSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        // Only allow if user is authenticated and authorized
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'banner.theme' => 'required|string',
            'banner.position' => 'required|string',
            'enabled_languages' => 'required|array',
            'cookie_categories' => 'required|array',
            // Add more rules as needed
        ];
    }
}
