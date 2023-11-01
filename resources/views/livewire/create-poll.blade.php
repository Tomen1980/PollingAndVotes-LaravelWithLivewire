<div>
    <form wire:submit.prevent="createPoll">
        <label>Poll Title</label>

        <input type="text" name="title" wire:model="title" />
        Current title: {{ $title }}

        @error('title')
            <div class="text-red-500">
                {{ $message }}
            </div>
        @enderror

        <div class="mb-4 mt-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>

        <div class="mt-4">

            @foreach ($options as $index => $option)
                <div class="mb-4">
                    <div>Options {{ $index + 1 }} </div>
                    <div class="flex gap-2">
                        <input type="text" wire:model="options.{{ $index }}" />
                        <button class="btn" wire:click.prevent = "removeOptions({{ $index }})">Remove</button>
                    </div>
                    @error("options.{$index}")
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn">Create Poll</button>
    </form>

</div>
