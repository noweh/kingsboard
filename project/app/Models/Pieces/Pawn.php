<?php

namespace App\Models\Pieces;

class Pawn extends AbstractSingleMovePiece
{
    public function getMoves(): array {
        $direction = $this->team === 'allies' ? 1 : -1;
        return [[-1, $direction], [1, $direction]];
    }

    public function getType(): string {
        return 'pawn';
    }
}