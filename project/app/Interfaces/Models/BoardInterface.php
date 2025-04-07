<?php

namespace App\Interfaces\Models;

interface BoardInterface
{
    public function isAValidMove(int $x, int $y): bool;
    public function initializeBoard(): void;
    public function setColor(int $x, int $y, PieceInterface $piece, array $opponentPieces, array $teamPieces): void;
}