<?php

declare(strict_types=1);

namespace App\Modules\Earthquake\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin \Eloquent
 */
class EarthquakeEvent extends Model
{
    protected $fillable = [
        'event_id',
        'latitude',
        'longitude',
        'depth',
        'magnitude',
        'rms',
        'type',
        'location',
        'country',
        'province',
        'district',
        'neighborhood',
        'event_moment',
        'is_event_update',
        'last_update_date',
    ];

    protected $table = 'earthquake_events';
}
