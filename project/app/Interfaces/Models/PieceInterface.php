<?php

namespace App\Interfaces\Models;

use app\Models\ChessBoard;

interface PieceInterface
{
    public function setPosition(int $x, int $y): void;
    public function getPosition(): array;
    public function getType(): string;
    public function getTeam(): string;
    public function getPossibleMoves(array $opponentPieces, array $teamPieces): void;
}