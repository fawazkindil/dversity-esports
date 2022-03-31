<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CyberWeekend extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function getTypeDescription()
    {
        return $this->team_type == 1 ? 'Solo' : 'Team';
    }
}
