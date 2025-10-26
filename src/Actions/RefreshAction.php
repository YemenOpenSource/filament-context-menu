<?php

namespace AymanAlhattami\FilamentContextMenu\Actions;

use Filament\Actions\Action;

class RefreshAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'refresh';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label('Refresh')
            ->translateLabel()
            ->color('gray')
            ->icon('heroicon-o-arrow-path')
            ->Button()
            ->action(function () {
                $this->dispatch('refresh-page');
            })->extraAttributes([
            'x-data' => '',
            'x-on:refresh-page.window' => 'window.location.reload()',
        ]);
    }
}
