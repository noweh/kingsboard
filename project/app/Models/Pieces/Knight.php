<?php

namespace App\Models\Pieces;

class Knight extends AbstractSingleMovePiece
{
    public function getMoves(): array {
        return [
            [2, 1],
            [2, -1],
            [-2, 1],
            [-2, -1],
            [1, 2],
            [1, -2],
            [-1, 2],
            [-1, -2],
        ];
    }

    public function getType(): string {
        return 'knight';
    }
}