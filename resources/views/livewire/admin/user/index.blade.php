<div class="container mx-auto py-12">

    <div class="flex justify-between">

        <div>
            <select class="rounded-md">
                <option value="">Admin</option>
                <option value="">Member</option>
                <option value="">Coach</option>
            </select>
        </div>
       {{--  <div>
            <x-jet-button>Create admin</x-jet-button>
            <x-jet-button>Create coach</x-jet-button>
        </div>--}}

    </div>

    <div class="bg-white shadow mt-4">
        <table class="w-full">
            <tr class="border-b">
                <td class="px-4 py-2 uppercase font-bold">#</td>
                <td class="px-4 py-2 uppercase font-bold">Name</td>
                <td class="px-4 py-2 uppercase font-bold">Email</td>
                <td class="px-4 py-2 uppercase font-bold"></td>
            </tr>
            @forelse ($users as $user)
                <tr>
                    <td class="px-4 py-2 text-sm">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2 text-sm">{{ $user->name }}</td>
                    <td class="px-4 py-2 text-sm">{{ $user->email }}</td>
                    <td class="px-4 py-2 text-sm w-1 whitespace-nowrap">
                       {{-- <x-jet-button>Edit</x-jet-button> --}}
                        <x-jet-button class="bg-red-500" wire:click="delete({{ $user->id }})">Delete</x-jet-button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No records...</td>
                </tr>
            @endforelse
        </table>
    </div>
</div>
