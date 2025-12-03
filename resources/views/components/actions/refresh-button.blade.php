<button type="button" x-data x-on:click="window.location.reload()"
        class="fi-button fi-color-gray flex items-center gap-2 justify-between">
    <x-heroicon-o-arrow-path style="width: 20px; height: 20px; margin-inline: 10px;" />
    {{ $getLabel() ?? 'Refresh' }}
</button>
