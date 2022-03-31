<?php

namespace App\Http\Livewire\CyberWeekend;

use App\Models\CyberWeekend;
use App\Models\Player;
use App\Models\Team;
use Livewire\Component;

class Register extends Component
{
    public $registerModal;
    public $alert_modal;
    public $isSolo;

    public $solo_name;
    public $solo_rank;
    public $solo_discord_id;

    public $team_name;
    public $team_average_rank;
    public $leader_discord_id;
    public $p1_name;
    public $p2_name;
    public $p3_name;
    public $p4_name;
    public $p5_name;

    public function render()
    {
        return view('livewire.cyber-weekend.register')->layout('layouts.guest');
    }

    public function startRegister($isSolo)
    {
        $this->registerModal = true;
        $this->isSolo = $isSolo;
    }

    public function register()
    {
        if ($this->isSolo) {
            $this->validate([
                'solo_name' => 'required',
                'solo_discord_id' => 'required',
                'solo_rank' => 'required',
            ]);

            // TODO: saving function for solo
            $player = $this->registerPlayer($this->solo_name, null, $this->solo_rank, $this->solo_discord_id);
            $cyber_weekend = $this->registerCyberWeekend(1, null, $player->id);
            session()->flash('success_message', 'Successfully register. Please wait for the further annoucement. Thank you.');
            $this->alert_modal = true;
        } else {
            $this->validate([
                'team_name' => 'required',
                'team_average_rank' => 'required',
                'leader_discord_id' => 'required',
                'p1_name' => 'required',
                'p2_name' => 'required',
                'p3_name' => 'nullable',
                'p4_name' => 'nullable',
                'p5_name' => 'nullable',
            ]);

            // TODO: saving function for team
            $team = $this->registerTeam($this->team_name, $this->team_average_rank, $this->leader_discord_id);
            $player1 = $this->registerPlayer($this->p1_name, $team->id);
            if ($this->p2_name) $player2 = $this->registerPlayer($this->p2_name, $team->id);
            if ($this->p3_name) $player3 = $this->registerPlayer($this->p3_name, $team->id);
            if ($this->p4_name) $player4 = $this->registerPlayer($this->p4_name, $team->id);
            if ($this->p5_name) $player5 = $this->registerPlayer($this->p5_name, $team->id);
            $cyber_weekend = $this->registerCyberWeekend(2, $team->id, null);
            session()->flash('success_message', 'Successfully register. Please wait for the further annoucement. Thank you.');
            $this->alert_modal = true;
        }

        $this->registerModal = false;
    }

    private function registerCyberWeekend($team_type, $team_id = null, $player_id = null) : CyberWeekend
    {
        $cyber_weekend = new CyberWeekend();
        $cyber_weekend->team_type = $team_type;
        $cyber_weekend->team_id = $team_id;
        $cyber_weekend->player_id = $player_id;
        $cyber_weekend->save();
        return $cyber_weekend;
    }

    private function registerPlayer($player_name, $team_id = null, $rank = null, $discord_id = null): Player
    {
        $player = new Player();
        $player->name = $player_name;
        $player->rank = $rank;
        $player->discord_id = $discord_id;
        $player->team_id = $team_id;
        $player->save();
        return $player;
    }

    private function registerTeam($team_name, $average_rank, $discord_id = null): Team
    {
        $team = new Team();
        $team->name = $team_name;
        $team->discord_id = $discord_id;
        $team->average_rank = $average_rank;
        $team->save();
        return $team;
    }
}
