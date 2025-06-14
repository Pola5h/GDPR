<?php

namespace Vendor\GdprCookieConsentManager\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Model for storing GDPR consent logs.
 *
 * @property int $id
 * @property string|null $ip_address
 * @property array $preferences
 * @property \Carbon\Carbon $consented_at
 */
class ConsentLog extends Model
{
    protected $table = 'gdpr_consent_logs';
    protected $guarded = [];
    protected $casts = [
        'preferences' => 'array',
        'consented_at' => 'datetime',
    ];
}
