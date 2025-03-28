<?php

namespace App\Models\Pieces;

class Bishop extends AbstractLongMovePiece
{
    public function getDirections(): array
    {
        return [
            [1, 1],
            [1, -1],
            [-1, 1],
            [-1, -1]
        ];
    }

    public function getType(): string {
        return 'bishop';
    }
}