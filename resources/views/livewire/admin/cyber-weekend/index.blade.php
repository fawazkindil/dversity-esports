<div class="container mx-auto py-12">
    <div class="bg-white shadow p-4">
        <h1 class="uppercase font-bold text-lg mb-4">Registered team/player</h1>

        <div class="flex mb-4">
            <select class="border rounded-md" wire:model="team_type">
                {{-- <option value="">All</option>
                <option value="1">Solo</option> --}}
                <option value="2">Team</option>
            </select>
        </div>

        <table class="w-full">
            @php
                $td_class = 'p-3 border-b';
            @endphp
            <tr>
                <td class="uppercase font-bold text-sm mb-4 {{ $td_class }}">#</td>
                <td class="uppercase font-bold text-sm mb-4{{ $td_class }}">Team Type</td>
                <td class="uppercase font-bold text-sm mb-4{{ $td_class }}">Team Name/Player Name</td>
                <td class="uppercase font-bold text-sm mb-4{{ $td_class }}">Discord ID</td>
                <td class="uppercase font-bold text-sm mb-4{{ $td_class }}">Rank</td>
                <td class="uppercase font-bold text-sm mb-4{{ $td_class }} w-1"></td>
            </tr>
            @forelse ($cyber_weekends as $cyber_weekend)
                <tr>
                    <td class="{{ $td_class }}">{{ $loop->iteration }}</td>
                    <td class="{{ $td_class }}" class="{{ $td_class }}">
                        {{ $cyber_weekend->getTypeDescription() }}</td>
                    @if ($cyber_weekend->team_type == 2)
                        <td class="{{ $td_class }}">{{ $cyber_weekend->team->name }}</td>
                        <td class="{{ $td_class }}">{{ $cyber_weekend->team->discord_id}}</td>
                        <td class="{{ $td_class }}">{{ $cyber_weekend->team->average_rank }}</td>
                    @elseif ($cyber_weekend->team_type == 1)
                        <td class="{{ $td_class }}">{{ $cyber_weekend->player->name }}</td>
                        <td class="{{ $td_class }}">{{ $cyber_weekend->player->discord_id}}</td>
                        <td class="{{ $td_class }}">{{ $cyber_weekend->player->rank }}</td>
                    @endif
                    <td class="{{ $td_class }}">
                        @if ($cyber_weekend->team_type == 2)
                            <x-jet-button class="whitespace-nowrap" wire:click='viewPlayers({{ $cyber_weekend->team->id }})'>View Players</x-jet-button>
                        @endif
                        <x-jet-button class="bg-red-500 text-white mt-2" wire:click='delete({{ $cyber_weekend->id }})'>Delete</x-jet-button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No records</td>
                </tr>
            @endforelse
        </table>
    </div>

    <x-jet-modal wire:model="player_list_modal">
        <div class="p-4">
            @foreach ($players as $player)
                <p class="text-sm">Player {{ $loop->iteration }}: {{ $player->name }}</p>
            @endforeach
        </div>
    </x-jet-modal>
</div>
