<?php

namespace App\Models\Pieces;

use App\Interfaces\Models\LongMovePieceInterface;

abstract class AbstractLongMovePiece extends AbstractPiece implements LongMovePieceInterface
{
    public function getPossibleMoves(array $opponentPieces, array $teamPieces): void
    {
        foreach ($this->getDirections() as [$dx, $dy]) {
            $x = $this->x;
            $y = $this->y;

            while(true) {
                $x += $dx;
                $y += $dy;

                // If the move is not valid, break the loop
                if (!$this->board->isAValidMove($x, $y)) {
                    break;
                }

                $this->board->setColor($x, $y, $opponentPieces, $teamPieces);

                // If a piece is present, break the loop
                if (isset($teamPieces[$x][$y]) || isset($opponentPieces[$x][$y])) {
                    break;
                }
            }
        }
    }
}