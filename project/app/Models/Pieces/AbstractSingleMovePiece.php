<?php

namespace App\Models\Pieces;

use App\Interfaces\Models\SingleMovePieceInterface;

abstract class AbstractSingleMovePiece extends AbstractPiece implements SingleMovePieceInterface
{
    public function getPossibleMoves(array $opponentPieces, array $teamPieces): void
    {
        foreach ($this->getMoves() as [$dx, $dy]) {
            $x = $this->x + $dx;
            $y = $this->y + $dy;

            $this->board->setColor($x, $y, $opponentPieces, $teamPieces);
        }
    }
}