<?php

namespace AymanAlhattami\FilamentContextMenu\Traits;

use Closure;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Support\Components\Contracts\HasEmbeddedView;

trait ColumnHasContextMenu
{
    protected Closure | bool $contextMenuEnabled = true;

    public const GROUPED_VIEW = 'filament::components.dropdown.list.item';

    protected Closure | array $contextMenuActions = [];

    protected function setUp(): void
    {
        parent::setUp();

        $this->view('filament-context-menu::filament.tables.columns.context-menu-column');
    }

    public function getContextMenuActions(): array
    {
        $actions = array_filter(
            $this->evaluate($this->contextMenuActions),
            fn ($action) => $action instanceof Action || $action instanceof ActionGroup,
        );

        return array_map(
            fn (Action|ActionGroup $action) => match (true) {
                $action instanceof Action => $action->defaultView(ActionGroup::GROUPED_VIEW),
                $action instanceof ActionGroup => $action->defaultTriggerView(ActionGroup::GROUPED_VIEW),
            },
            $actions,
        );
    }

    public function contextMenuActions(array | Closure $contextMenuActions): static
    {
        $this->contextMenuActions = $contextMenuActions;

        return $this;
    }

    public function getContextMenuActionGroup(): ?ActionGroup
    {
        $actions = array_filter($this->getContextMenuActions(), fn($action) => $action instanceof Action);

        if (empty($actions)) {
            return null;
        }

        return ActionGroup::make($actions)
            ->icon('heroicon-o-ellipsis-vertical')
            ->button()
            ->color('gray');
    }

    public function enableContextMenu(bool | Closure $contextMenuEnabled = true): static
    {
        $this->contextMenuEnabled = $contextMenuEnabled;

        return $this;
    }

    public function isContextMenuEnabled(): bool
    {
        return $this->evaluate($this->contextMenuEnabled)
            && config('filament-context-menu.enabled', true)
            && count($this->getContextMenuActions());
    }
}
