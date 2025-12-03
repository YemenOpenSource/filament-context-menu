<button type="button" x-data x-on:click="window.history.forward()"
        class="fi-button fi-color-gray flex items-center gap-2 justify-between">
    <x-heroicon-o-arrow-right style="width: 20px; height: 20px; margin-inline: 10px;" />
    {{ $getLabel() ?? 'Go Forward' }}
</button>
