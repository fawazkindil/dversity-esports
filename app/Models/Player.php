<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function getRankAttribute($value)
    {
        switch ($value) {
            case 'elo1':
                return 'Iron - Bronze';
                break;
            case 'elo2':
                return 'Silver - Gold';
                break;
            case 'elo3':
                return 'Platinum - Diamond';
                break;
            case 'elo4':
                return 'Immortal - Radiant';
                break;
            default:
                return $value;
        }
    }
}
