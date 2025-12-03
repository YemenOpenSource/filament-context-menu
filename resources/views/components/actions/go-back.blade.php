<button type="button" x-data x-on:click="window.history.back()"
        class="fi-button fi-color-gray flex items-center gap-2 justify-between">
    <x-filament::icon :icon="$getIcon()" class="w-5 h-5" />
    {{ $getLabel() ?? 'Go Back' }}
</button>
