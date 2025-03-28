<?php

namespace App\Models\Pieces;

class King extends AbstractSingleMovePiece
{
    public function getMoves(): array
    {
         return [
              [1, 0],
              [1, 1],
              [0, 1],
              [-1, 1],
              [-1, 0],
              [-1, -1],
              [0, -1],
              [1, -1],
         ];
    }

    public function getType(): string
    {
        return 'king';
    }
}