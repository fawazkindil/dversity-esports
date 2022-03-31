<div class="py-12">
    <div class="container mx-auto text-white bg-opacity-75 bg-black rounded shadow">
        <div class="text-lg uppercase font-black p-4 text-center border-b">
            ABOUT CYBER WEEKEND
        </div>
        <div class="p-10 text-center italic">
            Cyber weekend is a tournament scene which is free for the public to take part.<br>
            It is a 5v5 event where YOU have the chance to take part in an E-Sport-like scene where you and your team will be casted and streamed by our affiliated casters and streamers from Twitch and Facebook!
        </div>
        <div class="text-center">
            {{-- <button>
                <img style="width: 500px;" wire:click="startRegister(true)" src="{{ asset('images/Register_As_Solo.png') }}" alt="">
            </button> --}}
            <button>
                <img style="width: 500px;" wire:click="startRegister(false)" src="{{ asset('images/Register_As_Team.png') }}" alt="">
            </button>
        </div>
    </div>
    <x-jet-modal wire:model='alert_modal'>
        <div class='p-4'>
        @if (session()->has('success_message'))
            <div class="">
                {{ session('success_message') }}
            </div>
        @endif
        </div>
    </x-jet-modal>
    <x-jet-modal wire:model="registerModal">
        <div class="text-xl p-4 border-b">
            Register {{ $isSolo ? 'Solo' : 'Team' }}
        </div>
        <div class="p-4">
            <form wire:submit.prevent="register">
                @if($isSolo)
                    {{-- Solo form --}}
                    <div>
                        <x-jet-label> Enter In-Game Name</x-jet-label>
                        <input type="text" class="py-1 px-2 w-full rounded-md italic" placeholder="eg. TenZ#3120" wire:model="solo_name" />
                        <x-jet-input-error for="solo_name" />
                    </div>
                    <div class="mt-2">
                        <x-jet-label> Enter Discord ID</x-jet-label>
                        <input type="text" class="py-1 px-2 w-full rounded-md italic" placeholder="eg. ayzul#3131" wire:model="solo_discord_id" />
                        <x-jet-input-error for="solo_discord_id" />
                    </div>
                {{--    <div class="mt-2">
                        <x-jet-label> Enter Discord ID</x-jet-label>
                        <input type="text" class="py-1 px-2 w-full rounded-md italic" placeholder="eg. Tennyson#7474" wire:model="solo_name" />
                        <x-jet-input-error for="solo_name" />
                    </div>--}}
                    <div class="mt-2">
                        <x-jet-label> Rank</x-jet-label>
                        <select wire:model="solo_rank">
                            <option></option>
                            <option value="elo1">Iron - Bronze</option>
                            <option value="elo2">Silver - Gold</option>
                            <option value="elo3">Platinum - Diamond</option>
                            <option value="elo4">Immortal - Radiant</option>
                          </select>
                        <x-jet-input-error for="solo_rank" />
                    </div>
                @else
                    {{-- Team Form --}}
                    <div>
                        <x-jet-label>Enter Team Name</x-jet-label>
                        <input type="text" class="py-1 px-2 w-full rounded-md italic" placeholder="eg. D'versity Esports (DVES)" wire:model="team_name" />
                        <x-jet-input-error for="team_name" />
                    </div>
                    <div class="mt-2">
                        <x-jet-label> Enter Team Leader Discord ID</x-jet-label>
                        <input type="text" class="py-1 px-2 w-full rounded-md italic" placeholder="eg. sam#3231" wire:model="leader_discord_id" />
                        <x-jet-input-error for="leader_discord_id" />
                    </div>
                    <div class="mt-2">
                    {{--    <x-jet-label> Enter Team Leader Discord ID</x-jet-label>
                        <input type="text" class="py-1 px-2 w-full rounded-md italic" placeholder="eg. hisoka#2357" wire:model="solo_name" />
                        <x-jet-input-error for="solo_name" />
                    </div>--}}
                    <div class="mt-2">
                        <x-jet-label> Enter In-Game Name (Player 1)</x-jet-label>
                        <input type="text" class="py-1 px-2 w-full rounded-md italic" placeholder="eg. Hisoka#1547" wire:model="p1_name" />
                        <x-jet-input-error for="p1_name" />
                    </div>
                    <div class="mt-2">
                        <x-jet-label>Enter In-Game Name (Player 2)</x-jet-label>
                        <input type="text" class="py-1 px-2 w-full rounded-md italic" placeholder="eg. aceu#5874 " wire:model="p2_name" />
                        <x-jet-input-error for="p2_name" />
                    </div>
                    <div class="mt-2">
                        <x-jet-label>Enter In-Game Name (Player 3)</x-jet-label>
                        <input type="text" class="py-1 px-2 w-full rounded-md italic" placeholder="eg. Wardell#9547" wire:model="p3_name" />
                        <x-jet-input-error for="p3_name" />
                    </div>
                    <div class="mt-2">
                        <x-jet-label>Enter In-Game Name (Player 4)</x-jet-label>
                        <input type="text" class="py-1 px-2 w-full rounded-md italic" placeholder="eg. Asuna#1254" wire:model="p4_name" />
                        <x-jet-input-error for="p4_name" />
                    </div>
                    <div class="mt-2">
                        <x-jet-label>Enter In-Game Name (Player 5)</x-jet-label>
                        <input type="text" class="py-1 px-2 w-full rounded-md italic" placeholder="eg. Hiko#6521" wire:model="p5_name" />
                        <x-jet-input-error for="p5_name" />
                    </div>
                    <div class="mt-2">
                        <x-jet-label> Overall Rank</x-jet-label>
                        <select wire:model="team_average_rank">
                            <option></option>
                            <option value="elo1">Iron - Bronze</option>
                            <option value="elo2">Silver - Gold</option>
                            <option value="elo3">Platinum - Diamond</option>
                            <option value="elo4">Immortal - Radiant</option>
                          </select>
                        <x-jet-input-error for="team_average_rank" />
                    </div>
                @endif
                <div class="mt-4">
                    <x-jet-button class="">Register</x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-modal>
</div>
