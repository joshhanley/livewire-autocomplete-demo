<div class="relative w-full h-screen p-4 flex flex-col  items-center bg-gray-100">
    <div class="flex flex space-x-4">
        <div class="w-48">
            <label class="font-bold" for="user-name">Search for User</label>
            <div>
                <x-lwa::autocomplete
                    name="user-name"
                    wire:model-text="name"
                    wire:model-id="userId"
                    wire:model-results="users"
                    :options="[
                        'text'=> 'name',
                        'allow-new'=> 'false',
                    ]" />
            </div>
        </div>

        <div class="w-48">
            <h1 class="font-bold">Selected User</h1>
            <p>ID: {{ $user->id ?? null }}</p>
            <p>Name: {{ $user->name ?? null }}</p>
        </div>
    </div>
</div>
