<?php

namespace app\Models\Pieces;

class Queen extends AbstractLongMovePiece
{
    public function getDirections(): array
    {
        return [
            [1, 0],
            [0, 1],
            [-1, 0],
            [0, -1],
            [1, 1],
            [1, -1],
            [-1, 1],
            [-1, -1]
        ];
    }

    public function getType(): string
    {
        return 'queen';
    }
}