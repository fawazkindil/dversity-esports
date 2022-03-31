<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function getAverageRankAttribute($value)
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
        }
    }
}
