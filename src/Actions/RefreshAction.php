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

        $this->label('Refresh');

        $this->view('filament-context-menu::components.actions.refresh-button');
    }
}
