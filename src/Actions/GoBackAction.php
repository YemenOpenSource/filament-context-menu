<?php

namespace AymanAlhattami\FilamentContextMenu\Actions;

use Filament\Actions\Action;
use Filament\Support\Icons\Heroicon;

class GoBackAction extends Action
{
    /**
     * @return string|null
     */
    public static function getDefaultName(): ?string
    {
        return 'go back';
    }

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->label('Go back')
            ->translateLabel()
            ->color('gray')
            ->icon(Heroicon::ArrowLeft)
            ->Button()
            ->action(function () {
                $this->dispatch('go-back');
            })->extraAttributes([
                'x-data' => '{}',
                'x-on:go-back.window' => 'window.history.back()',
            ]);
    }
}
