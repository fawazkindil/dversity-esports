<?php

namespace App\Http\Livewire\Admin\TourBracket;

use App\Models\CyberWeekend;
use App\Models\Team;
use Livewire\Component;

class Index extends Component
{
    public $cyber_weekends;
    public $player_list_modal;
    public $players = [];
    public $team_type;


    public function render()
    {
        $this->cyber_weekends = CyberWeekend::where('team_type', 'like', '%' . $this->team_type . '%')->orderBy('team_type')->get();
        return view('livewire.admin.tour-bracket.index');
    }

    public function viewPlayers($team_id)
    {
        $team = Team::find($team_id);
        $this->players = $team->players;
        $this->player_list_modal = true;

    }

    public function delete($cyber_weekend_id)
    {
        $cyber_weekend = CyberWeekend::find($cyber_weekend_id);
        $player = $cyber_weekend->player;
        $team = $cyber_weekend->team;
        $cyber_weekend->delete();
        if ($team){
            $players = $team->players;
            foreach ($players as $team_player) {
                $team_player->delete();
            }
            $team->delete();
        }
        if ($player) {
            $player->delete();
        }
    }
}
