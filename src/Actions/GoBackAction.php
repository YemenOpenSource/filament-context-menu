<?php

namespace AymanAlhattami\FilamentContextMenu\Actions;

use Filament\Actions\Action;

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

        $this->label('Go Back');

        $this->icon('heroicon-o-arrow-left');

        $this->view('filament-context-menu::components.actions.go-back');
    }
}
