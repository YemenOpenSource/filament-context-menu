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

        $this->view('filament-context-menu::components.actions.go-back');
    }
}
