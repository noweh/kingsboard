<?php

namespace App\Models\Pieces;

use ApiPlatform\Metadata\ApiResource;

#[ApiResource(operations: [])]
class Rook extends AbstractLongMovePiece
{
    public function getDirections(): array
    {
        return [
            [1, 0],
            [0, 1],
            [-1, 0],
            [0, -1]
        ];
    }

    public function getType(): string {
        return 'rook';
    }
}