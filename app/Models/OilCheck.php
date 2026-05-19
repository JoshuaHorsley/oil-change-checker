<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OilCheck extends Model
{
    protected $fillable = [
        'current_odometer',
        'previous_odometer',
        'previous_oil_change_date',
    ];

    protected function casts(): array
    {
        return [
            'previous_oil_change_date' => 'date',
        ];
    }

    public function isDueForOilChange(): bool
    {
        $kilometersSince = $this->current_odometer - $this->previous_odometer;
        $monthsSince = $this->previous_oil_change_date->diffInMonths(now());

        return $kilometersSince > 5000 || $monthsSince > 6;
    }
}
