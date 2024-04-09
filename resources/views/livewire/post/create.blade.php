<section>
    {{-- Do your work, then step back. --}}
    <h1 class="dark:text-white font-semibold text-2xl">Create Post</h1>
    <form wire:submit.prevent="submit" class="mt-6 space-y-6" enctype="multipart/form-data">
        <div>
            <x-input-label for="content" :value="__('Content')" />
            <textarea wire:model="content" id="content" name="content" type="text"
                class="mt-1 block w-full rounded-lg dark:bg-gray-900 dark:text-white" autofocus autocomplete="content">
            </textarea>
            <x-input-error class="mt-2" :messages="$errors->get('content')" />
        </div>
        <div>
            @if ($thumbnail)
            <img src="{{ $thumbnail->temporaryUrl() }}">
            @endif
            <x-input-label for="thumbnail" :value="__('Thumnail')" />
            <x-text-input wire:model="thumbnail" id="thumbnail" name="thumbnail" type="file"
                class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
        </div>
        <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>