<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ContentBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('content')
            ->schema([
                Textarea::make('content'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
