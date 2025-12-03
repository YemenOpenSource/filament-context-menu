<?php

namespace AymanAlhattami\FilamentContextMenu\Actions;

use Filament\Actions\Action;

class GoForwardAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'go forward';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label('Go Forward');

        $this->icon('heroicon-o-arrow-right');

        $this->view('filament-context-menu::components.actions.go-forward');
    }
}
